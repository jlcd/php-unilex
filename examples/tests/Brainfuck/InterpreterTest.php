<?php

namespace Remorhaz\UniLex\Example\Test\Brainfuck;

use PHPUnit\Framework\TestCase;
use Remorhaz\UniLex\Example\Brainfuck\Interpreter;

/**
 * @covers \Remorhaz\UniLex\Example\Brainfuck\Interpreter
 */
class InterpreterTest extends TestCase
{

    /**
     * @throws \Remorhaz\UniLex\Example\Brainfuck\Exception
     * @throws \Remorhaz\UniLex\Exception
     */
    public function testExec_ValidInput_GetOutputReturnsMatchingValue(): void
    {
        $code =
            "++++++++++[>+++++++>++++++++++>+++>+<<<<-]>++" .
            ".>+.+++++++..+++.>++.<<+++++++++++++++.>.+++." .
            "------.--------.>+.>.";
        $interpreter = new Interpreter;
        $interpreter->exec($code);
        $actualValue = $interpreter->getOutput();
        self::assertSame("Hello World!\n", $actualValue);
    }

    /**
     * @throws \Remorhaz\UniLex\Example\Brainfuck\Exception
     * @expectedException \Remorhaz\UniLex\Example\Brainfuck\Exception
     * @expectedExceptionMessage Output is not defined
     */
    public function testGetOutput_NoExecCalled_ThrowsException(): void
    {
        (new Interpreter)->getOutput();
    }
}