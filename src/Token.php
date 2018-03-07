<?php

namespace Remorhaz\UniLex;

class Token
{

    private $type;

    private $isEoi;

    private $attributeList = [];

    public function __construct(int $type, bool $isEoi)
    {
        $this->type = $type;
        $this->isEoi = $isEoi;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function isEoi(): bool
    {
        return $this->isEoi;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @throws Exception
     */
    public function setAttribute(string $name, $value): void
    {
        if (isset($this->attributeList[$name])) {
            throw new Exception("Synthesized attribute {$name} is already set");
        }
        $this->attributeList[$name] = $value;
    }

    /**
     * @param string $name
     * @return mixed
     * @throws Exception
     */
    public function getAttribute(string $name)
    {
        if (!isset($this->attributeList[$name])) {
            throw new Exception("Synthesized attribute {$name} is undefined");
        }
        return $this->attributeList[$name];
    }
}