<?php

namespace App\Modul2\Tests;

use PHPUnit\Framework\TestCase;

class ModulTest extends TestCase
{
    public function testEnv()
    {
        $this->assertSame('ENV_VAR_MODUL_2', getenv('ENV_VAR'));
    }

    public function testServer()
    {
        $this->assertSame('SERVER_VAR_MODUL_2', $_SERVER['SERVER_VAR']);
    }

    public function testIni()
    {
        $this->assertSame('9', ini_get('precision'));
    }

    public function testBootstrapEnv()
    {
        $this->assertSame('BOOTSTRAP_ENV_VAR_MODUL_2', getenv('BOOTSTRAP_ENV_VAR'));

        sleep(1); // To Check if the output is streamed

        $this->assertTrue(true);
    }

    public function testBootstrapServer()
    {
        $this->assertSame('BOOTSTRAP_SERVER_VAR_MODUL_2', $_SERVER['BOOTSTRAP_SERVER_VAR']);
    }

    public function testBootstrapIni()
    {
        $this->assertSame('11', ini_get('serialize_precision'));
    }

    public function testSymfonyDeprecationHelper()
    {
        $this->assertSame('weak', getenv('SYMFONY_DEPRECATIONS_HELPER'));
        $this->assertSame('phpspec/prophecy', getenv('SYMFONY_PHPUNIT_REMOVE'));
        $this->assertSame('5.7', getenv('SYMFONY_PHPUNIT_VERSION'));

        @trigger_error('Deprecation Error which should be ignored');
    }
}
