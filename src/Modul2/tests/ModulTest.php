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

    public function testSymfonyDeprecationHelper()
    {
        $this->assertSame('weak', getenv('SYMFONY_DEPRECATIONS_HELPER'));
        $this->assertSame('modul2', getenv('SYMFONY_PHPUNIT_REMOVE'));
        $this->assertSame('5.7', getenv('SYMFONY_PHPUNIT_VERSION'));

        @trigger_error('Deprecation Error which should be ignored');
    }
}
