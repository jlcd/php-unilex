<?php

namespace Remorhaz\UniLex\Parser\LL1;

use Remorhaz\UniLex\Exception;
use Remorhaz\UniLex\Grammar\ContextFree\GrammarInterface;
use Remorhaz\UniLex\Parser\LL1\Lookup\Table;
use Remorhaz\UniLex\Parser\Production;
use Remorhaz\UniLex\Parser\Symbol;
use Remorhaz\UniLex\Stack\SymbolStack;
use Remorhaz\UniLex\Stack\StackableSymbolInterface;
use Remorhaz\UniLex\Lexer\Token;
use Remorhaz\UniLex\Lexer\TokenReaderInterface;
use Remorhaz\UniLex\Parser\LL1\Lookup\TableInterface;
use Remorhaz\UniLex\Parser\LL1\Lookup\TableBuilder;
use Throwable;

class Parser
{

    private $grammar;

    private $lookupTable;

    private $symbolStack;

    private $token;

    private $tokenReader;

    private $listener;

    private $nextSymbolIndex = 0;

    /**
     * @var Production[]
     */
    private $productionMap = [];

    public function __construct(
        GrammarInterface $grammar,
        TokenReaderInterface $tokenReader,
        ParserListenerInterface $listener
    ) {
        $this->grammar = $grammar;
        $this->tokenReader = $tokenReader;
        $this->listener = $listener;
        $this->symbolStack = new SymbolStack();
    }

    /**
     * @param string $fileName
     * @throws Exception
     */
    public function loadLookupTable(string $fileName): void
    {
        /** @noinspection PhpIncludeInspection */
        $data = @include $fileName;
        if (false === $data) {
            throw new Exception("Failed to load lookup table from file {$fileName}");
        }
        $table = new Table();
        $table->importMap($data);
        unset($data); // Freeing memory
        $this->lookupTable = $table;
    }

    /**
     * @throws Exception
     * @throws UnexpectedTokenException
     */
    public function run(): void
    {
        $this->initRun();
        while ($this->hasSymbolInStack()) {
            $symbol = $this->popSymbol();
            if ($symbol instanceof Symbol) {
                $this->isTerminalSymbol($symbol)
                    ? $this->readSymbolToken($symbol)
                    : $this->pushMatchingProduction($symbol);
                continue;
            }
            if ($symbol instanceof Production) {
                $this->listener->onFinishProduction($symbol);
            }
        }
    }

    private function initRun(): void
    {
        $this->nextSymbolIndex = 0;
        $this->productionMap = [];
        $this->symbolStack->reset();
        $this->listener->onStart();
        $this->pushProduction($this->createRootProduction());
    }

    private function createRootProduction(): Production
    {
        $rootSymbol = new Symbol($this->getNextSymbolIndex(), $this->grammar->getRootSymbol());
        $this->listener->onRootSymbol($rootSymbol);
        return $this->createParsedProduction($rootSymbol, 0);
    }

    private function getNextSymbolIndex(): int
    {
        return $this->nextSymbolIndex++;
    }

    private function hasSymbolInStack(): bool
    {
        return !$this->symbolStack->isEmpty();
    }

    private function isTerminalSymbol(Symbol $symbol): bool
    {
        return $this->grammar->isTerminal($symbol->getSymbolId());
    }

    private function previewToken(): Token
    {
        if (!isset($this->token)) {
            $this->token = $this->tokenReader->read();
        }
        return $this->token;
    }

    /**
     * @return StackableSymbolInterface
     * @throws Exception
     */
    private function popSymbol(): StackableSymbolInterface
    {
        return $this->symbolStack->pop();
    }

    /**
     * @param Symbol $symbol
     * @throws Exception
     */
    private function onSymbol(Symbol $symbol): void
    {
        if (!isset($this->productionMap[$symbol->getIndex()])) {
            throw new Exception("No production in map for symbol {$symbol->getIndex()}");
        }
        [$symbolIndex, $production] = $this->productionMap[$symbol->getIndex()];
        $this->listener->onSymbol($symbolIndex, $production);
    }

    /**
     * @param Symbol $symbol
     * @throws Exception
     */
    private function readSymbolToken(Symbol $symbol): void
    {
        $token = $this->previewToken();
        if (!$this->grammar->tokenMatchesTerminal($symbol->getSymbolId(), $token->getType())) {
            throw new Exception("Unexpected token {$token->getType()} for symbol {$symbol->getSymbolId()}");
        }
        $token->isEoi()
            ? $this->listener->onEoi($symbol, $token)
            : $this->listener->onToken($symbol, $token);
        $this->onSymbol($symbol);
        unset($this->token);
    }

    /**
     * @param Symbol $symbol
     * @throws UnexpectedTokenException
     * @throws Exception
     */
    private function pushMatchingProduction(Symbol $symbol): void
    {
        $this->onSymbol($symbol);
        $production = $this->getMatchingProduction($symbol, $this->previewToken());
        $this->pushProduction($production);
    }

    private function pushProduction(Production $production): void
    {
        $this->symbolStack->push($production);
        foreach ($production->getSymbolList() as $symbolIndexInProduction => $symbol) {
            $this->productionMap[$symbol->getIndex()] = [$symbolIndexInProduction, $production];
        }
        $this->symbolStack->push(...$production->getSymbolList());
        $this->listener->onBeginProduction($production);
    }

    /**
     * @param Symbol $symbol
     * @param Token $token
     * @return Production
     * @throws UnexpectedTokenException
     * @throws Exception
     */
    private function getMatchingProduction(Symbol $symbol, Token $token): Production
    {
        $lookupTable = $this->getLookupTable();
        try {
            $productionIndex = $lookupTable->getProductionIndex($symbol->getSymbolId(), $token->getType());
        } catch (Throwable $e) {
            $expectedTokenList = $lookupTable->getExpectedTokenList($symbol->getSymbolId());
            $error = new UnexpectedTokenError($token, $symbol, ...$expectedTokenList);
            throw new UnexpectedTokenException($error, 0, $e);
        }
        return $this->createParsedProduction($symbol, $productionIndex);
    }

    private function createParsedProduction(Symbol $symbol, $productionIndex): Production
    {
        $grammarProduction = $this
            ->grammar
            ->getProduction($symbol->getSymbolId(), $productionIndex);
        $symbolList = [];
        foreach ($grammarProduction->getSymbolList() as $symbolId) {
            $symbolList[] = new Symbol($this->getNextSymbolIndex(), $symbolId);
        }
        return new Production($symbol, $grammarProduction->getIndex(), ...$symbolList);
    }

    /**
     * @return TableInterface
     * @throws Exception
     */
    private function getLookupTable(): TableInterface
    {
        if (!isset($this->lookupTable)) {
            $builder = new TableBuilder($this->grammar);
            $this->lookupTable = $builder->getTable();
        }
        return $this->lookupTable;
    }
}
