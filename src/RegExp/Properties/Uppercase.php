<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UniLex\Tool\RegExp\Properties;

use Remorhaz\IntRangeSets\Range;
use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(new Range(0x41, 0x5a), new Range(0xc0, 0xd6), new Range(0xd8, 0xde), new Range(0x100), new Range(0x102), new Range(0x104), new Range(0x106), new Range(0x108), new Range(0x10a), new Range(0x10c), new Range(0x10e), new Range(0x110), new Range(0x112), new Range(0x114), new Range(0x116), new Range(0x118), new Range(0x11a), new Range(0x11c), new Range(0x11e), new Range(0x120), new Range(0x122), new Range(0x124), new Range(0x126), new Range(0x128), new Range(0x12a), new Range(0x12c), new Range(0x12e), new Range(0x130), new Range(0x132), new Range(0x134), new Range(0x136), new Range(0x139), new Range(0x13b), new Range(0x13d), new Range(0x13f), new Range(0x141), new Range(0x143), new Range(0x145), new Range(0x147), new Range(0x14a), new Range(0x14c), new Range(0x14e), new Range(0x150), new Range(0x152), new Range(0x154), new Range(0x156), new Range(0x158), new Range(0x15a), new Range(0x15c), new Range(0x15e), new Range(0x160), new Range(0x162), new Range(0x164), new Range(0x166), new Range(0x168), new Range(0x16a), new Range(0x16c), new Range(0x16e), new Range(0x170), new Range(0x172), new Range(0x174), new Range(0x176), new Range(0x178, 0x179), new Range(0x17b), new Range(0x17d), new Range(0x181, 0x182), new Range(0x184), new Range(0x186, 0x187), new Range(0x189, 0x18b), new Range(0x18e, 0x191), new Range(0x193, 0x194), new Range(0x196, 0x198), new Range(0x19c, 0x19d), new Range(0x19f, 0x1a0), new Range(0x1a2), new Range(0x1a4), new Range(0x1a6, 0x1a7), new Range(0x1a9), new Range(0x1ac), new Range(0x1ae, 0x1af), new Range(0x1b1, 0x1b3), new Range(0x1b5), new Range(0x1b7, 0x1b8), new Range(0x1bc), new Range(0x1c4), new Range(0x1c7), new Range(0x1ca), new Range(0x1cd), new Range(0x1cf), new Range(0x1d1), new Range(0x1d3), new Range(0x1d5), new Range(0x1d7), new Range(0x1d9), new Range(0x1db), new Range(0x1de), new Range(0x1e0), new Range(0x1e2), new Range(0x1e4), new Range(0x1e6), new Range(0x1e8), new Range(0x1ea), new Range(0x1ec), new Range(0x1ee), new Range(0x1f1), new Range(0x1f4), new Range(0x1f6, 0x1f8), new Range(0x1fa), new Range(0x1fc), new Range(0x1fe), new Range(0x200), new Range(0x202), new Range(0x204), new Range(0x206), new Range(0x208), new Range(0x20a), new Range(0x20c), new Range(0x20e), new Range(0x210), new Range(0x212), new Range(0x214), new Range(0x216), new Range(0x218), new Range(0x21a), new Range(0x21c), new Range(0x21e), new Range(0x220), new Range(0x222), new Range(0x224), new Range(0x226), new Range(0x228), new Range(0x22a), new Range(0x22c), new Range(0x22e), new Range(0x230), new Range(0x232), new Range(0x23a, 0x23b), new Range(0x23d, 0x23e), new Range(0x241), new Range(0x243, 0x246), new Range(0x248), new Range(0x24a), new Range(0x24c), new Range(0x24e), new Range(0x370), new Range(0x372), new Range(0x376), new Range(0x37f), new Range(0x386), new Range(0x388, 0x38a), new Range(0x38c), new Range(0x38e, 0x38f), new Range(0x391, 0x3a1), new Range(0x3a3, 0x3ab), new Range(0x3cf), new Range(0x3d2, 0x3d4), new Range(0x3d8), new Range(0x3da), new Range(0x3dc), new Range(0x3de), new Range(0x3e0), new Range(0x3e2), new Range(0x3e4), new Range(0x3e6), new Range(0x3e8), new Range(0x3ea), new Range(0x3ec), new Range(0x3ee), new Range(0x3f4), new Range(0x3f7), new Range(0x3f9, 0x3fa), new Range(0x3fd, 0x42f), new Range(0x460), new Range(0x462), new Range(0x464), new Range(0x466), new Range(0x468), new Range(0x46a), new Range(0x46c), new Range(0x46e), new Range(0x470), new Range(0x472), new Range(0x474), new Range(0x476), new Range(0x478), new Range(0x47a), new Range(0x47c), new Range(0x47e), new Range(0x480), new Range(0x48a), new Range(0x48c), new Range(0x48e), new Range(0x490), new Range(0x492), new Range(0x494), new Range(0x496), new Range(0x498), new Range(0x49a), new Range(0x49c), new Range(0x49e), new Range(0x4a0), new Range(0x4a2), new Range(0x4a4), new Range(0x4a6), new Range(0x4a8), new Range(0x4aa), new Range(0x4ac), new Range(0x4ae), new Range(0x4b0), new Range(0x4b2), new Range(0x4b4), new Range(0x4b6), new Range(0x4b8), new Range(0x4ba), new Range(0x4bc), new Range(0x4be), new Range(0x4c0, 0x4c1), new Range(0x4c3), new Range(0x4c5), new Range(0x4c7), new Range(0x4c9), new Range(0x4cb), new Range(0x4cd), new Range(0x4d0), new Range(0x4d2), new Range(0x4d4), new Range(0x4d6), new Range(0x4d8), new Range(0x4da), new Range(0x4dc), new Range(0x4de), new Range(0x4e0), new Range(0x4e2), new Range(0x4e4), new Range(0x4e6), new Range(0x4e8), new Range(0x4ea), new Range(0x4ec), new Range(0x4ee), new Range(0x4f0), new Range(0x4f2), new Range(0x4f4), new Range(0x4f6), new Range(0x4f8), new Range(0x4fa), new Range(0x4fc), new Range(0x4fe), new Range(0x500), new Range(0x502), new Range(0x504), new Range(0x506), new Range(0x508), new Range(0x50a), new Range(0x50c), new Range(0x50e), new Range(0x510), new Range(0x512), new Range(0x514), new Range(0x516), new Range(0x518), new Range(0x51a), new Range(0x51c), new Range(0x51e), new Range(0x520), new Range(0x522), new Range(0x524), new Range(0x526), new Range(0x528), new Range(0x52a), new Range(0x52c), new Range(0x52e), new Range(0x531, 0x556), new Range(0x10a0, 0x10c5), new Range(0x10c7), new Range(0x10cd), new Range(0x13a0, 0x13f5), new Range(0x1c90, 0x1cba), new Range(0x1cbd, 0x1cbf), new Range(0x1e00), new Range(0x1e02), new Range(0x1e04), new Range(0x1e06), new Range(0x1e08), new Range(0x1e0a), new Range(0x1e0c), new Range(0x1e0e), new Range(0x1e10), new Range(0x1e12), new Range(0x1e14), new Range(0x1e16), new Range(0x1e18), new Range(0x1e1a), new Range(0x1e1c), new Range(0x1e1e), new Range(0x1e20), new Range(0x1e22), new Range(0x1e24), new Range(0x1e26), new Range(0x1e28), new Range(0x1e2a), new Range(0x1e2c), new Range(0x1e2e), new Range(0x1e30), new Range(0x1e32), new Range(0x1e34), new Range(0x1e36), new Range(0x1e38), new Range(0x1e3a), new Range(0x1e3c), new Range(0x1e3e), new Range(0x1e40), new Range(0x1e42), new Range(0x1e44), new Range(0x1e46), new Range(0x1e48), new Range(0x1e4a), new Range(0x1e4c), new Range(0x1e4e), new Range(0x1e50), new Range(0x1e52), new Range(0x1e54), new Range(0x1e56), new Range(0x1e58), new Range(0x1e5a), new Range(0x1e5c), new Range(0x1e5e), new Range(0x1e60), new Range(0x1e62), new Range(0x1e64), new Range(0x1e66), new Range(0x1e68), new Range(0x1e6a), new Range(0x1e6c), new Range(0x1e6e), new Range(0x1e70), new Range(0x1e72), new Range(0x1e74), new Range(0x1e76), new Range(0x1e78), new Range(0x1e7a), new Range(0x1e7c), new Range(0x1e7e), new Range(0x1e80), new Range(0x1e82), new Range(0x1e84), new Range(0x1e86), new Range(0x1e88), new Range(0x1e8a), new Range(0x1e8c), new Range(0x1e8e), new Range(0x1e90), new Range(0x1e92), new Range(0x1e94), new Range(0x1e9e), new Range(0x1ea0), new Range(0x1ea2), new Range(0x1ea4), new Range(0x1ea6), new Range(0x1ea8), new Range(0x1eaa), new Range(0x1eac), new Range(0x1eae), new Range(0x1eb0), new Range(0x1eb2), new Range(0x1eb4), new Range(0x1eb6), new Range(0x1eb8), new Range(0x1eba), new Range(0x1ebc), new Range(0x1ebe), new Range(0x1ec0), new Range(0x1ec2), new Range(0x1ec4), new Range(0x1ec6), new Range(0x1ec8), new Range(0x1eca), new Range(0x1ecc), new Range(0x1ece), new Range(0x1ed0), new Range(0x1ed2), new Range(0x1ed4), new Range(0x1ed6), new Range(0x1ed8), new Range(0x1eda), new Range(0x1edc), new Range(0x1ede), new Range(0x1ee0), new Range(0x1ee2), new Range(0x1ee4), new Range(0x1ee6), new Range(0x1ee8), new Range(0x1eea), new Range(0x1eec), new Range(0x1eee), new Range(0x1ef0), new Range(0x1ef2), new Range(0x1ef4), new Range(0x1ef6), new Range(0x1ef8), new Range(0x1efa), new Range(0x1efc), new Range(0x1efe), new Range(0x1f08, 0x1f0f), new Range(0x1f18, 0x1f1d), new Range(0x1f28, 0x1f2f), new Range(0x1f38, 0x1f3f), new Range(0x1f48, 0x1f4d), new Range(0x1f59), new Range(0x1f5b), new Range(0x1f5d), new Range(0x1f5f), new Range(0x1f68, 0x1f6f), new Range(0x1fb8, 0x1fbb), new Range(0x1fc8, 0x1fcb), new Range(0x1fd8, 0x1fdb), new Range(0x1fe8, 0x1fec), new Range(0x1ff8, 0x1ffb), new Range(0x2102), new Range(0x2107), new Range(0x210b, 0x210d), new Range(0x2110, 0x2112), new Range(0x2115), new Range(0x2119, 0x211d), new Range(0x2124), new Range(0x2126), new Range(0x2128), new Range(0x212a, 0x212d), new Range(0x2130, 0x2133), new Range(0x213e, 0x213f), new Range(0x2145), new Range(0x2160, 0x216f), new Range(0x2183), new Range(0x24b6, 0x24cf), new Range(0x2c00, 0x2c2e), new Range(0x2c60), new Range(0x2c62, 0x2c64), new Range(0x2c67), new Range(0x2c69), new Range(0x2c6b), new Range(0x2c6d, 0x2c70), new Range(0x2c72), new Range(0x2c75), new Range(0x2c7e, 0x2c80), new Range(0x2c82), new Range(0x2c84), new Range(0x2c86), new Range(0x2c88), new Range(0x2c8a), new Range(0x2c8c), new Range(0x2c8e), new Range(0x2c90), new Range(0x2c92), new Range(0x2c94), new Range(0x2c96), new Range(0x2c98), new Range(0x2c9a), new Range(0x2c9c), new Range(0x2c9e), new Range(0x2ca0), new Range(0x2ca2), new Range(0x2ca4), new Range(0x2ca6), new Range(0x2ca8), new Range(0x2caa), new Range(0x2cac), new Range(0x2cae), new Range(0x2cb0), new Range(0x2cb2), new Range(0x2cb4), new Range(0x2cb6), new Range(0x2cb8), new Range(0x2cba), new Range(0x2cbc), new Range(0x2cbe), new Range(0x2cc0), new Range(0x2cc2), new Range(0x2cc4), new Range(0x2cc6), new Range(0x2cc8), new Range(0x2cca), new Range(0x2ccc), new Range(0x2cce), new Range(0x2cd0), new Range(0x2cd2), new Range(0x2cd4), new Range(0x2cd6), new Range(0x2cd8), new Range(0x2cda), new Range(0x2cdc), new Range(0x2cde), new Range(0x2ce0), new Range(0x2ce2), new Range(0x2ceb), new Range(0x2ced), new Range(0x2cf2), new Range(0xa640), new Range(0xa642), new Range(0xa644), new Range(0xa646), new Range(0xa648), new Range(0xa64a), new Range(0xa64c), new Range(0xa64e), new Range(0xa650), new Range(0xa652), new Range(0xa654), new Range(0xa656), new Range(0xa658), new Range(0xa65a), new Range(0xa65c), new Range(0xa65e), new Range(0xa660), new Range(0xa662), new Range(0xa664), new Range(0xa666), new Range(0xa668), new Range(0xa66a), new Range(0xa66c), new Range(0xa680), new Range(0xa682), new Range(0xa684), new Range(0xa686), new Range(0xa688), new Range(0xa68a), new Range(0xa68c), new Range(0xa68e), new Range(0xa690), new Range(0xa692), new Range(0xa694), new Range(0xa696), new Range(0xa698), new Range(0xa69a), new Range(0xa722), new Range(0xa724), new Range(0xa726), new Range(0xa728), new Range(0xa72a), new Range(0xa72c), new Range(0xa72e), new Range(0xa732), new Range(0xa734), new Range(0xa736), new Range(0xa738), new Range(0xa73a), new Range(0xa73c), new Range(0xa73e), new Range(0xa740), new Range(0xa742), new Range(0xa744), new Range(0xa746), new Range(0xa748), new Range(0xa74a), new Range(0xa74c), new Range(0xa74e), new Range(0xa750), new Range(0xa752), new Range(0xa754), new Range(0xa756), new Range(0xa758), new Range(0xa75a), new Range(0xa75c), new Range(0xa75e), new Range(0xa760), new Range(0xa762), new Range(0xa764), new Range(0xa766), new Range(0xa768), new Range(0xa76a), new Range(0xa76c), new Range(0xa76e), new Range(0xa779), new Range(0xa77b), new Range(0xa77d, 0xa77e), new Range(0xa780), new Range(0xa782), new Range(0xa784), new Range(0xa786), new Range(0xa78b), new Range(0xa78d), new Range(0xa790), new Range(0xa792), new Range(0xa796), new Range(0xa798), new Range(0xa79a), new Range(0xa79c), new Range(0xa79e), new Range(0xa7a0), new Range(0xa7a2), new Range(0xa7a4), new Range(0xa7a6), new Range(0xa7a8), new Range(0xa7aa, 0xa7ae), new Range(0xa7b0, 0xa7b4), new Range(0xa7b6), new Range(0xa7b8), new Range(0xa7ba), new Range(0xa7bc), new Range(0xa7be), new Range(0xa7c2), new Range(0xa7c4, 0xa7c7), new Range(0xa7c9), new Range(0xa7f5), new Range(0xff21, 0xff3a), new Range(0x10400, 0x10427), new Range(0x104b0, 0x104d3), new Range(0x10c80, 0x10cb2), new Range(0x118a0, 0x118bf), new Range(0x16e40, 0x16e5f), new Range(0x1d400, 0x1d419), new Range(0x1d434, 0x1d44d), new Range(0x1d468, 0x1d481), new Range(0x1d49c), new Range(0x1d49e, 0x1d49f), new Range(0x1d4a2), new Range(0x1d4a5, 0x1d4a6), new Range(0x1d4a9, 0x1d4ac), new Range(0x1d4ae, 0x1d4b5), new Range(0x1d4d0, 0x1d4e9), new Range(0x1d504, 0x1d505), new Range(0x1d507, 0x1d50a), new Range(0x1d50d, 0x1d514), new Range(0x1d516, 0x1d51c), new Range(0x1d538, 0x1d539), new Range(0x1d53b, 0x1d53e), new Range(0x1d540, 0x1d544), new Range(0x1d546), new Range(0x1d54a, 0x1d550), new Range(0x1d56c, 0x1d585), new Range(0x1d5a0, 0x1d5b9), new Range(0x1d5d4, 0x1d5ed), new Range(0x1d608, 0x1d621), new Range(0x1d63c, 0x1d655), new Range(0x1d670, 0x1d689), new Range(0x1d6a8, 0x1d6c0), new Range(0x1d6e2, 0x1d6fa), new Range(0x1d71c, 0x1d734), new Range(0x1d756, 0x1d76e), new Range(0x1d790, 0x1d7a8), new Range(0x1d7ca), new Range(0x1e900, 0x1e921), new Range(0x1f130, 0x1f149), new Range(0x1f150, 0x1f169), new Range(0x1f170, 0x1f189));
