<?php

namespace App\Modul1\Tests;

use PHPUnit\Framework\TestCase;

class ModulTest extends TestCase
{
    public function testEnv()
    {
        $this->assertSame('ENV_VAR_MODUL_1', getenv('ENV_VAR'));
    }

    public function testServer()
    {
        $this->assertSame('SERVER_VAR_MODUL_1', $_SERVER['SERVER_VAR']);
    }

    public function testBootstrapEnv()
    {
        $this->assertSame('BOOTSTRAP_ENV_VAR_MODUL_1', getenv('BOOTSTRAP_ENV_VAR'));
    }

    public function testBootstrapServer()
    {
        $this->assertSame('BOOTSTRAP_SERVER_VAR_MODUL_1', $_SERVER['BOOTSTRAP_SERVER_VAR']);
    }

    public function testSymfonyEnvs()
    {
        $this->assertSame('disabled', getenv('SYMFONY_DEPRECATIONS_HELPER'));
        $this->assertSame('modul1', getenv('SYMFONY_PHPUNIT_REMOVE'));
        $this->assertSame('6.5', getenv('SYMFONY_PHPUNIT_VERSION'));
    }
}
