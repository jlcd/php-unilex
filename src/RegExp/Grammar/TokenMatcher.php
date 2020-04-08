<?php

/**
 * RegExp token matcher.
 *
 * Auto-generated file, please don't edit manually.
 * Generated by UniLex.
 */

declare(strict_types=1);

namespace Remorhaz\UniLex\RegExp\Grammar;

use Remorhaz\UniLex\IO\CharBufferInterface;
use Remorhaz\UniLex\Lexer\TokenFactoryInterface;
use Remorhaz\UniLex\Lexer\TokenMatcherTemplate;

class TokenMatcher extends TokenMatcherTemplate
{

    public function match(CharBufferInterface $buffer, TokenFactoryInterface $tokenFactory): bool
    {
        $context = $this->createContext($buffer, $tokenFactory);
        goto state1;

        state1:
        if ($context->getBuffer()->isEnd()) {
            goto error;
        }
        $char = $context->getBuffer()->getSymbol();
        if (0x00 <= $char && $char <= 0x1F) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:0');
            goto state2;
        }
        if (
            0x20 <= $char && $char <= 0x23 ||
            0x25 <= $char && $char <= 0x27 ||
            0x2F == $char ||
            0x3A <= $char && $char <= 0x3E ||
            0x40 == $char ||
            0x5F == $char ||
            0x60 == $char ||
            0x7E == $char
        ) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:1');
            goto state2;
        }
        if (0x24 == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:2');
            goto state2;
        }
        if (0x28 == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:3');
            goto state2;
        }
        if (0x29 == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:4');
            goto state2;
        }
        if (0x2A == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:5');
            goto state2;
        }
        if (0x2B == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:6');
            goto state2;
        }
        if (0x2C == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:7');
            goto state2;
        }
        if (0x2D == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:8');
            goto state2;
        }
        if (0x2E == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:9');
            goto state2;
        }
        if (0x30 == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:10');
            goto state2;
        }
        if (0x31 <= $char && $char <= 0x37) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:11');
            goto state2;
        }
        if (0x38 == $char || 0x39 == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:12');
            goto state2;
        }
        if (0x3F == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:13');
            goto state2;
        }
        if (0x41 <= $char && $char <= 0x46 || 0x61 == $char || 0x62 == $char || 0x64 <= $char && $char <= 0x66) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:14');
            goto state2;
        }
        if (
            0x47 <= $char && $char <= 0x4F ||
            0x51 <= $char && $char <= 0x5A ||
            0x67 <= $char && $char <= 0x6E ||
            0x71 <= $char && $char <= 0x74 ||
            0x76 == $char ||
            0x77 == $char ||
            0x79 == $char ||
            0x7A == $char
        ) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:15');
            goto state2;
        }
        if (0x50 == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:16');
            goto state2;
        }
        if (0x5B == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:17');
            goto state2;
        }
        if (0x5C == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:18');
            goto state2;
        }
        if (0x5D == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:19');
            goto state2;
        }
        if (0x5E == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:20');
            goto state2;
        }
        if (0x63 == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:21');
            goto state2;
        }
        if (0x6F == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:22');
            goto state2;
        }
        if (0x70 == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:23');
            goto state2;
        }
        if (0x75 == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:24');
            goto state2;
        }
        if (0x78 == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:25');
            goto state2;
        }
        if (0x7B == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:26');
            goto state2;
        }
        if (0x7C == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:27');
            goto state2;
        }
        if (0x7D == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:28');
            goto state2;
        }
        if (0x7F == $char) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:29');
            goto state2;
        }
        if (0x80 <= $char && $char <= 0x10FFFF) {
            $context->getBuffer()->nextSymbol();
            $context->visitTransition('1-2:30');
            goto state2;
        }
        goto error;

        state2:
        if ($context->isVisitedTransition('1-2:30')) {
            // [\u0080-\x{10FFFF}]
            $context
                ->setNewToken(TokenType::NOT_ASCII)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:29')) {
            // \u007F
            $context
                ->setNewToken(TokenType::OTHER_ASCII)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:28')) {
            // }
            $context
                ->setNewToken(TokenType::RIGHT_CURLY_BRACKET)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:27')) {
            // \|
            $context
                ->setNewToken(TokenType::VERTICAL_LINE)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:26')) {
            // \u007B
            $context
                ->setNewToken(TokenType::LEFT_CURLY_BRACKET)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:25')) {
            // x
            $context
                ->setNewToken(TokenType::SMALL_X)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:24')) {
            // u
            $context
                ->setNewToken(TokenType::SMALL_U)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:23')) {
            // p
            $context
                ->setNewToken(TokenType::SMALL_P)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:22')) {
            // o
            $context
                ->setNewToken(TokenType::SMALL_O)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:21')) {
            // c
            $context
                ->setNewToken(TokenType::SMALL_C)
                ->setTokenAttribute(TokenAttribute::CODE, $char)
                ->setTokenAttribute(TokenAttribute::DIGIT, chr($char));

            return true;
        }
        if ($context->isVisitedTransition('1-2:20')) {
            // \^
            $context
                ->setNewToken(TokenType::CIRCUMFLEX)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:19')) {
            // ]
            $context
                ->setNewToken(TokenType::RIGHT_SQUARE_BRACKET)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:18')) {
            // \\
            $context
                ->setNewToken(TokenType::BACKSLASH)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:17')) {
            // \[
            $context
                ->setNewToken(TokenType::LEFT_SQUARE_BRACKET)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:16')) {
            // P
            $context
                ->setNewToken(TokenType::CAPITAL_P)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:15')) {
            // [G-OQ-Zg-nq-tvwyz]
            $context
                ->setNewToken(TokenType::OTHER_ASCII_LETTER)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:14')) {
            // [A-Fa-bd-f]
            $context
                ->setNewToken(TokenType::OTHER_HEX_LETTER)
                ->setTokenAttribute(TokenAttribute::CODE, $char)
                ->setTokenAttribute(TokenAttribute::DIGIT, chr($char));

            return true;
        }
        if ($context->isVisitedTransition('1-2:13')) {
            // \?
            $context
                ->setNewToken(TokenType::QUESTION)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:12')) {
            // [8-9]
            $context
                ->setNewToken(TokenType::DIGIT_DEC)
                ->setTokenAttribute(TokenAttribute::CODE, $char)
                ->setTokenAttribute(TokenAttribute::DIGIT, chr($char));

            return true;
        }
        if ($context->isVisitedTransition('1-2:11')) {
            // [1-7]
            $context
                ->setNewToken(TokenType::DIGIT_OCT)
                ->setTokenAttribute(TokenAttribute::CODE, $char)
                ->setTokenAttribute(TokenAttribute::DIGIT, chr($char));

            return true;
        }
        if ($context->isVisitedTransition('1-2:10')) {
            // 0
            $context
                ->setNewToken(TokenType::DIGIT_ZERO)
                ->setTokenAttribute(TokenAttribute::CODE, $char)
                ->setTokenAttribute(TokenAttribute::DIGIT, chr($char));

            return true;
        }
        if ($context->isVisitedTransition('1-2:9')) {
            // \.
            $context
                ->setNewToken(TokenType::DOT)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:8')) {
            // -
            $context
                ->setNewToken(TokenType::HYPHEN)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:7')) {
            // ,
            $context
                ->setNewToken(TokenType::COMMA)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:6')) {
            // \+
            $context
                ->setNewToken(TokenType::PLUS)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:5')) {
            // \u002A
            $context
                ->setNewToken(TokenType::STAR)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:4')) {
            // \)
            $context
                ->setNewToken(TokenType::RIGHT_BRACKET)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:3')) {
            // \(
            $context
                ->setNewToken(TokenType::LEFT_BRACKET)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:2')) {
            // \$
            $context
                ->setNewToken(TokenType::DOLLAR)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:1')) {
            // [ -#%-'/:->@_~`]
            $context
                ->setNewToken(TokenType::PRINTABLE_ASCII_OTHER)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        if ($context->isVisitedTransition('1-2:0')) {
            // [\u0000-\u001F]
            $context
                ->setNewToken(TokenType::CTL_ASCII)
                ->setTokenAttribute(TokenAttribute::CODE, $char);

            return true;
        }
        goto error;

        error:
        if ($context->getBuffer()->isEnd()) {
            return false;
        }
        $char = $context->getBuffer()->getSymbol();
        $context->getBuffer()->nextSymbol();
        $context
            ->setNewToken(TokenType::INVALID)
            ->setTokenAttribute(TokenAttribute::CODE, $char);
        return true;
    }
}
