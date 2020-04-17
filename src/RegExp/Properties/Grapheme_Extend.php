<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UniLex\Tool\RegExp\Properties;

use Remorhaz\IntRangeSets\Range;
use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(new Range(0x300, 0x36f), new Range(0x483, 0x489), new Range(0x591, 0x5bd), new Range(0x5bf), new Range(0x5c1, 0x5c2), new Range(0x5c4, 0x5c5), new Range(0x5c7), new Range(0x610, 0x61a), new Range(0x64b, 0x65f), new Range(0x670), new Range(0x6d6, 0x6dc), new Range(0x6df, 0x6e4), new Range(0x6e7, 0x6e8), new Range(0x6ea, 0x6ed), new Range(0x711), new Range(0x730, 0x74a), new Range(0x7a6, 0x7b0), new Range(0x7eb, 0x7f3), new Range(0x7fd), new Range(0x816, 0x819), new Range(0x81b, 0x823), new Range(0x825, 0x827), new Range(0x829, 0x82d), new Range(0x859, 0x85b), new Range(0x8d3, 0x8e1), new Range(0x8e3, 0x902), new Range(0x93a), new Range(0x93c), new Range(0x941, 0x948), new Range(0x94d), new Range(0x951, 0x957), new Range(0x962, 0x963), new Range(0x981), new Range(0x9bc), new Range(0x9be), new Range(0x9c1, 0x9c4), new Range(0x9cd), new Range(0x9d7), new Range(0x9e2, 0x9e3), new Range(0x9fe), new Range(0xa01, 0xa02), new Range(0xa3c), new Range(0xa41, 0xa42), new Range(0xa47, 0xa48), new Range(0xa4b, 0xa4d), new Range(0xa51), new Range(0xa70, 0xa71), new Range(0xa75), new Range(0xa81, 0xa82), new Range(0xabc), new Range(0xac1, 0xac5), new Range(0xac7, 0xac8), new Range(0xacd), new Range(0xae2, 0xae3), new Range(0xafa, 0xaff), new Range(0xb01), new Range(0xb3c), new Range(0xb3e, 0xb3f), new Range(0xb41, 0xb44), new Range(0xb4d), new Range(0xb55, 0xb57), new Range(0xb62, 0xb63), new Range(0xb82), new Range(0xbbe), new Range(0xbc0), new Range(0xbcd), new Range(0xbd7), new Range(0xc00), new Range(0xc04), new Range(0xc3e, 0xc40), new Range(0xc46, 0xc48), new Range(0xc4a, 0xc4d), new Range(0xc55, 0xc56), new Range(0xc62, 0xc63), new Range(0xc81), new Range(0xcbc), new Range(0xcbf), new Range(0xcc2), new Range(0xcc6), new Range(0xccc, 0xccd), new Range(0xcd5, 0xcd6), new Range(0xce2, 0xce3), new Range(0xd00, 0xd01), new Range(0xd3b, 0xd3c), new Range(0xd3e), new Range(0xd41, 0xd44), new Range(0xd4d), new Range(0xd57), new Range(0xd62, 0xd63), new Range(0xd81), new Range(0xdca), new Range(0xdcf), new Range(0xdd2, 0xdd4), new Range(0xdd6), new Range(0xddf), new Range(0xe31), new Range(0xe34, 0xe3a), new Range(0xe47, 0xe4e), new Range(0xeb1), new Range(0xeb4, 0xebc), new Range(0xec8, 0xecd), new Range(0xf18, 0xf19), new Range(0xf35), new Range(0xf37), new Range(0xf39), new Range(0xf71, 0xf7e), new Range(0xf80, 0xf84), new Range(0xf86, 0xf87), new Range(0xf8d, 0xf97), new Range(0xf99, 0xfbc), new Range(0xfc6), new Range(0x102d, 0x1030), new Range(0x1032, 0x1037), new Range(0x1039, 0x103a), new Range(0x103d, 0x103e), new Range(0x1058, 0x1059), new Range(0x105e, 0x1060), new Range(0x1071, 0x1074), new Range(0x1082), new Range(0x1085, 0x1086), new Range(0x108d), new Range(0x109d), new Range(0x135d, 0x135f), new Range(0x1712, 0x1714), new Range(0x1732, 0x1734), new Range(0x1752, 0x1753), new Range(0x1772, 0x1773), new Range(0x17b4, 0x17b5), new Range(0x17b7, 0x17bd), new Range(0x17c6), new Range(0x17c9, 0x17d3), new Range(0x17dd), new Range(0x180b, 0x180d), new Range(0x1885, 0x1886), new Range(0x18a9), new Range(0x1920, 0x1922), new Range(0x1927, 0x1928), new Range(0x1932), new Range(0x1939, 0x193b), new Range(0x1a17, 0x1a18), new Range(0x1a1b), new Range(0x1a56), new Range(0x1a58, 0x1a5e), new Range(0x1a60), new Range(0x1a62), new Range(0x1a65, 0x1a6c), new Range(0x1a73, 0x1a7c), new Range(0x1a7f), new Range(0x1ab0, 0x1ac0), new Range(0x1b00, 0x1b03), new Range(0x1b34, 0x1b3a), new Range(0x1b3c), new Range(0x1b42), new Range(0x1b6b, 0x1b73), new Range(0x1b80, 0x1b81), new Range(0x1ba2, 0x1ba5), new Range(0x1ba8, 0x1ba9), new Range(0x1bab, 0x1bad), new Range(0x1be6), new Range(0x1be8, 0x1be9), new Range(0x1bed), new Range(0x1bef, 0x1bf1), new Range(0x1c2c, 0x1c33), new Range(0x1c36, 0x1c37), new Range(0x1cd0, 0x1cd2), new Range(0x1cd4, 0x1ce0), new Range(0x1ce2, 0x1ce8), new Range(0x1ced), new Range(0x1cf4), new Range(0x1cf8, 0x1cf9), new Range(0x1dc0, 0x1df9), new Range(0x1dfb, 0x1dff), new Range(0x200c), new Range(0x20d0, 0x20f0), new Range(0x2cef, 0x2cf1), new Range(0x2d7f), new Range(0x2de0, 0x2dff), new Range(0x302a, 0x302f), new Range(0x3099, 0x309a), new Range(0xa66f, 0xa672), new Range(0xa674, 0xa67d), new Range(0xa69e, 0xa69f), new Range(0xa6f0, 0xa6f1), new Range(0xa802), new Range(0xa806), new Range(0xa80b), new Range(0xa825, 0xa826), new Range(0xa82c), new Range(0xa8c4, 0xa8c5), new Range(0xa8e0, 0xa8f1), new Range(0xa8ff), new Range(0xa926, 0xa92d), new Range(0xa947, 0xa951), new Range(0xa980, 0xa982), new Range(0xa9b3), new Range(0xa9b6, 0xa9b9), new Range(0xa9bc, 0xa9bd), new Range(0xa9e5), new Range(0xaa29, 0xaa2e), new Range(0xaa31, 0xaa32), new Range(0xaa35, 0xaa36), new Range(0xaa43), new Range(0xaa4c), new Range(0xaa7c), new Range(0xaab0), new Range(0xaab2, 0xaab4), new Range(0xaab7, 0xaab8), new Range(0xaabe, 0xaabf), new Range(0xaac1), new Range(0xaaec, 0xaaed), new Range(0xaaf6), new Range(0xabe5), new Range(0xabe8), new Range(0xabed), new Range(0xfb1e), new Range(0xfe00, 0xfe0f), new Range(0xfe20, 0xfe2f), new Range(0xff9e, 0xff9f), new Range(0x101fd), new Range(0x102e0), new Range(0x10376, 0x1037a), new Range(0x10a01, 0x10a03), new Range(0x10a05, 0x10a06), new Range(0x10a0c, 0x10a0f), new Range(0x10a38, 0x10a3a), new Range(0x10a3f), new Range(0x10ae5, 0x10ae6), new Range(0x10d24, 0x10d27), new Range(0x10eab, 0x10eac), new Range(0x10f46, 0x10f50), new Range(0x11001), new Range(0x11038, 0x11046), new Range(0x1107f, 0x11081), new Range(0x110b3, 0x110b6), new Range(0x110b9, 0x110ba), new Range(0x11100, 0x11102), new Range(0x11127, 0x1112b), new Range(0x1112d, 0x11134), new Range(0x11173), new Range(0x11180, 0x11181), new Range(0x111b6, 0x111be), new Range(0x111c9, 0x111cc), new Range(0x111cf), new Range(0x1122f, 0x11231), new Range(0x11234), new Range(0x11236, 0x11237), new Range(0x1123e), new Range(0x112df), new Range(0x112e3, 0x112ea), new Range(0x11300, 0x11301), new Range(0x1133b, 0x1133c), new Range(0x1133e), new Range(0x11340), new Range(0x11357), new Range(0x11366, 0x1136c), new Range(0x11370, 0x11374), new Range(0x11438, 0x1143f), new Range(0x11442, 0x11444), new Range(0x11446), new Range(0x1145e), new Range(0x114b0), new Range(0x114b3, 0x114b8), new Range(0x114ba), new Range(0x114bd), new Range(0x114bf, 0x114c0), new Range(0x114c2, 0x114c3), new Range(0x115af), new Range(0x115b2, 0x115b5), new Range(0x115bc, 0x115bd), new Range(0x115bf, 0x115c0), new Range(0x115dc, 0x115dd), new Range(0x11633, 0x1163a), new Range(0x1163d), new Range(0x1163f, 0x11640), new Range(0x116ab), new Range(0x116ad), new Range(0x116b0, 0x116b5), new Range(0x116b7), new Range(0x1171d, 0x1171f), new Range(0x11722, 0x11725), new Range(0x11727, 0x1172b), new Range(0x1182f, 0x11837), new Range(0x11839, 0x1183a), new Range(0x11930), new Range(0x1193b, 0x1193c), new Range(0x1193e), new Range(0x11943), new Range(0x119d4, 0x119d7), new Range(0x119da, 0x119db), new Range(0x119e0), new Range(0x11a01, 0x11a0a), new Range(0x11a33, 0x11a38), new Range(0x11a3b, 0x11a3e), new Range(0x11a47), new Range(0x11a51, 0x11a56), new Range(0x11a59, 0x11a5b), new Range(0x11a8a, 0x11a96), new Range(0x11a98, 0x11a99), new Range(0x11c30, 0x11c36), new Range(0x11c38, 0x11c3d), new Range(0x11c3f), new Range(0x11c92, 0x11ca7), new Range(0x11caa, 0x11cb0), new Range(0x11cb2, 0x11cb3), new Range(0x11cb5, 0x11cb6), new Range(0x11d31, 0x11d36), new Range(0x11d3a), new Range(0x11d3c, 0x11d3d), new Range(0x11d3f, 0x11d45), new Range(0x11d47), new Range(0x11d90, 0x11d91), new Range(0x11d95), new Range(0x11d97), new Range(0x11ef3, 0x11ef4), new Range(0x16af0, 0x16af4), new Range(0x16b30, 0x16b36), new Range(0x16f4f), new Range(0x16f8f, 0x16f92), new Range(0x16fe4), new Range(0x1bc9d, 0x1bc9e), new Range(0x1d165), new Range(0x1d167, 0x1d169), new Range(0x1d16e, 0x1d172), new Range(0x1d17b, 0x1d182), new Range(0x1d185, 0x1d18b), new Range(0x1d1aa, 0x1d1ad), new Range(0x1d242, 0x1d244), new Range(0x1da00, 0x1da36), new Range(0x1da3b, 0x1da6c), new Range(0x1da75), new Range(0x1da84), new Range(0x1da9b, 0x1da9f), new Range(0x1daa1, 0x1daaf), new Range(0x1e000, 0x1e006), new Range(0x1e008, 0x1e018), new Range(0x1e01b, 0x1e021), new Range(0x1e023, 0x1e024), new Range(0x1e026, 0x1e02a), new Range(0x1e130, 0x1e136), new Range(0x1e2ec, 0x1e2ef), new Range(0x1e8d0, 0x1e8d6), new Range(0x1e944, 0x1e94a), new Range(0xe0020, 0xe007f), new Range(0xe0100, 0xe01ef));
