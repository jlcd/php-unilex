<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UniLex\Tool\RegExp\Properties;

use Remorhaz\IntRangeSets\Range;
use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(new Range(0x24), new Range(0x2b), new Range(0x3c, 0x3e), new Range(0x5e), new Range(0x60), new Range(0x7c), new Range(0x7e), new Range(0xa2, 0xa6), new Range(0xa8, 0xa9), new Range(0xac), new Range(0xae, 0xb1), new Range(0xb4), new Range(0xb8), new Range(0xd7), new Range(0xf7), new Range(0x2c2, 0x2c5), new Range(0x2d2, 0x2df), new Range(0x2e5, 0x2eb), new Range(0x2ed), new Range(0x2ef, 0x2ff), new Range(0x375), new Range(0x384, 0x385), new Range(0x3f6), new Range(0x482), new Range(0x58d, 0x58f), new Range(0x606, 0x608), new Range(0x60b), new Range(0x60e, 0x60f), new Range(0x6de), new Range(0x6e9), new Range(0x6fd, 0x6fe), new Range(0x7f6), new Range(0x7fe, 0x7ff), new Range(0x9f2, 0x9f3), new Range(0x9fa, 0x9fb), new Range(0xaf1), new Range(0xb70), new Range(0xbf3, 0xbfa), new Range(0xc7f), new Range(0xd4f), new Range(0xd79), new Range(0xe3f), new Range(0xf01, 0xf03), new Range(0xf13), new Range(0xf15, 0xf17), new Range(0xf1a, 0xf1f), new Range(0xf34), new Range(0xf36), new Range(0xf38), new Range(0xfbe, 0xfc5), new Range(0xfc7, 0xfcc), new Range(0xfce, 0xfcf), new Range(0xfd5, 0xfd8), new Range(0x109e, 0x109f), new Range(0x1390, 0x1399), new Range(0x166d), new Range(0x17db), new Range(0x1940), new Range(0x19de, 0x19ff), new Range(0x1b61, 0x1b6a), new Range(0x1b74, 0x1b7c), new Range(0x1fbd), new Range(0x1fbf, 0x1fc1), new Range(0x1fcd, 0x1fcf), new Range(0x1fdd, 0x1fdf), new Range(0x1fed, 0x1fef), new Range(0x1ffd, 0x1ffe), new Range(0x2044), new Range(0x2052), new Range(0x207a, 0x207c), new Range(0x208a, 0x208c), new Range(0x20a0, 0x20bf), new Range(0x2100, 0x2101), new Range(0x2103, 0x2106), new Range(0x2108, 0x2109), new Range(0x2114), new Range(0x2116, 0x2118), new Range(0x211e, 0x2123), new Range(0x2125), new Range(0x2127), new Range(0x2129), new Range(0x212e), new Range(0x213a, 0x213b), new Range(0x2140, 0x2144), new Range(0x214a, 0x214d), new Range(0x214f), new Range(0x218a, 0x218b), new Range(0x2190, 0x2307), new Range(0x230c, 0x2328), new Range(0x232b, 0x2426), new Range(0x2440, 0x244a), new Range(0x249c, 0x24e9), new Range(0x2500, 0x2767), new Range(0x2794, 0x27c4), new Range(0x27c7, 0x27e5), new Range(0x27f0, 0x2982), new Range(0x2999, 0x29d7), new Range(0x29dc, 0x29fb), new Range(0x29fe, 0x2b73), new Range(0x2b76, 0x2b95), new Range(0x2b97, 0x2bff), new Range(0x2ce5, 0x2cea), new Range(0x2e50, 0x2e51), new Range(0x2e80, 0x2e99), new Range(0x2e9b, 0x2ef3), new Range(0x2f00, 0x2fd5), new Range(0x2ff0, 0x2ffb), new Range(0x3004), new Range(0x3012, 0x3013), new Range(0x3020), new Range(0x3036, 0x3037), new Range(0x303e, 0x303f), new Range(0x309b, 0x309c), new Range(0x3190, 0x3191), new Range(0x3196, 0x319f), new Range(0x31c0, 0x31e3), new Range(0x3200, 0x321e), new Range(0x322a, 0x3247), new Range(0x3250), new Range(0x3260, 0x327f), new Range(0x328a, 0x32b0), new Range(0xa490, 0xa4c6), new Range(0xa700, 0xa716), new Range(0xa720, 0xa721), new Range(0xa789, 0xa78a), new Range(0xa828, 0xa82b), new Range(0xa836, 0xa839), new Range(0xaa77, 0xaa79), new Range(0xab5b), new Range(0xab6a, 0xab6b), new Range(0xfb29), new Range(0xfbb2, 0xfbc1), new Range(0xfdfc, 0xfdfd), new Range(0xfe62), new Range(0xfe64, 0xfe66), new Range(0xfe69), new Range(0xff04), new Range(0xff0b), new Range(0xff1c, 0xff1e), new Range(0xff3e), new Range(0xff40), new Range(0xff5c), new Range(0xff5e), new Range(0xffe0, 0xffe6), new Range(0xffe8, 0xffee), new Range(0xfffc, 0xfffd), new Range(0x10137, 0x1013f), new Range(0x10179, 0x10189), new Range(0x1018c, 0x1018e), new Range(0x10190, 0x1019c), new Range(0x101a0), new Range(0x101d0, 0x101fc), new Range(0x10877, 0x10878), new Range(0x10ac8), new Range(0x1173f), new Range(0x11fd5, 0x11ff1), new Range(0x16b3c, 0x16b3f), new Range(0x16b45), new Range(0x1bc9c), new Range(0x1d000, 0x1d0f5), new Range(0x1d100, 0x1d126), new Range(0x1d129, 0x1d164), new Range(0x1d16a, 0x1d16c), new Range(0x1d183, 0x1d184), new Range(0x1d18c, 0x1d1a9), new Range(0x1d1ae, 0x1d1e8), new Range(0x1d200, 0x1d241), new Range(0x1d245), new Range(0x1d300, 0x1d356), new Range(0x1d6c1), new Range(0x1d6db), new Range(0x1d6fb), new Range(0x1d715), new Range(0x1d735), new Range(0x1d74f), new Range(0x1d76f), new Range(0x1d789), new Range(0x1d7a9), new Range(0x1d7c3), new Range(0x1d800, 0x1d9ff), new Range(0x1da37, 0x1da3a), new Range(0x1da6d, 0x1da74), new Range(0x1da76, 0x1da83), new Range(0x1da85, 0x1da86), new Range(0x1e14f), new Range(0x1e2ff), new Range(0x1ecac), new Range(0x1ecb0), new Range(0x1ed2e), new Range(0x1eef0, 0x1eef1), new Range(0x1f000, 0x1f02b), new Range(0x1f030, 0x1f093), new Range(0x1f0a0, 0x1f0ae), new Range(0x1f0b1, 0x1f0bf), new Range(0x1f0c1, 0x1f0cf), new Range(0x1f0d1, 0x1f0f5), new Range(0x1f10d, 0x1f1ad), new Range(0x1f1e6, 0x1f202), new Range(0x1f210, 0x1f23b), new Range(0x1f240, 0x1f248), new Range(0x1f250, 0x1f251), new Range(0x1f260, 0x1f265), new Range(0x1f300, 0x1f6d7), new Range(0x1f6e0, 0x1f6ec), new Range(0x1f6f0, 0x1f6fc), new Range(0x1f700, 0x1f773), new Range(0x1f780, 0x1f7d8), new Range(0x1f7e0, 0x1f7eb), new Range(0x1f800, 0x1f80b), new Range(0x1f810, 0x1f847), new Range(0x1f850, 0x1f859), new Range(0x1f860, 0x1f887), new Range(0x1f890, 0x1f8ad), new Range(0x1f8b0, 0x1f8b1), new Range(0x1f900, 0x1f978), new Range(0x1f97a, 0x1f9cb), new Range(0x1f9cd, 0x1fa53), new Range(0x1fa60, 0x1fa6d), new Range(0x1fa70, 0x1fa74), new Range(0x1fa78, 0x1fa7a), new Range(0x1fa80, 0x1fa86), new Range(0x1fa90, 0x1faa8), new Range(0x1fab0, 0x1fab6), new Range(0x1fac0, 0x1fac2), new Range(0x1fad0, 0x1fad6), new Range(0x1fb00, 0x1fb92), new Range(0x1fb94, 0x1fbca));
