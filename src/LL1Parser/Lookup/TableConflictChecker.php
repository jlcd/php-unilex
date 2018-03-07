<?php

namespace Remorhaz\UniLex\LL1Parser\Lookup;

use Remorhaz\UniLex\Exception;
use Remorhaz\UniLex\Grammar\ContextFree\GrammarInterface;
use Remorhaz\UniLex\Grammar\ContextFree\Production;

class TableConflictChecker
{

    private $grammar;

    private $first;

    private $follow;

    public function __construct(GrammarInterface $grammar, FirstInterface $first, FollowInterface $follow)
    {
        $this->grammar = $grammar;
        $this->first = $first;
        $this->follow = $follow;
    }

    /**
     * @throws Exception
     */
    public function check(): void
    {
        foreach ($this->grammar->getNonTerminalList() as $symbolId) {
            $this->checkSymbolConflicts($symbolId);
        }
    }

    /**
     * @param int $symbolId
     * @throws Exception
     */
    private function checkSymbolConflicts(int $symbolId): void
    {
        $productionList = $this->grammar->getProductionList($symbolId);
        foreach ($productionList as $alpha) {
            foreach ($productionList as $beta) {
                $this->checkProductionConflicts($alpha, $beta);
            }
        }
    }

    /**
     * @param Production $alpha
     * @param Production $beta
     * @throws Exception
     */
    private function checkProductionConflicts(Production $alpha, Production $beta): void
    {
        if ($alpha->getIndex() == $beta->getIndex()) {
            return;
        }
        $this->checkFirstFirstConflict($alpha, $beta);
        $this->checkFirstFollowConflict($alpha, $beta);
    }

    /**
     * @param Production $alpha
     * @param Production $beta
     * @throws Exception
     */
    private function checkFirstFirstConflict(Production $alpha, Production $beta): void
    {
        if ($alpha->getSymbolId() != $beta->getSymbolId()) {
            throw new Exception("Cannot check FIRST({$alpha})/FIRST({$beta}) conflict");
        }
        $firstAlpha = $this->first->getProductionTokens(...$alpha->getSymbolList());
        $firstBeta = $this->first->getProductionTokens(...$beta->getSymbolList());
        $message = "FIRST({$alpha})/FIRST({$beta}) conflict";
        $this->checkConflict($firstAlpha, $firstBeta, $message);
    }

    /**
     * @param Production $alpha
     * @param Production $beta
     * @throws Exception
     */
    private function checkFirstFollowConflict(Production $alpha, Production $beta): void
    {
        if ($alpha->getSymbolId() != $beta->getSymbolId()) {
            throw new Exception("Cannot check FIRST({$alpha})/FOLLOW({$alpha->getSymbolId()}) conflict");
        }
        if (!$this->first->productionHasEpsilon(...$beta->getSymbolList())) {
            return;
        }
        $follow = $this->follow->getTokens($alpha->getSymbolId());
        $firstAlpha = $this->first->getProductionTokens(...$alpha->getSymbolList());
        $message = "FIRST({$alpha})/FOLLOW({$alpha->getSymbolId()}) conflict (ε ∈ {$beta})";
        $this->checkConflict($follow, $firstAlpha, $message);
    }

    /**
     * @param array $tokenListA
     * @param array $tokenListB
     * @param string $message
     * @throws Exception
     */
    private function checkConflict(array $tokenListA, array $tokenListB, string $message): void
    {
        $conflict = array_intersect($tokenListA, $tokenListB);
        if (!empty($conflict)) {
            $conflictText = implode(', ', $conflict);
            throw new Exception("{$message}: {$conflictText}");
        }
    }
}