<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UniLex\Tool\RegExp\Properties;

use Remorhaz\IntRangeSets\Range;
use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(new Range(0x30, 0x39), new Range(0xb2, 0xb3), new Range(0xb9), new Range(0xbc, 0xbe), new Range(0x660, 0x669), new Range(0x6f0, 0x6f9), new Range(0x7c0, 0x7c9), new Range(0x966, 0x96f), new Range(0x9e6, 0x9ef), new Range(0x9f4, 0x9f9), new Range(0xa66, 0xa6f), new Range(0xae6, 0xaef), new Range(0xb66, 0xb6f), new Range(0xb72, 0xb77), new Range(0xbe6, 0xbf2), new Range(0xc66, 0xc6f), new Range(0xc78, 0xc7e), new Range(0xce6, 0xcef), new Range(0xd58, 0xd5e), new Range(0xd66, 0xd78), new Range(0xde6, 0xdef), new Range(0xe50, 0xe59), new Range(0xed0, 0xed9), new Range(0xf20, 0xf33), new Range(0x1040, 0x1049), new Range(0x1090, 0x1099), new Range(0x1369, 0x137c), new Range(0x16ee, 0x16f0), new Range(0x17e0, 0x17e9), new Range(0x17f0, 0x17f9), new Range(0x1810, 0x1819), new Range(0x1946, 0x194f), new Range(0x19d0, 0x19da), new Range(0x1a80, 0x1a89), new Range(0x1a90, 0x1a99), new Range(0x1b50, 0x1b59), new Range(0x1bb0, 0x1bb9), new Range(0x1c40, 0x1c49), new Range(0x1c50, 0x1c59), new Range(0x2070), new Range(0x2074, 0x2079), new Range(0x2080, 0x2089), new Range(0x2150, 0x2182), new Range(0x2185, 0x2189), new Range(0x2460, 0x249b), new Range(0x24ea, 0x24ff), new Range(0x2776, 0x2793), new Range(0x2cfd), new Range(0x3007), new Range(0x3021, 0x3029), new Range(0x3038, 0x303a), new Range(0x3192, 0x3195), new Range(0x3220, 0x3229), new Range(0x3248, 0x324f), new Range(0x3251, 0x325f), new Range(0x3280, 0x3289), new Range(0x32b1, 0x32bf), new Range(0xa620, 0xa629), new Range(0xa6e6, 0xa6ef), new Range(0xa830, 0xa835), new Range(0xa8d0, 0xa8d9), new Range(0xa900, 0xa909), new Range(0xa9d0, 0xa9d9), new Range(0xa9f0, 0xa9f9), new Range(0xaa50, 0xaa59), new Range(0xff10, 0xff19), new Range(0x10107, 0x10133), new Range(0x10140, 0x10178), new Range(0x1018a, 0x1018b), new Range(0x102e1, 0x102fb), new Range(0x10320, 0x10323), new Range(0x10341), new Range(0x1034a), new Range(0x103d1, 0x103d5), new Range(0x104a0, 0x104a9), new Range(0x10858, 0x1085f), new Range(0x10879, 0x1087f), new Range(0x108a7, 0x108af), new Range(0x108fb, 0x108ff), new Range(0x10916, 0x1091b), new Range(0x109bc, 0x109bd), new Range(0x109c0, 0x109cf), new Range(0x109d2, 0x109ff), new Range(0x10a40, 0x10a48), new Range(0x10a7d, 0x10a7e), new Range(0x10a9d, 0x10a9f), new Range(0x10aeb, 0x10aef), new Range(0x10b58, 0x10b5f), new Range(0x10b78, 0x10b7f), new Range(0x10ba9, 0x10baf), new Range(0x10cfa, 0x10cff), new Range(0x10d30, 0x10d39), new Range(0x10e60, 0x10e7e), new Range(0x10f1d, 0x10f26), new Range(0x10f51, 0x10f54), new Range(0x10fc5, 0x10fcb), new Range(0x11052, 0x1106f), new Range(0x110f0, 0x110f9), new Range(0x11136, 0x1113f), new Range(0x111d0, 0x111d9), new Range(0x111e1, 0x111f4), new Range(0x112f0, 0x112f9), new Range(0x11450, 0x11459), new Range(0x114d0, 0x114d9), new Range(0x11650, 0x11659), new Range(0x116c0, 0x116c9), new Range(0x11730, 0x1173b), new Range(0x118e0, 0x118f2), new Range(0x11950, 0x11959), new Range(0x11c50, 0x11c6c), new Range(0x11d50, 0x11d59), new Range(0x11da0, 0x11da9), new Range(0x11fc0, 0x11fd4), new Range(0x12400, 0x1246e), new Range(0x16a60, 0x16a69), new Range(0x16b50, 0x16b59), new Range(0x16b5b, 0x16b61), new Range(0x16e80, 0x16e96), new Range(0x1d2e0, 0x1d2f3), new Range(0x1d360, 0x1d378), new Range(0x1d7ce, 0x1d7ff), new Range(0x1e140, 0x1e149), new Range(0x1e2f0, 0x1e2f9), new Range(0x1e8c7, 0x1e8cf), new Range(0x1e950, 0x1e959), new Range(0x1ec71, 0x1ecab), new Range(0x1ecad, 0x1ecaf), new Range(0x1ecb1, 0x1ecb4), new Range(0x1ed01, 0x1ed2d), new Range(0x1ed2f, 0x1ed3d), new Range(0x1f100, 0x1f10c));
