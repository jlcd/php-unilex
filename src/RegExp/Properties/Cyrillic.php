<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UniLex\RegExp\Properties;

use Remorhaz\UniLex\RegExp\FSM\Range;
use Remorhaz\UniLex\RegExp\FSM\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::loadUnsafe(new Range(0x400, 0x484), new Range(0x487, 0x52f), new Range(0x1c80, 0x1c88), new Range(0x1d2b), new Range(0x1d78), new Range(0x2de0, 0x2dff), new Range(0xa640, 0xa69f), new Range(0xfe2e, 0xfe2f));