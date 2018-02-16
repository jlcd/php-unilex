<?php

namespace Remorhaz\UniLex\RegExp;

use Remorhaz\UniLex\LexemeInfoInterface;

class Lexeme extends \Remorhaz\UniLex\Lexeme
{
    private $type;

    private $symbol;

    public function __construct(LexemeInfoInterface $info, int $type, int $symbol)
    {
        parent::__construct($info);
        $this->type = $type;
        $this->symbol = $symbol;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function getSymbol(): int
    {
        return $this->symbol;
    }
}
