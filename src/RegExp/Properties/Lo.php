<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UniLex\RegExp\Properties;

use Remorhaz\UniLex\RegExp\FSM\Range;
use Remorhaz\UniLex\RegExp\FSM\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::loadUnsafe(new Range(0xaa), new Range(0xba), new Range(0x1bb), new Range(0x1c0, 0x1c3), new Range(0x294), new Range(0x5d0, 0x5f2), new Range(0x620, 0x63f), new Range(0x641, 0x64a), new Range(0x66e, 0x66f), new Range(0x671, 0x6d3), new Range(0x6d5), new Range(0x6ee, 0x6ef), new Range(0x6fa, 0x6fc), new Range(0x6ff), new Range(0x710), new Range(0x712, 0x72f), new Range(0x74d, 0x7a5), new Range(0x7b1), new Range(0x7ca, 0x7ea), new Range(0x800, 0x815), new Range(0x840, 0x858), new Range(0x860, 0x8c7), new Range(0x904, 0x939), new Range(0x93d), new Range(0x950), new Range(0x958, 0x961), new Range(0x972, 0x980), new Range(0x985, 0x9b9), new Range(0x9bd), new Range(0x9ce), new Range(0x9dc, 0x9e1), new Range(0x9f0, 0x9f1), new Range(0x9fc), new Range(0xa05, 0xa39), new Range(0xa59, 0xa5e), new Range(0xa72, 0xa74), new Range(0xa85, 0xab9), new Range(0xabd), new Range(0xad0, 0xae1), new Range(0xaf9), new Range(0xb05, 0xb39), new Range(0xb3d), new Range(0xb5c, 0xb61), new Range(0xb71), new Range(0xb83, 0xbb9), new Range(0xbd0), new Range(0xc05, 0xc3d), new Range(0xc58, 0xc61), new Range(0xc80), new Range(0xc85, 0xcb9), new Range(0xcbd), new Range(0xcde, 0xce1), new Range(0xcf1, 0xcf2), new Range(0xd04, 0xd3a), new Range(0xd3d), new Range(0xd4e), new Range(0xd54, 0xd56), new Range(0xd5f, 0xd61), new Range(0xd7a, 0xd7f), new Range(0xd85, 0xdc6), new Range(0xe01, 0xe30), new Range(0xe32, 0xe33), new Range(0xe40, 0xe45), new Range(0xe81, 0xeb0), new Range(0xeb2, 0xeb3), new Range(0xebd, 0xec4), new Range(0xedc, 0xf00), new Range(0xf40, 0xf6c), new Range(0xf88, 0xf8c), new Range(0x1000, 0x102a), new Range(0x103f), new Range(0x1050, 0x1055), new Range(0x105a, 0x105d), new Range(0x1061), new Range(0x1065, 0x1066), new Range(0x106e, 0x1070), new Range(0x1075, 0x1081), new Range(0x108e), new Range(0x1100, 0x135a), new Range(0x1380, 0x138f), new Range(0x1401, 0x166c), new Range(0x166f, 0x167f), new Range(0x1681, 0x169a), new Range(0x16a0, 0x16ea), new Range(0x16f1, 0x1711), new Range(0x1720, 0x1731), new Range(0x1740, 0x1751), new Range(0x1760, 0x1770), new Range(0x1780, 0x17b3), new Range(0x17dc), new Range(0x1820, 0x1842), new Range(0x1844, 0x1884), new Range(0x1887, 0x18a8), new Range(0x18aa, 0x191e), new Range(0x1950, 0x19c9), new Range(0x1a00, 0x1a16), new Range(0x1a20, 0x1a54), new Range(0x1b05, 0x1b33), new Range(0x1b45, 0x1b4b), new Range(0x1b83, 0x1ba0), new Range(0x1bae, 0x1baf), new Range(0x1bba, 0x1be5), new Range(0x1c00, 0x1c23), new Range(0x1c4d, 0x1c4f), new Range(0x1c5a, 0x1c77), new Range(0x1ce9, 0x1cec), new Range(0x1cee, 0x1cf3), new Range(0x1cf5, 0x1cf6), new Range(0x1cfa), new Range(0x2135, 0x2138), new Range(0x2d30, 0x2d67), new Range(0x2d80, 0x2dde), new Range(0x3006), new Range(0x303c), new Range(0x3041, 0x3096), new Range(0x309f), new Range(0x30a1, 0x30fa), new Range(0x30ff, 0x318e), new Range(0x31a0, 0x31bf), new Range(0x31f0, 0x31ff), new Range(0x3400, 0x4dbf), new Range(0x4e00, 0x9ffc), new Range(0xa016, 0xa48c), new Range(0xa4d0, 0xa4f7), new Range(0xa500, 0xa60b), new Range(0xa610, 0xa61f), new Range(0xa62a, 0xa62b), new Range(0xa66e), new Range(0xa6a0, 0xa6e5), new Range(0xa78f), new Range(0xa7f7), new Range(0xa7fb, 0xa801), new Range(0xa803, 0xa805), new Range(0xa807, 0xa80a), new Range(0xa80c, 0xa822), new Range(0xa840, 0xa873), new Range(0xa882, 0xa8b3), new Range(0xa8f2, 0xa8f7), new Range(0xa8fb), new Range(0xa8fd, 0xa8fe), new Range(0xa90a, 0xa925), new Range(0xa930, 0xa946), new Range(0xa960, 0xa97c), new Range(0xa984, 0xa9b2), new Range(0xa9e0, 0xa9e4), new Range(0xa9e7, 0xa9ef), new Range(0xa9fa, 0xaa28), new Range(0xaa40, 0xaa42), new Range(0xaa44, 0xaa4b), new Range(0xaa60, 0xaa6f), new Range(0xaa71, 0xaa76), new Range(0xaa7a), new Range(0xaa7e, 0xaaaf), new Range(0xaab1), new Range(0xaab5, 0xaab6), new Range(0xaab9, 0xaabd), new Range(0xaac0), new Range(0xaac2, 0xaadc), new Range(0xaae0, 0xaaea), new Range(0xaaf2), new Range(0xab01, 0xab2e), new Range(0xabc0, 0xabe2), new Range(0xac00, 0xd7a3), new Range(0xf900, 0xfad9), new Range(0xfb1d), new Range(0xfb1f, 0xfb28), new Range(0xfb2a, 0xfbb1), new Range(0xfbd3, 0xfd3d), new Range(0xfd50, 0xfdfb), new Range(0xfe70, 0xfefc), new Range(0xff66, 0xff6f), new Range(0xff71, 0xff9d), new Range(0xffa0, 0xffdc), new Range(0x10000, 0x100fa), new Range(0x10280, 0x102d0), new Range(0x10300, 0x1031f), new Range(0x1032d, 0x10340), new Range(0x10342, 0x10349), new Range(0x10350, 0x10375), new Range(0x10380, 0x1039d), new Range(0x103a0, 0x103cf), new Range(0x10450, 0x1049d), new Range(0x10500, 0x10563), new Range(0x10600, 0x10855), new Range(0x10860, 0x10876), new Range(0x10880, 0x1089e), new Range(0x108e0, 0x108f5), new Range(0x10900, 0x10915), new Range(0x10920, 0x10939), new Range(0x10980, 0x109b7), new Range(0x109be, 0x109bf), new Range(0x10a00), new Range(0x10a10, 0x10a35), new Range(0x10a60, 0x10a7c), new Range(0x10a80, 0x10a9c), new Range(0x10ac0, 0x10ac7), new Range(0x10ac9, 0x10ae4), new Range(0x10b00, 0x10b35), new Range(0x10b40, 0x10b55), new Range(0x10b60, 0x10b72), new Range(0x10b80, 0x10b91), new Range(0x10c00, 0x10c48), new Range(0x10d00, 0x10d23), new Range(0x10e80, 0x10ea9), new Range(0x10eb0, 0x10f1c), new Range(0x10f27, 0x10f45), new Range(0x10fb0, 0x10fc4), new Range(0x10fe0, 0x10ff6), new Range(0x11003, 0x11037), new Range(0x11083, 0x110af), new Range(0x110d0, 0x110e8), new Range(0x11103, 0x11126), new Range(0x11144), new Range(0x11147, 0x11172), new Range(0x11176), new Range(0x11183, 0x111b2), new Range(0x111c1, 0x111c4), new Range(0x111da), new Range(0x111dc), new Range(0x11200, 0x1122b), new Range(0x11280, 0x112a8), new Range(0x112b0, 0x112de), new Range(0x11305, 0x11339), new Range(0x1133d), new Range(0x11350), new Range(0x1135d, 0x11361), new Range(0x11400, 0x11434), new Range(0x11447, 0x1144a), new Range(0x1145f, 0x114af), new Range(0x114c4, 0x114c5), new Range(0x114c7), new Range(0x11580, 0x115ae), new Range(0x115d8, 0x115db), new Range(0x11600, 0x1162f), new Range(0x11644), new Range(0x11680, 0x116aa), new Range(0x116b8), new Range(0x11700, 0x1171a), new Range(0x11800, 0x1182b), new Range(0x118ff, 0x1192f), new Range(0x1193f), new Range(0x11941), new Range(0x119a0, 0x119d0), new Range(0x119e1), new Range(0x119e3), new Range(0x11a00), new Range(0x11a0b, 0x11a32), new Range(0x11a3a), new Range(0x11a50), new Range(0x11a5c, 0x11a89), new Range(0x11a9d), new Range(0x11ac0, 0x11c2e), new Range(0x11c40), new Range(0x11c72, 0x11c8f), new Range(0x11d00, 0x11d30), new Range(0x11d46), new Range(0x11d60, 0x11d89), new Range(0x11d98), new Range(0x11ee0, 0x11ef2), new Range(0x11fb0), new Range(0x12000, 0x12399), new Range(0x12480, 0x1342e), new Range(0x14400, 0x16a5e), new Range(0x16ad0, 0x16aed), new Range(0x16b00, 0x16b2f), new Range(0x16b63, 0x16b8f), new Range(0x16f00, 0x16f4a), new Range(0x16f50), new Range(0x17000, 0x187f7), new Range(0x18d00, 0x18d08), new Range(0x1e100, 0x1e12c), new Range(0x1e14e), new Range(0x1e2c0, 0x1e2eb), new Range(0x1e800, 0x1e8c4), new Range(0x1ee00, 0x1eebb), new Range(0x20000, 0x2a6dd), new Range(0x2a700, 0x2b734), new Range(0x2b740, 0x2b81d), new Range(0x2b820, 0x2cea1), new Range(0x2ceb0, 0x2ebe0), new Range(0x30000, 0x3134a));