<?php

namespace Remorhaz\UniLex\Test;

use PHPUnit\Framework\TestCase;
use Remorhaz\UniLex\Token;
use Remorhaz\UniLex\TokenPosition;
use Remorhaz\UniLex\CharBuffer;

/**
 * @covers \Remorhaz\UniLex\CharBuffer
 */
class CharBufferTest extends TestCase
{

    public function testIsEnd_EmptyString_ReturnsTrue(): void
    {
        $actualValue = CharBuffer::fromString('')->isEnd();
        self::assertTrue($actualValue);
    }

    public function testIsEnd_NotEmptyString_ReturnsFalse(): void
    {
        $actualValue = CharBuffer::fromString('a')->isEnd();
        self::assertFalse($actualValue);
    }

    /**
     * @expectedException \Remorhaz\UniLex\Exception
     * @expectedExceptionMessage No symbol to preview at index 0
     * @throws \Remorhaz\UniLex\Exception
     */
    public function testGetSymbol_EmptyString_ThrowsException(): void
    {
        CharBuffer::fromString('')->getSymbol();
    }

    /**
     * @throws \Remorhaz\UniLex\Exception
     */
    public function testGetSymbol_NotEmptyString_ReturnsFirstByte(): void
    {
        $actualValue = CharBuffer::fromString('a')->getSymbol();
        self::assertSame(0x61, $actualValue);
    }

    /**
     * @expectedException \Remorhaz\UniLex\Exception
     * @expectedExceptionMessage Unexpected end of buffer on preview at index 0
     * @throws \Remorhaz\UniLex\Exception
     */
    public function testNextSymbol_EmptyString_ThrowsException(): void
    {
        CharBuffer::fromString('')->nextSymbol();
    }

    /**
     * @throws \Remorhaz\UniLex\Exception
     */
    public function testNextSymbol_NotEmptyString_GetSymbolReturnsSecondByte(): void
    {
        $buffer = CharBuffer::fromString('ab');
        $buffer->nextSymbol();
        $actualValue = $buffer->getSymbol();
        self::assertSame(0x62, $actualValue);
    }

    /**
     * @throws \Remorhaz\UniLex\Exception
     */
    public function testResetToken_NextSymbolCalled_GetSymbolReturnsFirstByte(): void
    {
        $buffer = CharBuffer::fromString('ab');
        $buffer->nextSymbol();
        $buffer->resetToken();
        $actualValue = $buffer->getSymbol();
        self::assertSame(0x61, $actualValue);
    }

    /**
     * @throws \Remorhaz\UniLex\Exception
     */
    public function testFinishToken_NotAtBufferEnd_GetSymbolAfterResetTokenReturnsSecondByte(): void
    {
        $buffer = CharBuffer::fromString('ab');
        $buffer->nextSymbol();
        $buffer->finishToken(new Token(1, false));
        $buffer->resetToken();
        $actualValue = $buffer->getSymbol();
        self::assertSame(0x62, $actualValue);
    }

    /**
     * @throws \Remorhaz\UniLex\Exception
     */
    public function testExtractToken_NoTokenPreviewed_ReturnsEmptyBuffer(): void
    {
        $buffer = CharBuffer::fromString('a');
        $token = $buffer->extractToken(new TokenPosition(0, 0));
        self::assertEquals(0, $token->count());
    }

    /**
     * @param string $text
     * @dataProvider providerSingleSymbolToken
     * @throws \Remorhaz\UniLex\Exception
     */
    public function testExtractToken_SingleSymbolTokenPreviewed_ReturnsBufferOfMatchingSize(string $text): void
    {
        $buffer = CharBuffer::fromString($text);
        $token = $buffer->extractToken(new TokenPosition(0, 1));
        self::assertEquals(1, $token->count());
    }

    public function providerSingleSymbolToken(): array
    {
        return [
            'ASCII char' => ['a', 0x61],
            'Cyrillic char' => ['б', 0x0431],
            'Japanese hieroglyph' => ['本', 0x672C],
            'Cuneiform char' => ["\u{0122F0}", 0x122F0],
        ];
    }
}