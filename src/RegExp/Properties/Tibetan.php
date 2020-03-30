<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UniLex\RegExp\Properties;

use Remorhaz\UniLex\RegExp\FSM\Range;
use Remorhaz\UniLex\RegExp\FSM\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::loadUnsafe(new Range(0xf00, 0xf47), new Range(0xf49, 0xf6c), new Range(0xf71, 0xf97), new Range(0xf99, 0xfbc), new Range(0xfbe, 0xfcc), new Range(0xfce, 0xfd4), new Range(0xfd9, 0xfda));