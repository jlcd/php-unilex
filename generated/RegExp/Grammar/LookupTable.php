<?php
/**
 * RegExp lookup table for usage with LL(1) parser.
 *
 * Auto-generated file, please don't edit manually.
 * Run following command to update this file:
 *     vendor/bin/phing regexp-lookup-table
 *
 * Phing version: 2.16.1
 */

use Remorhaz\UniLex\RegExp\Grammar\SymbolType;
use Remorhaz\UniLex\RegExp\Grammar\TokenType;

return [
    SymbolType::NT_PARTS => [
        TokenType::CIRCUMFLEX => 0,
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::DOT => 0,
        TokenType::COMMA => 0,
        TokenType::HYPHEN => 0,
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::CAPITAL_P => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::SMALL_C => 0,
        TokenType::SMALL_O => 0,
        TokenType::SMALL_P => 0,
        TokenType::SMALL_U => 0,
        TokenType::SMALL_X => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
        TokenType::CTL_ASCII => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
        TokenType::OTHER_ASCII => 0,
        TokenType::NOT_ASCII => 0,
        TokenType::BACKSLASH => 0,
        TokenType::VERTICAL_LINE => 0,
        TokenType::EOI => 0,
        TokenType::RIGHT_BRACKET => 0,
    ],
    SymbolType::NT_ALT_PARTS => [
        TokenType::VERTICAL_LINE => 0,
        TokenType::EOI => 1,
        TokenType::RIGHT_BRACKET => 1,
    ],
    SymbolType::NT_ALT_PARTS_TAIL => [
        TokenType::VERTICAL_LINE => 0,
        TokenType::EOI => 1,
        TokenType::RIGHT_BRACKET => 1,
    ],
    SymbolType::NT_PART => [
        TokenType::CIRCUMFLEX => 0,
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::DOT => 0,
        TokenType::COMMA => 0,
        TokenType::HYPHEN => 0,
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::CAPITAL_P => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::SMALL_C => 0,
        TokenType::SMALL_O => 0,
        TokenType::SMALL_P => 0,
        TokenType::SMALL_U => 0,
        TokenType::SMALL_X => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
        TokenType::CTL_ASCII => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
        TokenType::OTHER_ASCII => 0,
        TokenType::NOT_ASCII => 0,
        TokenType::BACKSLASH => 0,
        TokenType::VERTICAL_LINE => 1,
        TokenType::EOI => 1,
        TokenType::RIGHT_BRACKET => 1,
    ],
    SymbolType::NT_MORE_ITEMS => [
        TokenType::CIRCUMFLEX => 0,
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::DOT => 0,
        TokenType::COMMA => 0,
        TokenType::HYPHEN => 0,
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::CAPITAL_P => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::SMALL_C => 0,
        TokenType::SMALL_O => 0,
        TokenType::SMALL_P => 0,
        TokenType::SMALL_U => 0,
        TokenType::SMALL_X => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
        TokenType::CTL_ASCII => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
        TokenType::OTHER_ASCII => 0,
        TokenType::NOT_ASCII => 0,
        TokenType::BACKSLASH => 0,
        TokenType::VERTICAL_LINE => 1,
        TokenType::EOI => 1,
        TokenType::RIGHT_BRACKET => 1,
    ],
    SymbolType::NT_MORE_ITEMS_TAIL => [
        TokenType::CIRCUMFLEX => 0,
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::DOT => 0,
        TokenType::COMMA => 0,
        TokenType::HYPHEN => 0,
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::CAPITAL_P => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::SMALL_C => 0,
        TokenType::SMALL_O => 0,
        TokenType::SMALL_P => 0,
        TokenType::SMALL_U => 0,
        TokenType::SMALL_X => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
        TokenType::CTL_ASCII => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
        TokenType::OTHER_ASCII => 0,
        TokenType::NOT_ASCII => 0,
        TokenType::BACKSLASH => 0,
        TokenType::VERTICAL_LINE => 1,
        TokenType::EOI => 1,
        TokenType::RIGHT_BRACKET => 1,
    ],
    SymbolType::NT_ITEM => [
        TokenType::CIRCUMFLEX => 0,
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 1,
        TokenType::LEFT_SQUARE_BRACKET => 1,
        TokenType::DOT => 1,
        TokenType::COMMA => 1,
        TokenType::HYPHEN => 1,
        TokenType::DIGIT_ZERO => 1,
        TokenType::DIGIT_OCT => 1,
        TokenType::DIGIT_DEC => 1,
        TokenType::CAPITAL_P => 1,
        TokenType::RIGHT_SQUARE_BRACKET => 1,
        TokenType::SMALL_C => 1,
        TokenType::SMALL_O => 1,
        TokenType::SMALL_P => 1,
        TokenType::SMALL_U => 1,
        TokenType::SMALL_X => 1,
        TokenType::RIGHT_CURLY_BRACKET => 1,
        TokenType::CTL_ASCII => 1,
        TokenType::OTHER_HEX_LETTER => 1,
        TokenType::OTHER_ASCII_LETTER => 1,
        TokenType::PRINTABLE_ASCII_OTHER => 1,
        TokenType::OTHER_ASCII => 1,
        TokenType::NOT_ASCII => 1,
        TokenType::BACKSLASH => 1,
    ],
    SymbolType::NT_ASSERT => [
        TokenType::CIRCUMFLEX => 0,
        TokenType::DOLLAR => 1,
    ],
    SymbolType::NT_ITEM_BODY => [
        TokenType::LEFT_BRACKET => 0,
        TokenType::LEFT_SQUARE_BRACKET => 1,
        TokenType::DOT => 2,
        TokenType::COMMA => 2,
        TokenType::HYPHEN => 2,
        TokenType::DIGIT_ZERO => 2,
        TokenType::DIGIT_OCT => 2,
        TokenType::DIGIT_DEC => 2,
        TokenType::CAPITAL_P => 2,
        TokenType::RIGHT_SQUARE_BRACKET => 2,
        TokenType::SMALL_C => 2,
        TokenType::SMALL_O => 2,
        TokenType::SMALL_P => 2,
        TokenType::SMALL_U => 2,
        TokenType::SMALL_X => 2,
        TokenType::RIGHT_CURLY_BRACKET => 2,
        TokenType::CTL_ASCII => 2,
        TokenType::OTHER_HEX_LETTER => 2,
        TokenType::OTHER_ASCII_LETTER => 2,
        TokenType::PRINTABLE_ASCII_OTHER => 2,
        TokenType::OTHER_ASCII => 2,
        TokenType::NOT_ASCII => 2,
        TokenType::BACKSLASH => 2,
    ],
    SymbolType::NT_GROUP => [
        TokenType::LEFT_BRACKET => 0,
    ],
    SymbolType::NT_CLASS_ => [
        TokenType::LEFT_SQUARE_BRACKET => 0,
    ],
    SymbolType::NT_CLASS_BODY => [
        TokenType::CIRCUMFLEX => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 1,
        TokenType::DOLLAR => 1,
        TokenType::LEFT_BRACKET => 1,
        TokenType::RIGHT_BRACKET => 1,
        TokenType::STAR => 1,
        TokenType::PLUS => 1,
        TokenType::COMMA => 1,
        TokenType::QUESTION => 1,
        TokenType::LEFT_SQUARE_BRACKET => 1,
        TokenType::LEFT_CURLY_BRACKET => 1,
        TokenType::VERTICAL_LINE => 1,
        TokenType::RIGHT_CURLY_BRACKET => 1,
        TokenType::CTL_ASCII => 1,
        TokenType::OTHER_HEX_LETTER => 1,
        TokenType::OTHER_ASCII_LETTER => 1,
        TokenType::PRINTABLE_ASCII_OTHER => 1,
        TokenType::OTHER_ASCII => 1,
        TokenType::NOT_ASCII => 1,
        TokenType::BACKSLASH => 1,
    ],
    SymbolType::NT_CLASS_ITEMS => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::RIGHT_BRACKET => 0,
        TokenType::STAR => 0,
        TokenType::PLUS => 0,
        TokenType::COMMA => 0,
        TokenType::QUESTION => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::CIRCUMFLEX => 0,
        TokenType::LEFT_CURLY_BRACKET => 0,
        TokenType::VERTICAL_LINE => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
        TokenType::CTL_ASCII => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
        TokenType::OTHER_ASCII => 0,
        TokenType::NOT_ASCII => 0,
        TokenType::BACKSLASH => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 1,
    ],
    SymbolType::NT_FIRST_CLASS_ITEM => [
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::RIGHT_BRACKET => 0,
        TokenType::STAR => 0,
        TokenType::PLUS => 0,
        TokenType::COMMA => 0,
        TokenType::QUESTION => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::LEFT_CURLY_BRACKET => 0,
        TokenType::VERTICAL_LINE => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
        TokenType::CTL_ASCII => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
        TokenType::OTHER_ASCII => 0,
        TokenType::NOT_ASCII => 0,
        TokenType::BACKSLASH => 1,
    ],
    SymbolType::NT_CLASS_ITEM => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::RIGHT_BRACKET => 0,
        TokenType::STAR => 0,
        TokenType::PLUS => 0,
        TokenType::COMMA => 0,
        TokenType::QUESTION => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::CIRCUMFLEX => 0,
        TokenType::LEFT_CURLY_BRACKET => 0,
        TokenType::VERTICAL_LINE => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
        TokenType::CTL_ASCII => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
        TokenType::OTHER_ASCII => 0,
        TokenType::NOT_ASCII => 0,
        TokenType::BACKSLASH => 0,
    ],
    SymbolType::NT_CLASS_SYMBOL => [
        TokenType::BACKSLASH => 0,
        TokenType::DOLLAR => 1,
        TokenType::LEFT_BRACKET => 1,
        TokenType::RIGHT_BRACKET => 1,
        TokenType::STAR => 1,
        TokenType::PLUS => 1,
        TokenType::COMMA => 1,
        TokenType::QUESTION => 1,
        TokenType::LEFT_SQUARE_BRACKET => 1,
        TokenType::CIRCUMFLEX => 1,
        TokenType::LEFT_CURLY_BRACKET => 1,
        TokenType::VERTICAL_LINE => 1,
        TokenType::RIGHT_CURLY_BRACKET => 1,
        TokenType::CTL_ASCII => 1,
        TokenType::OTHER_HEX_LETTER => 1,
        TokenType::OTHER_ASCII_LETTER => 1,
        TokenType::PRINTABLE_ASCII_OTHER => 1,
        TokenType::OTHER_ASCII => 1,
        TokenType::NOT_ASCII => 1,
    ],
    SymbolType::NT_ESC_CLASS_SYMBOL => [
        TokenType::BACKSLASH => 0,
    ],
    SymbolType::NT_CLASS_ESC_SEQUENCE => [
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::RIGHT_BRACKET => 0,
        TokenType::STAR => 0,
        TokenType::PLUS => 0,
        TokenType::COMMA => 0,
        TokenType::HYPHEN => 0,
        TokenType::QUESTION => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::BACKSLASH => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::CIRCUMFLEX => 0,
        TokenType::LEFT_CURLY_BRACKET => 0,
        TokenType::VERTICAL_LINE => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
        TokenType::CTL_ASCII => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
        TokenType::OTHER_ASCII => 0,
        TokenType::NOT_ASCII => 0,
        TokenType::SMALL_P => 0,
        TokenType::CAPITAL_P => 0,
        TokenType::SMALL_C => 0,
        TokenType::SMALL_X => 0,
        TokenType::SMALL_U => 0,
        TokenType::DIGIT_ZERO => 0,
        TokenType::SMALL_O => 0,
    ],
    SymbolType::NT_RANGE => [
        TokenType::HYPHEN => 0,
        TokenType::DOLLAR => 1,
        TokenType::LEFT_BRACKET => 1,
        TokenType::RIGHT_BRACKET => 1,
        TokenType::STAR => 1,
        TokenType::PLUS => 1,
        TokenType::COMMA => 1,
        TokenType::QUESTION => 1,
        TokenType::LEFT_SQUARE_BRACKET => 1,
        TokenType::CIRCUMFLEX => 1,
        TokenType::LEFT_CURLY_BRACKET => 1,
        TokenType::VERTICAL_LINE => 1,
        TokenType::RIGHT_CURLY_BRACKET => 1,
        TokenType::CTL_ASCII => 1,
        TokenType::OTHER_HEX_LETTER => 1,
        TokenType::OTHER_ASCII_LETTER => 1,
        TokenType::PRINTABLE_ASCII_OTHER => 1,
        TokenType::OTHER_ASCII => 1,
        TokenType::NOT_ASCII => 1,
        TokenType::BACKSLASH => 1,
        TokenType::RIGHT_SQUARE_BRACKET => 1,
    ],
    SymbolType::NT_SYMBOL => [
        TokenType::DOT => 0,
        TokenType::BACKSLASH => 1,
        TokenType::COMMA => 2,
        TokenType::HYPHEN => 2,
        TokenType::DIGIT_ZERO => 2,
        TokenType::DIGIT_OCT => 2,
        TokenType::DIGIT_DEC => 2,
        TokenType::CAPITAL_P => 2,
        TokenType::RIGHT_SQUARE_BRACKET => 2,
        TokenType::SMALL_C => 2,
        TokenType::SMALL_O => 2,
        TokenType::SMALL_P => 2,
        TokenType::SMALL_U => 2,
        TokenType::SMALL_X => 2,
        TokenType::RIGHT_CURLY_BRACKET => 2,
        TokenType::CTL_ASCII => 2,
        TokenType::OTHER_HEX_LETTER => 2,
        TokenType::OTHER_ASCII_LETTER => 2,
        TokenType::PRINTABLE_ASCII_OTHER => 2,
        TokenType::OTHER_ASCII => 2,
        TokenType::NOT_ASCII => 2,
    ],
    SymbolType::NT_ESC_SYMBOL => [
        TokenType::BACKSLASH => 0,
    ],
    SymbolType::NT_ESC_SEQUENCE => [
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::DOLLAR => 1,
        TokenType::LEFT_BRACKET => 1,
        TokenType::RIGHT_BRACKET => 1,
        TokenType::STAR => 1,
        TokenType::PLUS => 1,
        TokenType::COMMA => 1,
        TokenType::HYPHEN => 1,
        TokenType::QUESTION => 1,
        TokenType::LEFT_SQUARE_BRACKET => 1,
        TokenType::BACKSLASH => 1,
        TokenType::RIGHT_SQUARE_BRACKET => 1,
        TokenType::CIRCUMFLEX => 1,
        TokenType::LEFT_CURLY_BRACKET => 1,
        TokenType::VERTICAL_LINE => 1,
        TokenType::RIGHT_CURLY_BRACKET => 1,
        TokenType::CTL_ASCII => 1,
        TokenType::PRINTABLE_ASCII_OTHER => 1,
        TokenType::OTHER_ASCII => 1,
        TokenType::NOT_ASCII => 1,
        TokenType::SMALL_C => 2,
        TokenType::SMALL_X => 2,
        TokenType::SMALL_U => 2,
        TokenType::DIGIT_ZERO => 2,
        TokenType::SMALL_O => 2,
        TokenType::SMALL_P => 3,
        TokenType::CAPITAL_P => 4,
    ],
    SymbolType::NT_ESC_NON_PRINTABLE => [
        TokenType::SMALL_C => 0,
        TokenType::DIGIT_ZERO => 1,
        TokenType::SMALL_O => 1,
        TokenType::SMALL_X => 2,
        TokenType::SMALL_U => 3,
    ],
    SymbolType::NT_ESC_CTL => [
        TokenType::SMALL_C => 0,
    ],
    SymbolType::NT_ESC_CTL_CODE => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::RIGHT_BRACKET => 0,
        TokenType::STAR => 0,
        TokenType::PLUS => 0,
        TokenType::COMMA => 0,
        TokenType::HYPHEN => 0,
        TokenType::DOT => 0,
        TokenType::QUESTION => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::BACKSLASH => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::CIRCUMFLEX => 0,
        TokenType::LEFT_CURLY_BRACKET => 0,
        TokenType::VERTICAL_LINE => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::CAPITAL_P => 0,
        TokenType::SMALL_C => 0,
        TokenType::SMALL_O => 0,
        TokenType::SMALL_P => 0,
        TokenType::SMALL_U => 0,
        TokenType::SMALL_X => 0,
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
    ],
    SymbolType::NT_ESC_OCT => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::SMALL_O => 1,
    ],
    SymbolType::NT_ESC_OCT_SHORT => [
        TokenType::DIGIT_ZERO => 0,
    ],
    SymbolType::NT_ESC_OCT_LONG => [
        TokenType::SMALL_O => 0,
    ],
    SymbolType::NT_ESC_OCT_LONG_NUM => [
        TokenType::LEFT_CURLY_BRACKET => 0,
    ],
    SymbolType::NT_ESC_HEX => [
        TokenType::SMALL_X => 0,
    ],
    SymbolType::NT_ESC_HEX_NUM => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::SMALL_C => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::LEFT_CURLY_BRACKET => 1,
    ],
    SymbolType::NT_ESC_HEX_SHORT_NUM => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::SMALL_C => 0,
        TokenType::OTHER_HEX_LETTER => 0,
    ],
    SymbolType::NT_ESC_HEX_LONG_NUM => [
        TokenType::LEFT_CURLY_BRACKET => 0,
    ],
    SymbolType::NT_ESC_UNICODE => [
        TokenType::SMALL_U => 0,
    ],
    SymbolType::NT_ESC_UNICODE_NUM => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::SMALL_C => 0,
        TokenType::OTHER_HEX_LETTER => 0,
    ],
    SymbolType::NT_ESC_PROP => [
        TokenType::SMALL_P => 0,
    ],
    SymbolType::NT_ESC_NOT_PROP => [
        TokenType::CAPITAL_P => 0,
    ],
    SymbolType::NT_PROP => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::RIGHT_BRACKET => 0,
        TokenType::STAR => 0,
        TokenType::PLUS => 0,
        TokenType::COMMA => 0,
        TokenType::HYPHEN => 0,
        TokenType::DOT => 0,
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::QUESTION => 0,
        TokenType::CAPITAL_P => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::BACKSLASH => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::CIRCUMFLEX => 0,
        TokenType::SMALL_C => 0,
        TokenType::SMALL_O => 0,
        TokenType::SMALL_P => 0,
        TokenType::SMALL_U => 0,
        TokenType::SMALL_X => 0,
        TokenType::VERTICAL_LINE => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
        TokenType::CTL_ASCII => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
        TokenType::OTHER_ASCII => 0,
        TokenType::NOT_ASCII => 0,
        TokenType::LEFT_CURLY_BRACKET => 1,
    ],
    SymbolType::NT_PROP_SHORT => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::RIGHT_BRACKET => 0,
        TokenType::STAR => 0,
        TokenType::PLUS => 0,
        TokenType::COMMA => 0,
        TokenType::HYPHEN => 0,
        TokenType::DOT => 0,
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::QUESTION => 0,
        TokenType::CAPITAL_P => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::BACKSLASH => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::CIRCUMFLEX => 0,
        TokenType::SMALL_C => 0,
        TokenType::SMALL_O => 0,
        TokenType::SMALL_P => 0,
        TokenType::SMALL_U => 0,
        TokenType::SMALL_X => 0,
        TokenType::VERTICAL_LINE => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
        TokenType::CTL_ASCII => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
        TokenType::OTHER_ASCII => 0,
        TokenType::NOT_ASCII => 0,
    ],
    SymbolType::NT_PROP_FULL => [
        TokenType::LEFT_CURLY_BRACKET => 0,
    ],
    SymbolType::NT_PROP_NAME => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::RIGHT_BRACKET => 0,
        TokenType::STAR => 0,
        TokenType::PLUS => 0,
        TokenType::COMMA => 0,
        TokenType::HYPHEN => 0,
        TokenType::DOT => 0,
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::QUESTION => 0,
        TokenType::CAPITAL_P => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::BACKSLASH => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::CIRCUMFLEX => 0,
        TokenType::SMALL_C => 0,
        TokenType::SMALL_O => 0,
        TokenType::SMALL_P => 0,
        TokenType::SMALL_U => 0,
        TokenType::SMALL_X => 0,
        TokenType::LEFT_CURLY_BRACKET => 0,
        TokenType::VERTICAL_LINE => 0,
        TokenType::CTL_ASCII => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
        TokenType::OTHER_ASCII => 0,
        TokenType::NOT_ASCII => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
    ],
    SymbolType::NT_PROP_NAME_PART => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::RIGHT_BRACKET => 0,
        TokenType::STAR => 0,
        TokenType::PLUS => 0,
        TokenType::COMMA => 0,
        TokenType::HYPHEN => 0,
        TokenType::DOT => 0,
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::QUESTION => 0,
        TokenType::CAPITAL_P => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::BACKSLASH => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::CIRCUMFLEX => 0,
        TokenType::SMALL_C => 0,
        TokenType::SMALL_O => 0,
        TokenType::SMALL_P => 0,
        TokenType::SMALL_U => 0,
        TokenType::SMALL_X => 0,
        TokenType::LEFT_CURLY_BRACKET => 0,
        TokenType::VERTICAL_LINE => 0,
        TokenType::CTL_ASCII => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::PRINTABLE_ASCII_OTHER => 0,
        TokenType::OTHER_ASCII => 0,
        TokenType::NOT_ASCII => 0,
        TokenType::RIGHT_CURLY_BRACKET => 1,
    ],
    SymbolType::NT_ITEM_QUANT => [
        TokenType::QUESTION => 0,
        TokenType::STAR => 1,
        TokenType::PLUS => 2,
        TokenType::LEFT_CURLY_BRACKET => 3,
        TokenType::CIRCUMFLEX => 4,
        TokenType::DOLLAR => 4,
        TokenType::LEFT_BRACKET => 4,
        TokenType::LEFT_SQUARE_BRACKET => 4,
        TokenType::DOT => 4,
        TokenType::COMMA => 4,
        TokenType::HYPHEN => 4,
        TokenType::DIGIT_ZERO => 4,
        TokenType::DIGIT_OCT => 4,
        TokenType::DIGIT_DEC => 4,
        TokenType::CAPITAL_P => 4,
        TokenType::RIGHT_SQUARE_BRACKET => 4,
        TokenType::SMALL_C => 4,
        TokenType::SMALL_O => 4,
        TokenType::SMALL_P => 4,
        TokenType::SMALL_U => 4,
        TokenType::SMALL_X => 4,
        TokenType::RIGHT_CURLY_BRACKET => 4,
        TokenType::CTL_ASCII => 4,
        TokenType::OTHER_HEX_LETTER => 4,
        TokenType::OTHER_ASCII_LETTER => 4,
        TokenType::PRINTABLE_ASCII_OTHER => 4,
        TokenType::OTHER_ASCII => 4,
        TokenType::NOT_ASCII => 4,
        TokenType::BACKSLASH => 4,
        TokenType::VERTICAL_LINE => 4,
        TokenType::EOI => 4,
        TokenType::RIGHT_BRACKET => 4,
    ],
    SymbolType::NT_LIMIT => [
        TokenType::LEFT_CURLY_BRACKET => 0,
    ],
    SymbolType::NT_OPT_MAX => [
        TokenType::COMMA => 0,
        TokenType::RIGHT_CURLY_BRACKET => 1,
    ],
    SymbolType::NT_MIN => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
    ],
    SymbolType::NT_MAX => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::RIGHT_CURLY_BRACKET => 1,
    ],
    SymbolType::NT_OCT => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
    ],
    SymbolType::NT_OPT_OCT => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::RIGHT_CURLY_BRACKET => 1,
    ],
    SymbolType::NT_DEC => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
    ],
    SymbolType::NT_OPT_DEC => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::COMMA => 1,
        TokenType::RIGHT_CURLY_BRACKET => 1,
    ],
    SymbolType::NT_HEX => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::SMALL_C => 0,
        TokenType::OTHER_HEX_LETTER => 0,
    ],
    SymbolType::NT_OPT_HEX => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 0,
        TokenType::DIGIT_DEC => 0,
        TokenType::SMALL_C => 0,
        TokenType::OTHER_HEX_LETTER => 0,
        TokenType::RIGHT_CURLY_BRACKET => 1,
    ],
    SymbolType::NT_PRINTABLE_ASCII => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 0,
        TokenType::RIGHT_BRACKET => 0,
        TokenType::STAR => 0,
        TokenType::PLUS => 0,
        TokenType::COMMA => 0,
        TokenType::HYPHEN => 0,
        TokenType::DOT => 0,
        TokenType::QUESTION => 0,
        TokenType::LEFT_SQUARE_BRACKET => 0,
        TokenType::BACKSLASH => 0,
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::CIRCUMFLEX => 0,
        TokenType::LEFT_CURLY_BRACKET => 0,
        TokenType::VERTICAL_LINE => 0,
        TokenType::RIGHT_CURLY_BRACKET => 0,
        TokenType::DIGIT_ZERO => 1,
        TokenType::DIGIT_OCT => 1,
        TokenType::DIGIT_DEC => 1,
        TokenType::CAPITAL_P => 2,
        TokenType::SMALL_C => 2,
        TokenType::SMALL_O => 2,
        TokenType::SMALL_P => 2,
        TokenType::SMALL_U => 2,
        TokenType::SMALL_X => 2,
        TokenType::OTHER_ASCII_LETTER => 2,
        TokenType::OTHER_HEX_LETTER => 2,
        TokenType::PRINTABLE_ASCII_OTHER => 3,
    ],
    SymbolType::NT_ALT_SEPARATOR => [
        TokenType::VERTICAL_LINE => 0,
    ],
    SymbolType::NT_ASSERT_LINE_START => [
        TokenType::CIRCUMFLEX => 0,
    ],
    SymbolType::NT_ASSERT_LINE_FINISH => [
        TokenType::DOLLAR => 0,
    ],
    SymbolType::NT_GROUP_START => [
        TokenType::LEFT_BRACKET => 0,
    ],
    SymbolType::NT_GROUP_END => [
        TokenType::RIGHT_BRACKET => 0,
    ],
    SymbolType::NT_CLASS_START => [
        TokenType::LEFT_SQUARE_BRACKET => 0,
    ],
    SymbolType::NT_CLASS_END => [
        TokenType::RIGHT_SQUARE_BRACKET => 0,
    ],
    SymbolType::NT_CLASS_INVERTOR => [
        TokenType::CIRCUMFLEX => 0,
    ],
    SymbolType::NT_FIRST_UNESC_CLASS_SYMBOL => [
        TokenType::RIGHT_SQUARE_BRACKET => 0,
        TokenType::DOLLAR => 1,
        TokenType::LEFT_BRACKET => 2,
        TokenType::RIGHT_BRACKET => 3,
        TokenType::STAR => 4,
        TokenType::PLUS => 5,
        TokenType::COMMA => 6,
        TokenType::QUESTION => 7,
        TokenType::LEFT_SQUARE_BRACKET => 8,
        TokenType::LEFT_CURLY_BRACKET => 9,
        TokenType::VERTICAL_LINE => 10,
        TokenType::RIGHT_CURLY_BRACKET => 11,
        TokenType::CTL_ASCII => 12,
        TokenType::OTHER_HEX_LETTER => 13,
        TokenType::OTHER_ASCII_LETTER => 14,
        TokenType::PRINTABLE_ASCII_OTHER => 15,
        TokenType::OTHER_ASCII => 16,
        TokenType::NOT_ASCII => 17,
    ],
    SymbolType::NT_ESC => [
        TokenType::BACKSLASH => 0,
    ],
    SymbolType::NT_UNESC_CLASS_SYMBOL => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 1,
        TokenType::RIGHT_BRACKET => 2,
        TokenType::STAR => 3,
        TokenType::PLUS => 4,
        TokenType::COMMA => 5,
        TokenType::QUESTION => 6,
        TokenType::LEFT_SQUARE_BRACKET => 7,
        TokenType::CIRCUMFLEX => 8,
        TokenType::LEFT_CURLY_BRACKET => 9,
        TokenType::VERTICAL_LINE => 10,
        TokenType::RIGHT_CURLY_BRACKET => 11,
        TokenType::CTL_ASCII => 12,
        TokenType::OTHER_HEX_LETTER => 13,
        TokenType::OTHER_ASCII_LETTER => 14,
        TokenType::PRINTABLE_ASCII_OTHER => 15,
        TokenType::OTHER_ASCII => 16,
        TokenType::NOT_ASCII => 17,
    ],
    SymbolType::NT_RANGE_SEPARATOR => [
        TokenType::HYPHEN => 0,
    ],
    SymbolType::NT_SYMBOL_ANY => [
        TokenType::DOT => 0,
    ],
    SymbolType::NT_ESC_SIMPLE => [
        TokenType::OTHER_ASCII_LETTER => 0,
        TokenType::OTHER_HEX_LETTER => 1,
        TokenType::DIGIT_OCT => 2,
        TokenType::DIGIT_DEC => 3,
    ],
    SymbolType::NT_ESC_SPECIAL => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 1,
        TokenType::RIGHT_BRACKET => 2,
        TokenType::STAR => 3,
        TokenType::PLUS => 4,
        TokenType::COMMA => 5,
        TokenType::HYPHEN => 6,
        TokenType::QUESTION => 7,
        TokenType::LEFT_SQUARE_BRACKET => 8,
        TokenType::BACKSLASH => 9,
        TokenType::RIGHT_SQUARE_BRACKET => 10,
        TokenType::CIRCUMFLEX => 11,
        TokenType::LEFT_CURLY_BRACKET => 12,
        TokenType::VERTICAL_LINE => 13,
        TokenType::RIGHT_CURLY_BRACKET => 14,
        TokenType::CTL_ASCII => 15,
        TokenType::PRINTABLE_ASCII_OTHER => 16,
        TokenType::OTHER_ASCII => 17,
        TokenType::NOT_ASCII => 18,
    ],
    SymbolType::NT_ESC_CTL_MARKER => [
        TokenType::SMALL_C => 0,
    ],
    SymbolType::NT_ESC_NUM_START => [
        TokenType::LEFT_CURLY_BRACKET => 0,
    ],
    SymbolType::NT_ESC_NUM_FINISH => [
        TokenType::RIGHT_CURLY_BRACKET => 0,
    ],
    SymbolType::NT_ESC_OCT_SHORT_MARKER => [
        TokenType::DIGIT_ZERO => 0,
    ],
    SymbolType::NT_ESC_OCT_LONG_MARKER => [
        TokenType::SMALL_O => 0,
    ],
    SymbolType::NT_ESC_HEX_MARKER => [
        TokenType::SMALL_X => 0,
    ],
    SymbolType::NT_ESC_UNICODE_MARKER => [
        TokenType::SMALL_U => 0,
    ],
    SymbolType::NT_ESC_PROP_MARKER => [
        TokenType::SMALL_P => 0,
    ],
    SymbolType::NT_ESC_NOT_PROP_MARKER => [
        TokenType::CAPITAL_P => 0,
    ],
    SymbolType::NT_PROP_START => [
        TokenType::LEFT_CURLY_BRACKET => 0,
    ],
    SymbolType::NT_PROP_FINISH => [
        TokenType::RIGHT_CURLY_BRACKET => 0,
    ],
    SymbolType::NT_NOT_PROP_START => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 1,
        TokenType::RIGHT_BRACKET => 2,
        TokenType::STAR => 3,
        TokenType::PLUS => 4,
        TokenType::COMMA => 5,
        TokenType::HYPHEN => 6,
        TokenType::DOT => 7,
        TokenType::DIGIT_ZERO => 8,
        TokenType::DIGIT_OCT => 9,
        TokenType::DIGIT_DEC => 10,
        TokenType::QUESTION => 11,
        TokenType::CAPITAL_P => 12,
        TokenType::LEFT_SQUARE_BRACKET => 13,
        TokenType::BACKSLASH => 14,
        TokenType::RIGHT_SQUARE_BRACKET => 15,
        TokenType::CIRCUMFLEX => 16,
        TokenType::SMALL_C => 17,
        TokenType::SMALL_O => 18,
        TokenType::SMALL_P => 19,
        TokenType::SMALL_U => 20,
        TokenType::SMALL_X => 21,
        TokenType::VERTICAL_LINE => 22,
        TokenType::RIGHT_CURLY_BRACKET => 23,
        TokenType::CTL_ASCII => 24,
        TokenType::OTHER_HEX_LETTER => 25,
        TokenType::OTHER_ASCII_LETTER => 26,
        TokenType::PRINTABLE_ASCII_OTHER => 27,
        TokenType::OTHER_ASCII => 28,
        TokenType::NOT_ASCII => 29,
    ],
    SymbolType::NT_NOT_PROP_FINISH => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 1,
        TokenType::RIGHT_BRACKET => 2,
        TokenType::STAR => 3,
        TokenType::PLUS => 4,
        TokenType::COMMA => 5,
        TokenType::HYPHEN => 6,
        TokenType::DOT => 7,
        TokenType::DIGIT_ZERO => 8,
        TokenType::DIGIT_OCT => 9,
        TokenType::DIGIT_DEC => 10,
        TokenType::QUESTION => 11,
        TokenType::CAPITAL_P => 12,
        TokenType::LEFT_SQUARE_BRACKET => 13,
        TokenType::BACKSLASH => 14,
        TokenType::RIGHT_SQUARE_BRACKET => 15,
        TokenType::CIRCUMFLEX => 16,
        TokenType::SMALL_C => 17,
        TokenType::SMALL_O => 18,
        TokenType::SMALL_P => 19,
        TokenType::SMALL_U => 20,
        TokenType::SMALL_X => 21,
        TokenType::LEFT_CURLY_BRACKET => 22,
        TokenType::VERTICAL_LINE => 23,
        TokenType::CTL_ASCII => 24,
        TokenType::OTHER_HEX_LETTER => 25,
        TokenType::OTHER_ASCII_LETTER => 26,
        TokenType::PRINTABLE_ASCII_OTHER => 27,
        TokenType::OTHER_ASCII => 28,
        TokenType::NOT_ASCII => 29,
    ],
    SymbolType::NT_UNESC_SYMBOL => [
        TokenType::COMMA => 0,
        TokenType::HYPHEN => 1,
        TokenType::DIGIT_ZERO => 2,
        TokenType::DIGIT_OCT => 3,
        TokenType::DIGIT_DEC => 4,
        TokenType::CAPITAL_P => 5,
        TokenType::RIGHT_SQUARE_BRACKET => 6,
        TokenType::SMALL_C => 7,
        TokenType::SMALL_O => 8,
        TokenType::SMALL_P => 9,
        TokenType::SMALL_U => 10,
        TokenType::SMALL_X => 11,
        TokenType::RIGHT_CURLY_BRACKET => 12,
        TokenType::CTL_ASCII => 13,
        TokenType::OTHER_HEX_LETTER => 14,
        TokenType::OTHER_ASCII_LETTER => 15,
        TokenType::PRINTABLE_ASCII_OTHER => 16,
        TokenType::OTHER_ASCII => 17,
        TokenType::NOT_ASCII => 18,
    ],
    SymbolType::NT_ITEM_OPT => [
        TokenType::QUESTION => 0,
    ],
    SymbolType::NT_ITEM_QUANT_STAR => [
        TokenType::STAR => 0,
    ],
    SymbolType::NT_ITEM_QUANT_PLUS => [
        TokenType::PLUS => 0,
    ],
    SymbolType::NT_LIMIT_START => [
        TokenType::LEFT_CURLY_BRACKET => 0,
    ],
    SymbolType::NT_LIMIT_END => [
        TokenType::RIGHT_CURLY_BRACKET => 0,
    ],
    SymbolType::NT_LIMIT_SEPARATOR => [
        TokenType::COMMA => 0,
    ],
    SymbolType::NT_OCT_DIGIT => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 1,
    ],
    SymbolType::NT_DEC_DIGIT => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 1,
        TokenType::DIGIT_DEC => 2,
    ],
    SymbolType::NT_HEX_DIGIT => [
        TokenType::DIGIT_ZERO => 0,
        TokenType::DIGIT_OCT => 1,
        TokenType::DIGIT_DEC => 2,
        TokenType::SMALL_C => 3,
        TokenType::OTHER_HEX_LETTER => 4,
    ],
    SymbolType::NT_META_CHAR => [
        TokenType::DOLLAR => 0,
        TokenType::LEFT_BRACKET => 1,
        TokenType::RIGHT_BRACKET => 2,
        TokenType::STAR => 3,
        TokenType::PLUS => 4,
        TokenType::COMMA => 5,
        TokenType::HYPHEN => 6,
        TokenType::DOT => 7,
        TokenType::QUESTION => 8,
        TokenType::LEFT_SQUARE_BRACKET => 9,
        TokenType::BACKSLASH => 10,
        TokenType::RIGHT_SQUARE_BRACKET => 11,
        TokenType::CIRCUMFLEX => 12,
        TokenType::LEFT_CURLY_BRACKET => 13,
        TokenType::VERTICAL_LINE => 14,
        TokenType::RIGHT_CURLY_BRACKET => 15,
    ],
    SymbolType::NT_ASCII_LETTER => [
        TokenType::CAPITAL_P => 0,
        TokenType::SMALL_C => 1,
        TokenType::SMALL_O => 2,
        TokenType::SMALL_P => 3,
        TokenType::SMALL_U => 4,
        TokenType::SMALL_X => 5,
        TokenType::OTHER_ASCII_LETTER => 6,
        TokenType::OTHER_HEX_LETTER => 7,
    ],
    SymbolType::NT_PRINTABLE_ASCII_OTHER => [
        TokenType::PRINTABLE_ASCII_OTHER => 0,
    ],
];
