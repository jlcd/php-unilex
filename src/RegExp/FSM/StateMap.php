<?php

namespace Remorhaz\UniLex\RegExp\FSM;

use Remorhaz\UniLex\Exception;

class StateMap implements StateMapInterface
{

    private $lastStateId = 0;

    private $stateList = [];

    private $startState;

    public function createState(): int
    {
        $stateId = ++$this->lastStateId;
        $this->stateList[$stateId] = true;
        return $stateId;
    }

    /**
     * @param int $stateId
     * @throws Exception
     */
    public function setStartState(int $stateId): void
    {
        if (isset($this->startState)) {
            throw new Exception("Start state is already set");
        }
        $this->startState = $this->getValidState($stateId);
    }

    /**
     * @return int
     * @throws Exception
     */
    public function getStartState(): int
    {
        if (!isset($this->startState)) {
            throw new Exception("Start state is undefined");
        }
        return $this->startState;
    }

    public function stateExists(int $stateId): bool
    {
        return isset($this->stateList[$stateId]);
    }

    /**
     * @param int $stateId
     * @return int
     * @throws Exception
     */
    private function getValidState(int $stateId): int
    {
        if (!$this->stateExists($stateId)) {
            throw new Exception("State {$stateId} is undefined");
        }
        return $stateId;
    }
}
