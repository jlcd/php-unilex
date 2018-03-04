<?php

namespace Remorhaz\UniLex\Test\Unicode;

use PHPUnit\Framework\TestCase;
use Remorhaz\UniLex\SymbolBuffer;
use Remorhaz\UniLex\Unicode\Grammar\TokenType;
use Remorhaz\UniLex\Unicode\LexemeFactory;
use Remorhaz\UniLex\Unicode\SymbolInfo;
use Remorhaz\UniLex\Unicode\Utf8LexemeMatcher;

/**
 * @covers \Remorhaz\UniLex\Unicode\Utf8LexemeMatcher
 */
class Utf8LexemeMatcherTest extends TestCase
{

    /**
     * @param string $text
     * @dataProvider providerValidSymbolList
     */
    public function testMatch_ValidText_ReturnsSymbolLexeme(string $text): void
    {
        $buffer = SymbolBuffer::fromString($text);
        $actual = (new Utf8LexemeMatcher)->match($buffer, new LexemeFactory)->getType();
        self::assertEquals(TokenType::SYMBOL, $actual);
    }

    /**
     * @param string $text
     * @param int $expectedSymbol
     * @dataProvider providerValidSymbolList
     */
    public function testMatch_ValidText_ReturnsMatchingSymbolInfoInLexeme(
        string $text,
        int $expectedSymbol
    ): void {
        $buffer = SymbolBuffer::fromString($text);
        $lexemeFactory = new LexemeFactory;
        $expectedValue = new SymbolInfo($expectedSymbol);
        $actualValue = (new Utf8LexemeMatcher)->match($buffer, $lexemeFactory)->getMatcherInfo();
        self::assertEquals($expectedValue, $actualValue);
    }

    public function providerValidSymbolList(): array
    {
        return [
            'Single ASCII char' => ['a', 0x61],
            'Multiple ASCII chars' => ['cba', 0x63],
            'Single cyrillic char' => ['б', 0x0431],
            'Single Japanese hieroglyph' => ['本', 0x672C],
            'Single cuneiform char' => ["\u{0122F0}", 0x122F0],
            'Single 5-byte NULL char' => ["\xF8\x80\x80\x80\x80", 0x00],
            'Single 6-byte NULL char' => ["\xFC\x80\x80\x80\x80\x80", 0x00],
        ];
    }

    /**
     * @param string $text
     * @dataProvider providerInvalidText
     */
    public function testMatch_InvalidText_ReturnsInvalidBytesLexeme(string $text): void
    {
        $buffer = SymbolBuffer::fromString($text);
        $lexemeFactory = new LexemeFactory;
        $actual = (new Utf8LexemeMatcher)->match($buffer, $lexemeFactory)->getType();
        self::assertEquals(TokenType::INVALID_BYTES, $actual);
    }

    public function providerInvalidText(): array
    {
        return [
            'Single tail byte' => ["\x80", 1, 0x80],
            'Tail byte before valid ASCII symbol' => ["\x80a", 1, 0x80],
            'Null byte as 2-byte symbol tail' => ["\xC0\x00", 2, 0x00],
            'Null byte as 3-byte symbol last tail' => ["\xE0\xAF\x00", 3, 0x00],
            'Null byte as 3-byte symbol first tail' => ["\xE0\x00\xB5", 2, 0x00],
            'Null byte as 4-byte symbol first tail' => ["\xF0\x00\x88\x98", 2, 0x00],
            'Null byte as 5-byte symbol first tail' => ["\xF8\x00\x80\x90\x9A", 2, 0x00],
            'Null byte as 6-byte symbol first tail' => ["\xFC\x00\x80\x80\x90\x9A", 2, 0x00],
            'Null byte as 6-byte symbol last tail' => ["\xFC\x80\x80\x80\x90\x00", 6, 0x00],
        ];
    }
}
