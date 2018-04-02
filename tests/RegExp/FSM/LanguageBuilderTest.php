<?php

namespace Remorhaz\UniLex\Test\RegExp\FSM;

use PHPUnit\Framework\TestCase;
use Remorhaz\UniLex\RegExp\FSM\LanguageBuilder;
use Remorhaz\UniLex\RegExp\FSM\Range;
use Remorhaz\UniLex\RegExp\FSM\RangeSet;
use Remorhaz\UniLex\RegExp\FSM\StateMapInterface;
use Remorhaz\UniLex\RegExp\FSM\TransitionMap;

/**
 * @covers \Remorhaz\UniLex\RegExp\FSM\LanguageBuilder
 */
class LanguageBuilderTest extends TestCase
{

    /**
     * @throws \Remorhaz\UniLex\Exception
     */
    public function testAddTransition_NoTransitionsAdded_TransitionMapContainsMatchingList(): void
    {
        $transitionMap = new TransitionMap($this->createStateMap());
        $languageBuilder = new LanguageBuilder($transitionMap);
        $languageBuilder->addTransition(1, 2, new Range(1, 2));
        $expectedValue = [1 => [2 => [0]]];
        $actualValue = $transitionMap->getTransitionList();
        self::assertEquals($expectedValue, $actualValue);
    }

    /**
     * @param array $firstTransitionData
     * @param array $secondTransitionData
     * @param array $firstRangeData
     * @param array $secondRangeData
     * @param array $expectedValue
     * @throws \Remorhaz\UniLex\Exception
     * @dataProvider providerAddTransitionCalledTwiceTransitions
     */
    public function testAddTransition_TransitionWithSameRangeAdded_TransitionMapContainsMatchingList(
        array $firstTransitionData,
        array $secondTransitionData,
        array $firstRangeData,
        array $secondRangeData,
        array $expectedValue
    ): void {
        $transitionMap = new TransitionMap($this->createStateMap());
        $languageBuilder = new LanguageBuilder($transitionMap);
        [$stateIn, $stateOut] = $firstTransitionData;
        $languageBuilder->addTransition($stateIn, $stateOut, ...Range::importList(...$firstRangeData));
        [$stateIn, $stateOut] = $secondTransitionData;
        $languageBuilder->addTransition($stateIn, $stateOut, ...Range::importList(...$secondRangeData));
        $actualValue = $transitionMap->getTransitionList();
        self::assertEquals($expectedValue, $actualValue);
    }

    public function providerAddTransitionCalledTwiceTransitions(): array
    {
        return [
            "Same ranges" => [[1, 2], [1, 3], [[1, 2]], [[1, 2]], [1 => [2 => [0], 3 => [0]]]],
            "Not intersecting ranges" => [[1, 2], [1, 3], [[1, 2]], [[3, 4]], [1 => [2 => [0], 3 => [1]]]],
            "Partially intersecting ranges" => [[1, 2], [1, 3], [[1, 2]], [[2, 4]], [1 => [2 => [0, 1], 3 => [1, 2]]]],
        ];
    }

    /**
     * @param array $firstTransitionData
     * @param array $secondTransitionData
     * @param array $firstRangeData
     * @param array $secondRangeData
     * @param array $expectedValue
     * @throws \Remorhaz\UniLex\Exception
     * @dataProvider providerAddTransitionCalledTwiceSymbols
     */
    public function testAddTransition_TransitionWithSameRangeAdded_GetSymbolMapReturnsMatchingValue(
        array $firstTransitionData,
        array $secondTransitionData,
        array $firstRangeData,
        array $secondRangeData,
        array $expectedValue
    ): void {
        $transitionMap = new TransitionMap($this->createStateMap());
        $languageBuilder = new LanguageBuilder($transitionMap);
        [$stateIn, $stateOut] = $firstTransitionData;
        $languageBuilder->addTransition($stateIn, $stateOut, ...Range::importList(...$firstRangeData));
        [$stateIn, $stateOut] = $secondTransitionData;
        $languageBuilder->addTransition($stateIn, $stateOut, ...Range::importList(...$secondRangeData));
        $actualValue = $this->exportSymbolMap($languageBuilder->getSymbolMap());
        self::assertEquals($expectedValue, $actualValue);
    }

    public function providerAddTransitionCalledTwiceSymbols(): array
    {
        return [
            "Same ranges" => [[1, 2], [1, 3], [[1, 2]], [[1, 2]], [0 => [[1, 2]]]],
            "Not intersecting ranges" => [[1, 2], [1, 3], [[1, 2]], [[3, 4]], [0 => [[1, 2]], 1 => [[3, 4]]]],
            "Partially intersecting ranges" => [
                [1, 2],
                [1, 3],
                [[1, 2]], [[2, 4]],
                [0 => [[1, 1]], 1 => [[2, 2]], 2 => [[3, 4]]],
            ],
        ];
    }

    private function createStateMap(): StateMapInterface
    {
        return new class implements StateMapInterface {

            public function stateExists(int $stateId): bool
            {
                return true;
            }
        };
    }

    /**
     * @param RangeSet[] $symbolMap
     * @return array
     */
    private function exportSymbolMap(array $symbolMap): array
    {
        $result = [];
        foreach ($symbolMap as $symbolId => $rangeSet) {
            $result[$symbolId] = $rangeSet->export();
        }
        return $result;
    }
}