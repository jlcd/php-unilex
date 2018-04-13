<?php

namespace Remorhaz\UniLex\Example\Test\Brainfuck;

use PHPUnit\Framework\TestCase;
use Remorhaz\UniLex\Example\Brainfuck\Command\OutputCommand;
use Remorhaz\UniLex\Example\Brainfuck\Runtime;

/**
 * @covers \Remorhaz\UniLex\Example\Brainfuck\Runtime
 * @covers \Remorhaz\UniLex\Example\Brainfuck\Command\OutputCommand
 */
class RuntimeTest extends TestCase
{

    /**
     * @param int $memory
     * @dataProvider providerNonPositiveMemory
     * @throws \Remorhaz\UniLex\Example\Brainfuck\Exception
     * @expectedException \Remorhaz\UniLex\Example\Brainfuck\Exception
     * @expectedExceptionMessage Memory amount must be positive
     */
    public function testConstruct_NonPositiveMemory_ThrowsException(int $memory): void
    {
        new Runtime($memory);
    }

    public function providerNonPositiveMemory(): array
    {
        return [
            'Zero memory' => [0],
            'Negative memory' => [-1],
        ];
    }

    /**
     * @throws \Remorhaz\UniLex\Example\Brainfuck\Exception
     */
    public function testGetOutput_NoOutputCommandsExecuted_ReturnsEmptyString(): void
    {
        $actualValue = (new Runtime)->getOutput();
        self::assertSame('', $actualValue);
    }

    /**
     * @throws \Remorhaz\UniLex\Example\Brainfuck\Exception
     */
    public function testGetOutput_OutputCommandExecuted_ReturnsMatchingString(): void
    {
        $runtime = new Runtime;
        $command = new OutputCommand($runtime);
        $runtime->addCommand($command);
        $command->exec();
        $actualValue = $runtime->getOutput();
        self::assertSame("\0", $actualValue);
    }
}
