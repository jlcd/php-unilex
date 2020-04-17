<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UniLex\Tool\RegExp\Properties;

use Remorhaz\IntRangeSets\Range;
use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(new Range(0x41, 0x5a), new Range(0x61, 0x7a), new Range(0xaa), new Range(0xb5), new Range(0xba), new Range(0xc0, 0xd6), new Range(0xd8, 0xf6), new Range(0xf8, 0x2c1), new Range(0x2c6, 0x2d1), new Range(0x2e0, 0x2e4), new Range(0x2ec), new Range(0x2ee), new Range(0x370, 0x374), new Range(0x376, 0x377), new Range(0x37b, 0x37d), new Range(0x37f), new Range(0x386), new Range(0x388, 0x38a), new Range(0x38c), new Range(0x38e, 0x3a1), new Range(0x3a3, 0x3f5), new Range(0x3f7, 0x481), new Range(0x48a, 0x52f), new Range(0x531, 0x556), new Range(0x559), new Range(0x560, 0x588), new Range(0x5d0, 0x5ea), new Range(0x5ef, 0x5f2), new Range(0x620, 0x64a), new Range(0x66e, 0x66f), new Range(0x671, 0x6d3), new Range(0x6d5), new Range(0x6e5, 0x6e6), new Range(0x6ee, 0x6ef), new Range(0x6fa, 0x6fc), new Range(0x6ff), new Range(0x710), new Range(0x712, 0x72f), new Range(0x74d, 0x7a5), new Range(0x7b1), new Range(0x7ca, 0x7ea), new Range(0x7f4, 0x7f5), new Range(0x7fa), new Range(0x800, 0x815), new Range(0x81a), new Range(0x824), new Range(0x828), new Range(0x840, 0x858), new Range(0x860, 0x86a), new Range(0x8a0, 0x8b4), new Range(0x8b6, 0x8c7), new Range(0x904, 0x939), new Range(0x93d), new Range(0x950), new Range(0x958, 0x961), new Range(0x971, 0x980), new Range(0x985, 0x98c), new Range(0x98f, 0x990), new Range(0x993, 0x9a8), new Range(0x9aa, 0x9b0), new Range(0x9b2), new Range(0x9b6, 0x9b9), new Range(0x9bd), new Range(0x9ce), new Range(0x9dc, 0x9dd), new Range(0x9df, 0x9e1), new Range(0x9f0, 0x9f1), new Range(0x9fc), new Range(0xa05, 0xa0a), new Range(0xa0f, 0xa10), new Range(0xa13, 0xa28), new Range(0xa2a, 0xa30), new Range(0xa32, 0xa33), new Range(0xa35, 0xa36), new Range(0xa38, 0xa39), new Range(0xa59, 0xa5c), new Range(0xa5e), new Range(0xa72, 0xa74), new Range(0xa85, 0xa8d), new Range(0xa8f, 0xa91), new Range(0xa93, 0xaa8), new Range(0xaaa, 0xab0), new Range(0xab2, 0xab3), new Range(0xab5, 0xab9), new Range(0xabd), new Range(0xad0), new Range(0xae0, 0xae1), new Range(0xaf9), new Range(0xb05, 0xb0c), new Range(0xb0f, 0xb10), new Range(0xb13, 0xb28), new Range(0xb2a, 0xb30), new Range(0xb32, 0xb33), new Range(0xb35, 0xb39), new Range(0xb3d), new Range(0xb5c, 0xb5d), new Range(0xb5f, 0xb61), new Range(0xb71), new Range(0xb83), new Range(0xb85, 0xb8a), new Range(0xb8e, 0xb90), new Range(0xb92, 0xb95), new Range(0xb99, 0xb9a), new Range(0xb9c), new Range(0xb9e, 0xb9f), new Range(0xba3, 0xba4), new Range(0xba8, 0xbaa), new Range(0xbae, 0xbb9), new Range(0xbd0), new Range(0xc05, 0xc0c), new Range(0xc0e, 0xc10), new Range(0xc12, 0xc28), new Range(0xc2a, 0xc39), new Range(0xc3d), new Range(0xc58, 0xc5a), new Range(0xc60, 0xc61), new Range(0xc80), new Range(0xc85, 0xc8c), new Range(0xc8e, 0xc90), new Range(0xc92, 0xca8), new Range(0xcaa, 0xcb3), new Range(0xcb5, 0xcb9), new Range(0xcbd), new Range(0xcde), new Range(0xce0, 0xce1), new Range(0xcf1, 0xcf2), new Range(0xd04, 0xd0c), new Range(0xd0e, 0xd10), new Range(0xd12, 0xd3a), new Range(0xd3d), new Range(0xd4e), new Range(0xd54, 0xd56), new Range(0xd5f, 0xd61), new Range(0xd7a, 0xd7f), new Range(0xd85, 0xd96), new Range(0xd9a, 0xdb1), new Range(0xdb3, 0xdbb), new Range(0xdbd), new Range(0xdc0, 0xdc6), new Range(0xe01, 0xe30), new Range(0xe32), new Range(0xe40, 0xe46), new Range(0xe81, 0xe82), new Range(0xe84), new Range(0xe86, 0xe8a), new Range(0xe8c, 0xea3), new Range(0xea5), new Range(0xea7, 0xeb0), new Range(0xeb2), new Range(0xebd), new Range(0xec0, 0xec4), new Range(0xec6), new Range(0xedc, 0xedf), new Range(0xf00), new Range(0xf40, 0xf47), new Range(0xf49, 0xf6c), new Range(0xf88, 0xf8c), new Range(0x1000, 0x102a), new Range(0x103f), new Range(0x1050, 0x1055), new Range(0x105a, 0x105d), new Range(0x1061), new Range(0x1065, 0x1066), new Range(0x106e, 0x1070), new Range(0x1075, 0x1081), new Range(0x108e), new Range(0x10a0, 0x10c5), new Range(0x10c7), new Range(0x10cd), new Range(0x10d0, 0x10fa), new Range(0x10fc, 0x1248), new Range(0x124a, 0x124d), new Range(0x1250, 0x1256), new Range(0x1258), new Range(0x125a, 0x125d), new Range(0x1260, 0x1288), new Range(0x128a, 0x128d), new Range(0x1290, 0x12b0), new Range(0x12b2, 0x12b5), new Range(0x12b8, 0x12be), new Range(0x12c0), new Range(0x12c2, 0x12c5), new Range(0x12c8, 0x12d6), new Range(0x12d8, 0x1310), new Range(0x1312, 0x1315), new Range(0x1318, 0x135a), new Range(0x1380, 0x138f), new Range(0x13a0, 0x13f5), new Range(0x13f8, 0x13fd), new Range(0x1401, 0x166c), new Range(0x166f, 0x167f), new Range(0x1681, 0x169a), new Range(0x16a0, 0x16ea), new Range(0x16ee, 0x16f8), new Range(0x1700, 0x170c), new Range(0x170e, 0x1711), new Range(0x1720, 0x1731), new Range(0x1740, 0x1751), new Range(0x1760, 0x176c), new Range(0x176e, 0x1770), new Range(0x1780, 0x17b3), new Range(0x17d7), new Range(0x17dc), new Range(0x1820, 0x1878), new Range(0x1880, 0x18a8), new Range(0x18aa), new Range(0x18b0, 0x18f5), new Range(0x1900, 0x191e), new Range(0x1950, 0x196d), new Range(0x1970, 0x1974), new Range(0x1980, 0x19ab), new Range(0x19b0, 0x19c9), new Range(0x1a00, 0x1a16), new Range(0x1a20, 0x1a54), new Range(0x1aa7), new Range(0x1b05, 0x1b33), new Range(0x1b45, 0x1b4b), new Range(0x1b83, 0x1ba0), new Range(0x1bae, 0x1baf), new Range(0x1bba, 0x1be5), new Range(0x1c00, 0x1c23), new Range(0x1c4d, 0x1c4f), new Range(0x1c5a, 0x1c7d), new Range(0x1c80, 0x1c88), new Range(0x1c90, 0x1cba), new Range(0x1cbd, 0x1cbf), new Range(0x1ce9, 0x1cec), new Range(0x1cee, 0x1cf3), new Range(0x1cf5, 0x1cf6), new Range(0x1cfa), new Range(0x1d00, 0x1dbf), new Range(0x1e00, 0x1f15), new Range(0x1f18, 0x1f1d), new Range(0x1f20, 0x1f45), new Range(0x1f48, 0x1f4d), new Range(0x1f50, 0x1f57), new Range(0x1f59), new Range(0x1f5b), new Range(0x1f5d), new Range(0x1f5f, 0x1f7d), new Range(0x1f80, 0x1fb4), new Range(0x1fb6, 0x1fbc), new Range(0x1fbe), new Range(0x1fc2, 0x1fc4), new Range(0x1fc6, 0x1fcc), new Range(0x1fd0, 0x1fd3), new Range(0x1fd6, 0x1fdb), new Range(0x1fe0, 0x1fec), new Range(0x1ff2, 0x1ff4), new Range(0x1ff6, 0x1ffc), new Range(0x2071), new Range(0x207f), new Range(0x2090, 0x209c), new Range(0x2102), new Range(0x2107), new Range(0x210a, 0x2113), new Range(0x2115), new Range(0x2118, 0x211d), new Range(0x2124), new Range(0x2126), new Range(0x2128), new Range(0x212a, 0x2139), new Range(0x213c, 0x213f), new Range(0x2145, 0x2149), new Range(0x214e), new Range(0x2160, 0x2188), new Range(0x2c00, 0x2c2e), new Range(0x2c30, 0x2c5e), new Range(0x2c60, 0x2ce4), new Range(0x2ceb, 0x2cee), new Range(0x2cf2, 0x2cf3), new Range(0x2d00, 0x2d25), new Range(0x2d27), new Range(0x2d2d), new Range(0x2d30, 0x2d67), new Range(0x2d6f), new Range(0x2d80, 0x2d96), new Range(0x2da0, 0x2da6), new Range(0x2da8, 0x2dae), new Range(0x2db0, 0x2db6), new Range(0x2db8, 0x2dbe), new Range(0x2dc0, 0x2dc6), new Range(0x2dc8, 0x2dce), new Range(0x2dd0, 0x2dd6), new Range(0x2dd8, 0x2dde), new Range(0x3005, 0x3007), new Range(0x3021, 0x3029), new Range(0x3031, 0x3035), new Range(0x3038, 0x303c), new Range(0x3041, 0x3096), new Range(0x309d, 0x309f), new Range(0x30a1, 0x30fa), new Range(0x30fc, 0x30ff), new Range(0x3105, 0x312f), new Range(0x3131, 0x318e), new Range(0x31a0, 0x31bf), new Range(0x31f0, 0x31ff), new Range(0x3400, 0x4dbf), new Range(0x4e00, 0x9ffc), new Range(0xa000, 0xa48c), new Range(0xa4d0, 0xa4fd), new Range(0xa500, 0xa60c), new Range(0xa610, 0xa61f), new Range(0xa62a, 0xa62b), new Range(0xa640, 0xa66e), new Range(0xa67f, 0xa69d), new Range(0xa6a0, 0xa6ef), new Range(0xa717, 0xa71f), new Range(0xa722, 0xa788), new Range(0xa78b, 0xa7bf), new Range(0xa7c2, 0xa7ca), new Range(0xa7f5, 0xa801), new Range(0xa803, 0xa805), new Range(0xa807, 0xa80a), new Range(0xa80c, 0xa822), new Range(0xa840, 0xa873), new Range(0xa882, 0xa8b3), new Range(0xa8f2, 0xa8f7), new Range(0xa8fb), new Range(0xa8fd, 0xa8fe), new Range(0xa90a, 0xa925), new Range(0xa930, 0xa946), new Range(0xa960, 0xa97c), new Range(0xa984, 0xa9b2), new Range(0xa9cf), new Range(0xa9e0, 0xa9e4), new Range(0xa9e6, 0xa9ef), new Range(0xa9fa, 0xa9fe), new Range(0xaa00, 0xaa28), new Range(0xaa40, 0xaa42), new Range(0xaa44, 0xaa4b), new Range(0xaa60, 0xaa76), new Range(0xaa7a), new Range(0xaa7e, 0xaaaf), new Range(0xaab1), new Range(0xaab5, 0xaab6), new Range(0xaab9, 0xaabd), new Range(0xaac0), new Range(0xaac2), new Range(0xaadb, 0xaadd), new Range(0xaae0, 0xaaea), new Range(0xaaf2, 0xaaf4), new Range(0xab01, 0xab06), new Range(0xab09, 0xab0e), new Range(0xab11, 0xab16), new Range(0xab20, 0xab26), new Range(0xab28, 0xab2e), new Range(0xab30, 0xab5a), new Range(0xab5c, 0xab69), new Range(0xab70, 0xabe2), new Range(0xac00, 0xd7a3), new Range(0xd7b0, 0xd7c6), new Range(0xd7cb, 0xd7fb), new Range(0xf900, 0xfa6d), new Range(0xfa70, 0xfad9), new Range(0xfb00, 0xfb06), new Range(0xfb13, 0xfb17), new Range(0xfb1d), new Range(0xfb1f, 0xfb28), new Range(0xfb2a, 0xfb36), new Range(0xfb38, 0xfb3c), new Range(0xfb3e), new Range(0xfb40, 0xfb41), new Range(0xfb43, 0xfb44), new Range(0xfb46, 0xfbb1), new Range(0xfbd3, 0xfc5d), new Range(0xfc64, 0xfd3d), new Range(0xfd50, 0xfd8f), new Range(0xfd92, 0xfdc7), new Range(0xfdf0, 0xfdf9), new Range(0xfe71), new Range(0xfe73), new Range(0xfe77), new Range(0xfe79), new Range(0xfe7b), new Range(0xfe7d), new Range(0xfe7f, 0xfefc), new Range(0xff21, 0xff3a), new Range(0xff41, 0xff5a), new Range(0xff66, 0xff9d), new Range(0xffa0, 0xffbe), new Range(0xffc2, 0xffc7), new Range(0xffca, 0xffcf), new Range(0xffd2, 0xffd7), new Range(0xffda, 0xffdc), new Range(0x10000, 0x1000b), new Range(0x1000d, 0x10026), new Range(0x10028, 0x1003a), new Range(0x1003c, 0x1003d), new Range(0x1003f, 0x1004d), new Range(0x10050, 0x1005d), new Range(0x10080, 0x100fa), new Range(0x10140, 0x10174), new Range(0x10280, 0x1029c), new Range(0x102a0, 0x102d0), new Range(0x10300, 0x1031f), new Range(0x1032d, 0x1034a), new Range(0x10350, 0x10375), new Range(0x10380, 0x1039d), new Range(0x103a0, 0x103c3), new Range(0x103c8, 0x103cf), new Range(0x103d1, 0x103d5), new Range(0x10400, 0x1049d), new Range(0x104b0, 0x104d3), new Range(0x104d8, 0x104fb), new Range(0x10500, 0x10527), new Range(0x10530, 0x10563), new Range(0x10600, 0x10736), new Range(0x10740, 0x10755), new Range(0x10760, 0x10767), new Range(0x10800, 0x10805), new Range(0x10808), new Range(0x1080a, 0x10835), new Range(0x10837, 0x10838), new Range(0x1083c), new Range(0x1083f, 0x10855), new Range(0x10860, 0x10876), new Range(0x10880, 0x1089e), new Range(0x108e0, 0x108f2), new Range(0x108f4, 0x108f5), new Range(0x10900, 0x10915), new Range(0x10920, 0x10939), new Range(0x10980, 0x109b7), new Range(0x109be, 0x109bf), new Range(0x10a00), new Range(0x10a10, 0x10a13), new Range(0x10a15, 0x10a17), new Range(0x10a19, 0x10a35), new Range(0x10a60, 0x10a7c), new Range(0x10a80, 0x10a9c), new Range(0x10ac0, 0x10ac7), new Range(0x10ac9, 0x10ae4), new Range(0x10b00, 0x10b35), new Range(0x10b40, 0x10b55), new Range(0x10b60, 0x10b72), new Range(0x10b80, 0x10b91), new Range(0x10c00, 0x10c48), new Range(0x10c80, 0x10cb2), new Range(0x10cc0, 0x10cf2), new Range(0x10d00, 0x10d23), new Range(0x10e80, 0x10ea9), new Range(0x10eb0, 0x10eb1), new Range(0x10f00, 0x10f1c), new Range(0x10f27), new Range(0x10f30, 0x10f45), new Range(0x10fb0, 0x10fc4), new Range(0x10fe0, 0x10ff6), new Range(0x11003, 0x11037), new Range(0x11083, 0x110af), new Range(0x110d0, 0x110e8), new Range(0x11103, 0x11126), new Range(0x11144), new Range(0x11147), new Range(0x11150, 0x11172), new Range(0x11176), new Range(0x11183, 0x111b2), new Range(0x111c1, 0x111c4), new Range(0x111da), new Range(0x111dc), new Range(0x11200, 0x11211), new Range(0x11213, 0x1122b), new Range(0x11280, 0x11286), new Range(0x11288), new Range(0x1128a, 0x1128d), new Range(0x1128f, 0x1129d), new Range(0x1129f, 0x112a8), new Range(0x112b0, 0x112de), new Range(0x11305, 0x1130c), new Range(0x1130f, 0x11310), new Range(0x11313, 0x11328), new Range(0x1132a, 0x11330), new Range(0x11332, 0x11333), new Range(0x11335, 0x11339), new Range(0x1133d), new Range(0x11350), new Range(0x1135d, 0x11361), new Range(0x11400, 0x11434), new Range(0x11447, 0x1144a), new Range(0x1145f, 0x11461), new Range(0x11480, 0x114af), new Range(0x114c4, 0x114c5), new Range(0x114c7), new Range(0x11580, 0x115ae), new Range(0x115d8, 0x115db), new Range(0x11600, 0x1162f), new Range(0x11644), new Range(0x11680, 0x116aa), new Range(0x116b8), new Range(0x11700, 0x1171a), new Range(0x11800, 0x1182b), new Range(0x118a0, 0x118df), new Range(0x118ff, 0x11906), new Range(0x11909), new Range(0x1190c, 0x11913), new Range(0x11915, 0x11916), new Range(0x11918, 0x1192f), new Range(0x1193f), new Range(0x11941), new Range(0x119a0, 0x119a7), new Range(0x119aa, 0x119d0), new Range(0x119e1), new Range(0x119e3), new Range(0x11a00), new Range(0x11a0b, 0x11a32), new Range(0x11a3a), new Range(0x11a50), new Range(0x11a5c, 0x11a89), new Range(0x11a9d), new Range(0x11ac0, 0x11af8), new Range(0x11c00, 0x11c08), new Range(0x11c0a, 0x11c2e), new Range(0x11c40), new Range(0x11c72, 0x11c8f), new Range(0x11d00, 0x11d06), new Range(0x11d08, 0x11d09), new Range(0x11d0b, 0x11d30), new Range(0x11d46), new Range(0x11d60, 0x11d65), new Range(0x11d67, 0x11d68), new Range(0x11d6a, 0x11d89), new Range(0x11d98), new Range(0x11ee0, 0x11ef2), new Range(0x11fb0), new Range(0x12000, 0x12399), new Range(0x12400, 0x1246e), new Range(0x12480, 0x12543), new Range(0x13000, 0x1342e), new Range(0x14400, 0x14646), new Range(0x16800, 0x16a38), new Range(0x16a40, 0x16a5e), new Range(0x16ad0, 0x16aed), new Range(0x16b00, 0x16b2f), new Range(0x16b40, 0x16b43), new Range(0x16b63, 0x16b77), new Range(0x16b7d, 0x16b8f), new Range(0x16e40, 0x16e7f), new Range(0x16f00, 0x16f4a), new Range(0x16f50), new Range(0x16f93, 0x16f9f), new Range(0x16fe0, 0x16fe1), new Range(0x16fe3), new Range(0x17000, 0x187f7), new Range(0x18800, 0x18cd5), new Range(0x18d00, 0x18d08), new Range(0x1b000, 0x1b11e), new Range(0x1b150, 0x1b152), new Range(0x1b164, 0x1b167), new Range(0x1b170, 0x1b2fb), new Range(0x1bc00, 0x1bc6a), new Range(0x1bc70, 0x1bc7c), new Range(0x1bc80, 0x1bc88), new Range(0x1bc90, 0x1bc99), new Range(0x1d400, 0x1d454), new Range(0x1d456, 0x1d49c), new Range(0x1d49e, 0x1d49f), new Range(0x1d4a2), new Range(0x1d4a5, 0x1d4a6), new Range(0x1d4a9, 0x1d4ac), new Range(0x1d4ae, 0x1d4b9), new Range(0x1d4bb), new Range(0x1d4bd, 0x1d4c3), new Range(0x1d4c5, 0x1d505), new Range(0x1d507, 0x1d50a), new Range(0x1d50d, 0x1d514), new Range(0x1d516, 0x1d51c), new Range(0x1d51e, 0x1d539), new Range(0x1d53b, 0x1d53e), new Range(0x1d540, 0x1d544), new Range(0x1d546), new Range(0x1d54a, 0x1d550), new Range(0x1d552, 0x1d6a5), new Range(0x1d6a8, 0x1d6c0), new Range(0x1d6c2, 0x1d6da), new Range(0x1d6dc, 0x1d6fa), new Range(0x1d6fc, 0x1d714), new Range(0x1d716, 0x1d734), new Range(0x1d736, 0x1d74e), new Range(0x1d750, 0x1d76e), new Range(0x1d770, 0x1d788), new Range(0x1d78a, 0x1d7a8), new Range(0x1d7aa, 0x1d7c2), new Range(0x1d7c4, 0x1d7cb), new Range(0x1e100, 0x1e12c), new Range(0x1e137, 0x1e13d), new Range(0x1e14e), new Range(0x1e2c0, 0x1e2eb), new Range(0x1e800, 0x1e8c4), new Range(0x1e900, 0x1e943), new Range(0x1e94b), new Range(0x1ee00, 0x1ee03), new Range(0x1ee05, 0x1ee1f), new Range(0x1ee21, 0x1ee22), new Range(0x1ee24), new Range(0x1ee27), new Range(0x1ee29, 0x1ee32), new Range(0x1ee34, 0x1ee37), new Range(0x1ee39), new Range(0x1ee3b), new Range(0x1ee42), new Range(0x1ee47), new Range(0x1ee49), new Range(0x1ee4b), new Range(0x1ee4d, 0x1ee4f), new Range(0x1ee51, 0x1ee52), new Range(0x1ee54), new Range(0x1ee57), new Range(0x1ee59), new Range(0x1ee5b), new Range(0x1ee5d), new Range(0x1ee5f), new Range(0x1ee61, 0x1ee62), new Range(0x1ee64), new Range(0x1ee67, 0x1ee6a), new Range(0x1ee6c, 0x1ee72), new Range(0x1ee74, 0x1ee77), new Range(0x1ee79, 0x1ee7c), new Range(0x1ee7e), new Range(0x1ee80, 0x1ee89), new Range(0x1ee8b, 0x1ee9b), new Range(0x1eea1, 0x1eea3), new Range(0x1eea5, 0x1eea9), new Range(0x1eeab, 0x1eebb), new Range(0x20000, 0x2a6dd), new Range(0x2a700, 0x2b734), new Range(0x2b740, 0x2b81d), new Range(0x2b820, 0x2cea1), new Range(0x2ceb0, 0x2ebe0), new Range(0x2f800, 0x2fa1d), new Range(0x30000, 0x3134a));
