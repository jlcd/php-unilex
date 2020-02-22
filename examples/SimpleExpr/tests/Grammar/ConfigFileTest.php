<?php

namespace Remorhaz\UniLex\Example\Test\SimpleExpr\Grammar;

use PHPUnit\Framework\TestCase;
use Remorhaz\UniLex\Example\SimpleExpr\Grammar\ConfigFile;

class ConfigFileTest extends TestCase
{

    public function testGetPath_Called_ReturnsStringgEndsWithConfigFileName(): void
    {
        $actualValue = ConfigFile::getPath();
        self::assertStringEndsWith(DIRECTORY_SEPARATOR . "Config.php", $actualValue);
    }
}