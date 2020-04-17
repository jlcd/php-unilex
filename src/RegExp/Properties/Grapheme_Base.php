<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UniLex\Tool\RegExp\Properties;

use Remorhaz\IntRangeSets\Range;
use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(new Range(0x20, 0x7e), new Range(0xa0, 0xac), new Range(0xae, 0x2ff), new Range(0x370, 0x377), new Range(0x37a, 0x37f), new Range(0x384, 0x38a), new Range(0x38c), new Range(0x38e, 0x3a1), new Range(0x3a3, 0x482), new Range(0x48a, 0x52f), new Range(0x531, 0x556), new Range(0x559, 0x58a), new Range(0x58d, 0x58f), new Range(0x5be), new Range(0x5c0), new Range(0x5c3), new Range(0x5c6), new Range(0x5d0, 0x5ea), new Range(0x5ef, 0x5f4), new Range(0x606, 0x60f), new Range(0x61b), new Range(0x61e, 0x64a), new Range(0x660, 0x66f), new Range(0x671, 0x6d5), new Range(0x6de), new Range(0x6e5, 0x6e6), new Range(0x6e9), new Range(0x6ee, 0x70d), new Range(0x710), new Range(0x712, 0x72f), new Range(0x74d, 0x7a5), new Range(0x7b1), new Range(0x7c0, 0x7ea), new Range(0x7f4, 0x7fa), new Range(0x7fe, 0x815), new Range(0x81a), new Range(0x824), new Range(0x828), new Range(0x830, 0x83e), new Range(0x840, 0x858), new Range(0x85e), new Range(0x860, 0x86a), new Range(0x8a0, 0x8b4), new Range(0x8b6, 0x8c7), new Range(0x903, 0x939), new Range(0x93b), new Range(0x93d, 0x940), new Range(0x949, 0x94c), new Range(0x94e, 0x950), new Range(0x958, 0x961), new Range(0x964, 0x980), new Range(0x982, 0x983), new Range(0x985, 0x98c), new Range(0x98f, 0x990), new Range(0x993, 0x9a8), new Range(0x9aa, 0x9b0), new Range(0x9b2), new Range(0x9b6, 0x9b9), new Range(0x9bd), new Range(0x9bf, 0x9c0), new Range(0x9c7, 0x9c8), new Range(0x9cb, 0x9cc), new Range(0x9ce), new Range(0x9dc, 0x9dd), new Range(0x9df, 0x9e1), new Range(0x9e6, 0x9fd), new Range(0xa03), new Range(0xa05, 0xa0a), new Range(0xa0f, 0xa10), new Range(0xa13, 0xa28), new Range(0xa2a, 0xa30), new Range(0xa32, 0xa33), new Range(0xa35, 0xa36), new Range(0xa38, 0xa39), new Range(0xa3e, 0xa40), new Range(0xa59, 0xa5c), new Range(0xa5e), new Range(0xa66, 0xa6f), new Range(0xa72, 0xa74), new Range(0xa76), new Range(0xa83), new Range(0xa85, 0xa8d), new Range(0xa8f, 0xa91), new Range(0xa93, 0xaa8), new Range(0xaaa, 0xab0), new Range(0xab2, 0xab3), new Range(0xab5, 0xab9), new Range(0xabd, 0xac0), new Range(0xac9), new Range(0xacb, 0xacc), new Range(0xad0), new Range(0xae0, 0xae1), new Range(0xae6, 0xaf1), new Range(0xaf9), new Range(0xb02, 0xb03), new Range(0xb05, 0xb0c), new Range(0xb0f, 0xb10), new Range(0xb13, 0xb28), new Range(0xb2a, 0xb30), new Range(0xb32, 0xb33), new Range(0xb35, 0xb39), new Range(0xb3d), new Range(0xb40), new Range(0xb47, 0xb48), new Range(0xb4b, 0xb4c), new Range(0xb5c, 0xb5d), new Range(0xb5f, 0xb61), new Range(0xb66, 0xb77), new Range(0xb83), new Range(0xb85, 0xb8a), new Range(0xb8e, 0xb90), new Range(0xb92, 0xb95), new Range(0xb99, 0xb9a), new Range(0xb9c), new Range(0xb9e, 0xb9f), new Range(0xba3, 0xba4), new Range(0xba8, 0xbaa), new Range(0xbae, 0xbb9), new Range(0xbbf), new Range(0xbc1, 0xbc2), new Range(0xbc6, 0xbc8), new Range(0xbca, 0xbcc), new Range(0xbd0), new Range(0xbe6, 0xbfa), new Range(0xc01, 0xc03), new Range(0xc05, 0xc0c), new Range(0xc0e, 0xc10), new Range(0xc12, 0xc28), new Range(0xc2a, 0xc39), new Range(0xc3d), new Range(0xc41, 0xc44), new Range(0xc58, 0xc5a), new Range(0xc60, 0xc61), new Range(0xc66, 0xc6f), new Range(0xc77, 0xc80), new Range(0xc82, 0xc8c), new Range(0xc8e, 0xc90), new Range(0xc92, 0xca8), new Range(0xcaa, 0xcb3), new Range(0xcb5, 0xcb9), new Range(0xcbd, 0xcbe), new Range(0xcc0, 0xcc1), new Range(0xcc3, 0xcc4), new Range(0xcc7, 0xcc8), new Range(0xcca, 0xccb), new Range(0xcde), new Range(0xce0, 0xce1), new Range(0xce6, 0xcef), new Range(0xcf1, 0xcf2), new Range(0xd02, 0xd0c), new Range(0xd0e, 0xd10), new Range(0xd12, 0xd3a), new Range(0xd3d), new Range(0xd3f, 0xd40), new Range(0xd46, 0xd48), new Range(0xd4a, 0xd4c), new Range(0xd4e, 0xd4f), new Range(0xd54, 0xd56), new Range(0xd58, 0xd61), new Range(0xd66, 0xd7f), new Range(0xd82, 0xd83), new Range(0xd85, 0xd96), new Range(0xd9a, 0xdb1), new Range(0xdb3, 0xdbb), new Range(0xdbd), new Range(0xdc0, 0xdc6), new Range(0xdd0, 0xdd1), new Range(0xdd8, 0xdde), new Range(0xde6, 0xdef), new Range(0xdf2, 0xdf4), new Range(0xe01, 0xe30), new Range(0xe32, 0xe33), new Range(0xe3f, 0xe46), new Range(0xe4f, 0xe5b), new Range(0xe81, 0xe82), new Range(0xe84), new Range(0xe86, 0xe8a), new Range(0xe8c, 0xea3), new Range(0xea5), new Range(0xea7, 0xeb0), new Range(0xeb2, 0xeb3), new Range(0xebd), new Range(0xec0, 0xec4), new Range(0xec6), new Range(0xed0, 0xed9), new Range(0xedc, 0xedf), new Range(0xf00, 0xf17), new Range(0xf1a, 0xf34), new Range(0xf36), new Range(0xf38), new Range(0xf3a, 0xf47), new Range(0xf49, 0xf6c), new Range(0xf7f), new Range(0xf85), new Range(0xf88, 0xf8c), new Range(0xfbe, 0xfc5), new Range(0xfc7, 0xfcc), new Range(0xfce, 0xfda), new Range(0x1000, 0x102c), new Range(0x1031), new Range(0x1038), new Range(0x103b, 0x103c), new Range(0x103f, 0x1057), new Range(0x105a, 0x105d), new Range(0x1061, 0x1070), new Range(0x1075, 0x1081), new Range(0x1083, 0x1084), new Range(0x1087, 0x108c), new Range(0x108e, 0x109c), new Range(0x109e, 0x10c5), new Range(0x10c7), new Range(0x10cd), new Range(0x10d0, 0x1248), new Range(0x124a, 0x124d), new Range(0x1250, 0x1256), new Range(0x1258), new Range(0x125a, 0x125d), new Range(0x1260, 0x1288), new Range(0x128a, 0x128d), new Range(0x1290, 0x12b0), new Range(0x12b2, 0x12b5), new Range(0x12b8, 0x12be), new Range(0x12c0), new Range(0x12c2, 0x12c5), new Range(0x12c8, 0x12d6), new Range(0x12d8, 0x1310), new Range(0x1312, 0x1315), new Range(0x1318, 0x135a), new Range(0x1360, 0x137c), new Range(0x1380, 0x1399), new Range(0x13a0, 0x13f5), new Range(0x13f8, 0x13fd), new Range(0x1400, 0x169c), new Range(0x16a0, 0x16f8), new Range(0x1700, 0x170c), new Range(0x170e, 0x1711), new Range(0x1720, 0x1731), new Range(0x1735, 0x1736), new Range(0x1740, 0x1751), new Range(0x1760, 0x176c), new Range(0x176e, 0x1770), new Range(0x1780, 0x17b3), new Range(0x17b6), new Range(0x17be, 0x17c5), new Range(0x17c7, 0x17c8), new Range(0x17d4, 0x17dc), new Range(0x17e0, 0x17e9), new Range(0x17f0, 0x17f9), new Range(0x1800, 0x180a), new Range(0x1810, 0x1819), new Range(0x1820, 0x1878), new Range(0x1880, 0x1884), new Range(0x1887, 0x18a8), new Range(0x18aa), new Range(0x18b0, 0x18f5), new Range(0x1900, 0x191e), new Range(0x1923, 0x1926), new Range(0x1929, 0x192b), new Range(0x1930, 0x1931), new Range(0x1933, 0x1938), new Range(0x1940), new Range(0x1944, 0x196d), new Range(0x1970, 0x1974), new Range(0x1980, 0x19ab), new Range(0x19b0, 0x19c9), new Range(0x19d0, 0x19da), new Range(0x19de, 0x1a16), new Range(0x1a19, 0x1a1a), new Range(0x1a1e, 0x1a55), new Range(0x1a57), new Range(0x1a61), new Range(0x1a63, 0x1a64), new Range(0x1a6d, 0x1a72), new Range(0x1a80, 0x1a89), new Range(0x1a90, 0x1a99), new Range(0x1aa0, 0x1aad), new Range(0x1b04, 0x1b33), new Range(0x1b3b), new Range(0x1b3d, 0x1b41), new Range(0x1b43, 0x1b4b), new Range(0x1b50, 0x1b6a), new Range(0x1b74, 0x1b7c), new Range(0x1b82, 0x1ba1), new Range(0x1ba6, 0x1ba7), new Range(0x1baa), new Range(0x1bae, 0x1be5), new Range(0x1be7), new Range(0x1bea, 0x1bec), new Range(0x1bee), new Range(0x1bf2, 0x1bf3), new Range(0x1bfc, 0x1c2b), new Range(0x1c34, 0x1c35), new Range(0x1c3b, 0x1c49), new Range(0x1c4d, 0x1c88), new Range(0x1c90, 0x1cba), new Range(0x1cbd, 0x1cc7), new Range(0x1cd3), new Range(0x1ce1), new Range(0x1ce9, 0x1cec), new Range(0x1cee, 0x1cf3), new Range(0x1cf5, 0x1cf7), new Range(0x1cfa), new Range(0x1d00, 0x1dbf), new Range(0x1e00, 0x1f15), new Range(0x1f18, 0x1f1d), new Range(0x1f20, 0x1f45), new Range(0x1f48, 0x1f4d), new Range(0x1f50, 0x1f57), new Range(0x1f59), new Range(0x1f5b), new Range(0x1f5d), new Range(0x1f5f, 0x1f7d), new Range(0x1f80, 0x1fb4), new Range(0x1fb6, 0x1fc4), new Range(0x1fc6, 0x1fd3), new Range(0x1fd6, 0x1fdb), new Range(0x1fdd, 0x1fef), new Range(0x1ff2, 0x1ff4), new Range(0x1ff6, 0x1ffe), new Range(0x2000, 0x200a), new Range(0x2010, 0x2027), new Range(0x202f, 0x205f), new Range(0x2070, 0x2071), new Range(0x2074, 0x208e), new Range(0x2090, 0x209c), new Range(0x20a0, 0x20bf), new Range(0x2100, 0x218b), new Range(0x2190, 0x2426), new Range(0x2440, 0x244a), new Range(0x2460, 0x2b73), new Range(0x2b76, 0x2b95), new Range(0x2b97, 0x2c2e), new Range(0x2c30, 0x2c5e), new Range(0x2c60, 0x2cee), new Range(0x2cf2, 0x2cf3), new Range(0x2cf9, 0x2d25), new Range(0x2d27), new Range(0x2d2d), new Range(0x2d30, 0x2d67), new Range(0x2d6f, 0x2d70), new Range(0x2d80, 0x2d96), new Range(0x2da0, 0x2da6), new Range(0x2da8, 0x2dae), new Range(0x2db0, 0x2db6), new Range(0x2db8, 0x2dbe), new Range(0x2dc0, 0x2dc6), new Range(0x2dc8, 0x2dce), new Range(0x2dd0, 0x2dd6), new Range(0x2dd8, 0x2dde), new Range(0x2e00, 0x2e52), new Range(0x2e80, 0x2e99), new Range(0x2e9b, 0x2ef3), new Range(0x2f00, 0x2fd5), new Range(0x2ff0, 0x2ffb), new Range(0x3000, 0x3029), new Range(0x3030, 0x303f), new Range(0x3041, 0x3096), new Range(0x309b, 0x30ff), new Range(0x3105, 0x312f), new Range(0x3131, 0x318e), new Range(0x3190, 0x31e3), new Range(0x31f0, 0x321e), new Range(0x3220, 0x9ffc), new Range(0xa000, 0xa48c), new Range(0xa490, 0xa4c6), new Range(0xa4d0, 0xa62b), new Range(0xa640, 0xa66e), new Range(0xa673), new Range(0xa67e, 0xa69d), new Range(0xa6a0, 0xa6ef), new Range(0xa6f2, 0xa6f7), new Range(0xa700, 0xa7bf), new Range(0xa7c2, 0xa7ca), new Range(0xa7f5, 0xa801), new Range(0xa803, 0xa805), new Range(0xa807, 0xa80a), new Range(0xa80c, 0xa824), new Range(0xa827, 0xa82b), new Range(0xa830, 0xa839), new Range(0xa840, 0xa877), new Range(0xa880, 0xa8c3), new Range(0xa8ce, 0xa8d9), new Range(0xa8f2, 0xa8fe), new Range(0xa900, 0xa925), new Range(0xa92e, 0xa946), new Range(0xa952, 0xa953), new Range(0xa95f, 0xa97c), new Range(0xa983, 0xa9b2), new Range(0xa9b4, 0xa9b5), new Range(0xa9ba, 0xa9bb), new Range(0xa9be, 0xa9cd), new Range(0xa9cf, 0xa9d9), new Range(0xa9de, 0xa9e4), new Range(0xa9e6, 0xa9fe), new Range(0xaa00, 0xaa28), new Range(0xaa2f, 0xaa30), new Range(0xaa33, 0xaa34), new Range(0xaa40, 0xaa42), new Range(0xaa44, 0xaa4b), new Range(0xaa4d), new Range(0xaa50, 0xaa59), new Range(0xaa5c, 0xaa7b), new Range(0xaa7d, 0xaaaf), new Range(0xaab1), new Range(0xaab5, 0xaab6), new Range(0xaab9, 0xaabd), new Range(0xaac0), new Range(0xaac2), new Range(0xaadb, 0xaaeb), new Range(0xaaee, 0xaaf5), new Range(0xab01, 0xab06), new Range(0xab09, 0xab0e), new Range(0xab11, 0xab16), new Range(0xab20, 0xab26), new Range(0xab28, 0xab2e), new Range(0xab30, 0xab6b), new Range(0xab70, 0xabe4), new Range(0xabe6, 0xabe7), new Range(0xabe9, 0xabec), new Range(0xabf0, 0xabf9), new Range(0xac00, 0xd7a3), new Range(0xd7b0, 0xd7c6), new Range(0xd7cb, 0xd7fb), new Range(0xf900, 0xfa6d), new Range(0xfa70, 0xfad9), new Range(0xfb00, 0xfb06), new Range(0xfb13, 0xfb17), new Range(0xfb1d), new Range(0xfb1f, 0xfb36), new Range(0xfb38, 0xfb3c), new Range(0xfb3e), new Range(0xfb40, 0xfb41), new Range(0xfb43, 0xfb44), new Range(0xfb46, 0xfbc1), new Range(0xfbd3, 0xfd3f), new Range(0xfd50, 0xfd8f), new Range(0xfd92, 0xfdc7), new Range(0xfdf0, 0xfdfd), new Range(0xfe10, 0xfe19), new Range(0xfe30, 0xfe52), new Range(0xfe54, 0xfe66), new Range(0xfe68, 0xfe6b), new Range(0xfe70, 0xfe74), new Range(0xfe76, 0xfefc), new Range(0xff01, 0xff9d), new Range(0xffa0, 0xffbe), new Range(0xffc2, 0xffc7), new Range(0xffca, 0xffcf), new Range(0xffd2, 0xffd7), new Range(0xffda, 0xffdc), new Range(0xffe0, 0xffe6), new Range(0xffe8, 0xffee), new Range(0xfffc, 0xfffd), new Range(0x10000, 0x1000b), new Range(0x1000d, 0x10026), new Range(0x10028, 0x1003a), new Range(0x1003c, 0x1003d), new Range(0x1003f, 0x1004d), new Range(0x10050, 0x1005d), new Range(0x10080, 0x100fa), new Range(0x10100, 0x10102), new Range(0x10107, 0x10133), new Range(0x10137, 0x1018e), new Range(0x10190, 0x1019c), new Range(0x101a0), new Range(0x101d0, 0x101fc), new Range(0x10280, 0x1029c), new Range(0x102a0, 0x102d0), new Range(0x102e1, 0x102fb), new Range(0x10300, 0x10323), new Range(0x1032d, 0x1034a), new Range(0x10350, 0x10375), new Range(0x10380, 0x1039d), new Range(0x1039f, 0x103c3), new Range(0x103c8, 0x103d5), new Range(0x10400, 0x1049d), new Range(0x104a0, 0x104a9), new Range(0x104b0, 0x104d3), new Range(0x104d8, 0x104fb), new Range(0x10500, 0x10527), new Range(0x10530, 0x10563), new Range(0x1056f), new Range(0x10600, 0x10736), new Range(0x10740, 0x10755), new Range(0x10760, 0x10767), new Range(0x10800, 0x10805), new Range(0x10808), new Range(0x1080a, 0x10835), new Range(0x10837, 0x10838), new Range(0x1083c), new Range(0x1083f, 0x10855), new Range(0x10857, 0x1089e), new Range(0x108a7, 0x108af), new Range(0x108e0, 0x108f2), new Range(0x108f4, 0x108f5), new Range(0x108fb, 0x1091b), new Range(0x1091f, 0x10939), new Range(0x1093f), new Range(0x10980, 0x109b7), new Range(0x109bc, 0x109cf), new Range(0x109d2, 0x10a00), new Range(0x10a10, 0x10a13), new Range(0x10a15, 0x10a17), new Range(0x10a19, 0x10a35), new Range(0x10a40, 0x10a48), new Range(0x10a50, 0x10a58), new Range(0x10a60, 0x10a9f), new Range(0x10ac0, 0x10ae4), new Range(0x10aeb, 0x10af6), new Range(0x10b00, 0x10b35), new Range(0x10b39, 0x10b55), new Range(0x10b58, 0x10b72), new Range(0x10b78, 0x10b91), new Range(0x10b99, 0x10b9c), new Range(0x10ba9, 0x10baf), new Range(0x10c00, 0x10c48), new Range(0x10c80, 0x10cb2), new Range(0x10cc0, 0x10cf2), new Range(0x10cfa, 0x10d23), new Range(0x10d30, 0x10d39), new Range(0x10e60, 0x10e7e), new Range(0x10e80, 0x10ea9), new Range(0x10ead), new Range(0x10eb0, 0x10eb1), new Range(0x10f00, 0x10f27), new Range(0x10f30, 0x10f45), new Range(0x10f51, 0x10f59), new Range(0x10fb0, 0x10fcb), new Range(0x10fe0, 0x10ff6), new Range(0x11000), new Range(0x11002, 0x11037), new Range(0x11047, 0x1104d), new Range(0x11052, 0x1106f), new Range(0x11082, 0x110b2), new Range(0x110b7, 0x110b8), new Range(0x110bb, 0x110bc), new Range(0x110be, 0x110c1), new Range(0x110d0, 0x110e8), new Range(0x110f0, 0x110f9), new Range(0x11103, 0x11126), new Range(0x1112c), new Range(0x11136, 0x11147), new Range(0x11150, 0x11172), new Range(0x11174, 0x11176), new Range(0x11182, 0x111b5), new Range(0x111bf, 0x111c8), new Range(0x111cd, 0x111ce), new Range(0x111d0, 0x111df), new Range(0x111e1, 0x111f4), new Range(0x11200, 0x11211), new Range(0x11213, 0x1122e), new Range(0x11232, 0x11233), new Range(0x11235), new Range(0x11238, 0x1123d), new Range(0x11280, 0x11286), new Range(0x11288), new Range(0x1128a, 0x1128d), new Range(0x1128f, 0x1129d), new Range(0x1129f, 0x112a9), new Range(0x112b0, 0x112de), new Range(0x112e0, 0x112e2), new Range(0x112f0, 0x112f9), new Range(0x11302, 0x11303), new Range(0x11305, 0x1130c), new Range(0x1130f, 0x11310), new Range(0x11313, 0x11328), new Range(0x1132a, 0x11330), new Range(0x11332, 0x11333), new Range(0x11335, 0x11339), new Range(0x1133d), new Range(0x1133f), new Range(0x11341, 0x11344), new Range(0x11347, 0x11348), new Range(0x1134b, 0x1134d), new Range(0x11350), new Range(0x1135d, 0x11363), new Range(0x11400, 0x11437), new Range(0x11440, 0x11441), new Range(0x11445), new Range(0x11447, 0x1145b), new Range(0x1145d), new Range(0x1145f, 0x11461), new Range(0x11480, 0x114af), new Range(0x114b1, 0x114b2), new Range(0x114b9), new Range(0x114bb, 0x114bc), new Range(0x114be), new Range(0x114c1), new Range(0x114c4, 0x114c7), new Range(0x114d0, 0x114d9), new Range(0x11580, 0x115ae), new Range(0x115b0, 0x115b1), new Range(0x115b8, 0x115bb), new Range(0x115be), new Range(0x115c1, 0x115db), new Range(0x11600, 0x11632), new Range(0x1163b, 0x1163c), new Range(0x1163e), new Range(0x11641, 0x11644), new Range(0x11650, 0x11659), new Range(0x11660, 0x1166c), new Range(0x11680, 0x116aa), new Range(0x116ac), new Range(0x116ae, 0x116af), new Range(0x116b6), new Range(0x116b8), new Range(0x116c0, 0x116c9), new Range(0x11700, 0x1171a), new Range(0x11720, 0x11721), new Range(0x11726), new Range(0x11730, 0x1173f), new Range(0x11800, 0x1182e), new Range(0x11838), new Range(0x1183b), new Range(0x118a0, 0x118f2), new Range(0x118ff, 0x11906), new Range(0x11909), new Range(0x1190c, 0x11913), new Range(0x11915, 0x11916), new Range(0x11918, 0x1192f), new Range(0x11931, 0x11935), new Range(0x11937, 0x11938), new Range(0x1193d), new Range(0x1193f, 0x11942), new Range(0x11944, 0x11946), new Range(0x11950, 0x11959), new Range(0x119a0, 0x119a7), new Range(0x119aa, 0x119d3), new Range(0x119dc, 0x119df), new Range(0x119e1, 0x119e4), new Range(0x11a00), new Range(0x11a0b, 0x11a32), new Range(0x11a39, 0x11a3a), new Range(0x11a3f, 0x11a46), new Range(0x11a50), new Range(0x11a57, 0x11a58), new Range(0x11a5c, 0x11a89), new Range(0x11a97), new Range(0x11a9a, 0x11aa2), new Range(0x11ac0, 0x11af8), new Range(0x11c00, 0x11c08), new Range(0x11c0a, 0x11c2f), new Range(0x11c3e), new Range(0x11c40, 0x11c45), new Range(0x11c50, 0x11c6c), new Range(0x11c70, 0x11c8f), new Range(0x11ca9), new Range(0x11cb1), new Range(0x11cb4), new Range(0x11d00, 0x11d06), new Range(0x11d08, 0x11d09), new Range(0x11d0b, 0x11d30), new Range(0x11d46), new Range(0x11d50, 0x11d59), new Range(0x11d60, 0x11d65), new Range(0x11d67, 0x11d68), new Range(0x11d6a, 0x11d8e), new Range(0x11d93, 0x11d94), new Range(0x11d96), new Range(0x11d98), new Range(0x11da0, 0x11da9), new Range(0x11ee0, 0x11ef2), new Range(0x11ef5, 0x11ef8), new Range(0x11fb0), new Range(0x11fc0, 0x11ff1), new Range(0x11fff, 0x12399), new Range(0x12400, 0x1246e), new Range(0x12470, 0x12474), new Range(0x12480, 0x12543), new Range(0x13000, 0x1342e), new Range(0x14400, 0x14646), new Range(0x16800, 0x16a38), new Range(0x16a40, 0x16a5e), new Range(0x16a60, 0x16a69), new Range(0x16a6e, 0x16a6f), new Range(0x16ad0, 0x16aed), new Range(0x16af5), new Range(0x16b00, 0x16b2f), new Range(0x16b37, 0x16b45), new Range(0x16b50, 0x16b59), new Range(0x16b5b, 0x16b61), new Range(0x16b63, 0x16b77), new Range(0x16b7d, 0x16b8f), new Range(0x16e40, 0x16e9a), new Range(0x16f00, 0x16f4a), new Range(0x16f50, 0x16f87), new Range(0x16f93, 0x16f9f), new Range(0x16fe0, 0x16fe3), new Range(0x16ff0, 0x16ff1), new Range(0x17000, 0x187f7), new Range(0x18800, 0x18cd5), new Range(0x18d00, 0x18d08), new Range(0x1b000, 0x1b11e), new Range(0x1b150, 0x1b152), new Range(0x1b164, 0x1b167), new Range(0x1b170, 0x1b2fb), new Range(0x1bc00, 0x1bc6a), new Range(0x1bc70, 0x1bc7c), new Range(0x1bc80, 0x1bc88), new Range(0x1bc90, 0x1bc99), new Range(0x1bc9c), new Range(0x1bc9f), new Range(0x1d000, 0x1d0f5), new Range(0x1d100, 0x1d126), new Range(0x1d129, 0x1d164), new Range(0x1d166), new Range(0x1d16a, 0x1d16d), new Range(0x1d183, 0x1d184), new Range(0x1d18c, 0x1d1a9), new Range(0x1d1ae, 0x1d1e8), new Range(0x1d200, 0x1d241), new Range(0x1d245), new Range(0x1d2e0, 0x1d2f3), new Range(0x1d300, 0x1d356), new Range(0x1d360, 0x1d378), new Range(0x1d400, 0x1d454), new Range(0x1d456, 0x1d49c), new Range(0x1d49e, 0x1d49f), new Range(0x1d4a2), new Range(0x1d4a5, 0x1d4a6), new Range(0x1d4a9, 0x1d4ac), new Range(0x1d4ae, 0x1d4b9), new Range(0x1d4bb), new Range(0x1d4bd, 0x1d4c3), new Range(0x1d4c5, 0x1d505), new Range(0x1d507, 0x1d50a), new Range(0x1d50d, 0x1d514), new Range(0x1d516, 0x1d51c), new Range(0x1d51e, 0x1d539), new Range(0x1d53b, 0x1d53e), new Range(0x1d540, 0x1d544), new Range(0x1d546), new Range(0x1d54a, 0x1d550), new Range(0x1d552, 0x1d6a5), new Range(0x1d6a8, 0x1d7cb), new Range(0x1d7ce, 0x1d9ff), new Range(0x1da37, 0x1da3a), new Range(0x1da6d, 0x1da74), new Range(0x1da76, 0x1da83), new Range(0x1da85, 0x1da8b), new Range(0x1e100, 0x1e12c), new Range(0x1e137, 0x1e13d), new Range(0x1e140, 0x1e149), new Range(0x1e14e, 0x1e14f), new Range(0x1e2c0, 0x1e2eb), new Range(0x1e2f0, 0x1e2f9), new Range(0x1e2ff), new Range(0x1e800, 0x1e8c4), new Range(0x1e8c7, 0x1e8cf), new Range(0x1e900, 0x1e943), new Range(0x1e94b), new Range(0x1e950, 0x1e959), new Range(0x1e95e, 0x1e95f), new Range(0x1ec71, 0x1ecb4), new Range(0x1ed01, 0x1ed3d), new Range(0x1ee00, 0x1ee03), new Range(0x1ee05, 0x1ee1f), new Range(0x1ee21, 0x1ee22), new Range(0x1ee24), new Range(0x1ee27), new Range(0x1ee29, 0x1ee32), new Range(0x1ee34, 0x1ee37), new Range(0x1ee39), new Range(0x1ee3b), new Range(0x1ee42), new Range(0x1ee47), new Range(0x1ee49), new Range(0x1ee4b), new Range(0x1ee4d, 0x1ee4f), new Range(0x1ee51, 0x1ee52), new Range(0x1ee54), new Range(0x1ee57), new Range(0x1ee59), new Range(0x1ee5b), new Range(0x1ee5d), new Range(0x1ee5f), new Range(0x1ee61, 0x1ee62), new Range(0x1ee64), new Range(0x1ee67, 0x1ee6a), new Range(0x1ee6c, 0x1ee72), new Range(0x1ee74, 0x1ee77), new Range(0x1ee79, 0x1ee7c), new Range(0x1ee7e), new Range(0x1ee80, 0x1ee89), new Range(0x1ee8b, 0x1ee9b), new Range(0x1eea1, 0x1eea3), new Range(0x1eea5, 0x1eea9), new Range(0x1eeab, 0x1eebb), new Range(0x1eef0, 0x1eef1), new Range(0x1f000, 0x1f02b), new Range(0x1f030, 0x1f093), new Range(0x1f0a0, 0x1f0ae), new Range(0x1f0b1, 0x1f0bf), new Range(0x1f0c1, 0x1f0cf), new Range(0x1f0d1, 0x1f0f5), new Range(0x1f100, 0x1f1ad), new Range(0x1f1e6, 0x1f202), new Range(0x1f210, 0x1f23b), new Range(0x1f240, 0x1f248), new Range(0x1f250, 0x1f251), new Range(0x1f260, 0x1f265), new Range(0x1f300, 0x1f6d7), new Range(0x1f6e0, 0x1f6ec), new Range(0x1f6f0, 0x1f6fc), new Range(0x1f700, 0x1f773), new Range(0x1f780, 0x1f7d8), new Range(0x1f7e0, 0x1f7eb), new Range(0x1f800, 0x1f80b), new Range(0x1f810, 0x1f847), new Range(0x1f850, 0x1f859), new Range(0x1f860, 0x1f887), new Range(0x1f890, 0x1f8ad), new Range(0x1f8b0, 0x1f8b1), new Range(0x1f900, 0x1f978), new Range(0x1f97a, 0x1f9cb), new Range(0x1f9cd, 0x1fa53), new Range(0x1fa60, 0x1fa6d), new Range(0x1fa70, 0x1fa74), new Range(0x1fa78, 0x1fa7a), new Range(0x1fa80, 0x1fa86), new Range(0x1fa90, 0x1faa8), new Range(0x1fab0, 0x1fab6), new Range(0x1fac0, 0x1fac2), new Range(0x1fad0, 0x1fad6), new Range(0x1fb00, 0x1fb92), new Range(0x1fb94, 0x1fbca), new Range(0x1fbf0, 0x1fbf9), new Range(0x20000, 0x2a6dd), new Range(0x2a700, 0x2b734), new Range(0x2b740, 0x2b81d), new Range(0x2b820, 0x2cea1), new Range(0x2ceb0, 0x2ebe0), new Range(0x2f800, 0x2fa1d), new Range(0x30000, 0x3134a));
