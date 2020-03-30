<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UniLex\RegExp\Properties;

use Remorhaz\UniLex\RegExp\FSM\Range;
use Remorhaz\UniLex\RegExp\FSM\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::loadUnsafe(new Range(0x903), new Range(0x93b), new Range(0x93e, 0x940), new Range(0x949, 0x94c), new Range(0x94e, 0x94f), new Range(0x982, 0x983), new Range(0x9be, 0x9c0), new Range(0x9c7, 0x9cc), new Range(0x9d7), new Range(0xa03), new Range(0xa3e, 0xa40), new Range(0xa83), new Range(0xabe, 0xac0), new Range(0xac9, 0xacc), new Range(0xb02, 0xb03), new Range(0xb3e), new Range(0xb40), new Range(0xb47, 0xb4c), new Range(0xb57), new Range(0xbbe, 0xbbf), new Range(0xbc1, 0xbcc), new Range(0xbd7), new Range(0xc01, 0xc03), new Range(0xc41, 0xc44), new Range(0xc82, 0xc83), new Range(0xcbe), new Range(0xcc0, 0xcc4), new Range(0xcc7, 0xccb), new Range(0xcd5, 0xcd6), new Range(0xd02, 0xd03), new Range(0xd3e, 0xd40), new Range(0xd46, 0xd4c), new Range(0xd57), new Range(0xd82, 0xd83), new Range(0xdcf, 0xdd1), new Range(0xdd8, 0xddf), new Range(0xdf2, 0xdf3), new Range(0xf3e, 0xf3f), new Range(0xf7f), new Range(0x102b, 0x102c), new Range(0x1031), new Range(0x1038), new Range(0x103b, 0x103c), new Range(0x1056, 0x1057), new Range(0x1062, 0x1064), new Range(0x1067, 0x106d), new Range(0x1083, 0x1084), new Range(0x1087, 0x108c), new Range(0x108f), new Range(0x109a, 0x109c), new Range(0x17b6), new Range(0x17be, 0x17c5), new Range(0x17c7, 0x17c8), new Range(0x1923, 0x1926), new Range(0x1929, 0x1931), new Range(0x1933, 0x1938), new Range(0x1a19, 0x1a1a), new Range(0x1a55), new Range(0x1a57), new Range(0x1a61), new Range(0x1a63, 0x1a64), new Range(0x1a6d, 0x1a72), new Range(0x1b04), new Range(0x1b35), new Range(0x1b3b), new Range(0x1b3d, 0x1b41), new Range(0x1b43, 0x1b44), new Range(0x1b82), new Range(0x1ba1), new Range(0x1ba6, 0x1ba7), new Range(0x1baa), new Range(0x1be7), new Range(0x1bea, 0x1bec), new Range(0x1bee), new Range(0x1bf2, 0x1bf3), new Range(0x1c24, 0x1c2b), new Range(0x1c34, 0x1c35), new Range(0x1ce1), new Range(0x1cf7), new Range(0x302e, 0x302f), new Range(0xa823, 0xa824), new Range(0xa827), new Range(0xa880, 0xa881), new Range(0xa8b4, 0xa8c3), new Range(0xa952, 0xa953), new Range(0xa983), new Range(0xa9b4, 0xa9b5), new Range(0xa9ba, 0xa9bb), new Range(0xa9be, 0xa9c0), new Range(0xaa2f, 0xaa30), new Range(0xaa33, 0xaa34), new Range(0xaa4d), new Range(0xaa7b), new Range(0xaa7d), new Range(0xaaeb), new Range(0xaaee, 0xaaef), new Range(0xaaf5), new Range(0xabe3, 0xabe4), new Range(0xabe6, 0xabe7), new Range(0xabe9, 0xabea), new Range(0xabec), new Range(0x11000), new Range(0x11002), new Range(0x11082), new Range(0x110b0, 0x110b2), new Range(0x110b7, 0x110b8), new Range(0x1112c), new Range(0x11145, 0x11146), new Range(0x11182), new Range(0x111b3, 0x111b5), new Range(0x111bf, 0x111c0), new Range(0x111ce), new Range(0x1122c, 0x1122e), new Range(0x11232, 0x11233), new Range(0x11235), new Range(0x112e0, 0x112e2), new Range(0x11302, 0x11303), new Range(0x1133e, 0x1133f), new Range(0x11341, 0x1134d), new Range(0x11357), new Range(0x11362, 0x11363), new Range(0x11435, 0x11437), new Range(0x11440, 0x11441), new Range(0x11445), new Range(0x114b0, 0x114b2), new Range(0x114b9), new Range(0x114bb, 0x114be), new Range(0x114c1), new Range(0x115af, 0x115b1), new Range(0x115b8, 0x115bb), new Range(0x115be), new Range(0x11630, 0x11632), new Range(0x1163b, 0x1163c), new Range(0x1163e), new Range(0x116ac), new Range(0x116ae, 0x116af), new Range(0x116b6), new Range(0x11720, 0x11721), new Range(0x11726), new Range(0x1182c, 0x1182e), new Range(0x11838), new Range(0x11930, 0x11938), new Range(0x1193d), new Range(0x11940), new Range(0x11942), new Range(0x119d1, 0x119d3), new Range(0x119dc, 0x119df), new Range(0x119e4), new Range(0x11a39), new Range(0x11a57, 0x11a58), new Range(0x11a97), new Range(0x11c2f), new Range(0x11c3e), new Range(0x11ca9), new Range(0x11cb1), new Range(0x11cb4), new Range(0x11d8a, 0x11d8e), new Range(0x11d93, 0x11d94), new Range(0x11d96), new Range(0x11ef5, 0x11ef6), new Range(0x16f51, 0x16f87), new Range(0x1d165, 0x1d166), new Range(0x1d16d, 0x1d172));