<?php

namespace Remorhaz\UniLex\SyntaxTree\SDD;

use Remorhaz\UniLex\Exception;
use Remorhaz\UniLex\LL1Parser\SDD\ProductionContextInterface;

class ProductionRuleContext extends TreeRuleContext implements ProductionContextInterface
{

    /**
     * @param string $name
     * @return mixed
     * @throws Exception
     */
    public function getAttribute(string $name)
    {
        return $this
            ->getProduction()
            ->getHeader()
            ->getAttribute($name);
    }

    /**
     * @param string $attr
     * @param $value
     * @return ProductionRuleContext
     * @throws Exception
     */
    public function setAttribute(string $attr, $value): self
    {
        $this
            ->getProduction()
            ->getHeader()
            ->setAttribute($attr, $value);
        return $this;
    }
}
