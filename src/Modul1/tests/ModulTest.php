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

    public function testIni()
    {
        $this->assertSame('7', ini_get('precision'));
    }

    public function testBootstrapEnv()
    {
        $this->assertSame('BOOTSTRAP_ENV_VAR_MODUL_1', getenv('BOOTSTRAP_ENV_VAR'));

        sleep(1); // To Check if the output is streamed

        $this->assertTrue(true);
    }

    public function testBootstrapServer()
    {
        $this->assertSame('BOOTSTRAP_SERVER_VAR_MODUL_1', $_SERVER['BOOTSTRAP_SERVER_VAR']);
    }

    public function testBootstrapIni()
    {
        $this->assertSame('15', ini_get('serialize_precision'));
    }

    public function testSymfonyEnvs()
    {
        $this->assertSame('disabled', getenv('SYMFONY_DEPRECATIONS_HELPER'));
        $this->assertSame('symfony/yaml', getenv('SYMFONY_PHPUNIT_REMOVE'));
        $this->assertSame('6.5', getenv('SYMFONY_PHPUNIT_VERSION'));
        exec((defined('PHP_BINARY') ? PHP_BINARY : 'php') . ' ' . $_SERVER['SCRIPT_NAME'] . ' --version', $output);
        $this->assertContains('PHPUnit 6.5', $output[0]);

        @trigger_error('Deprecation Error which should be ignored');
    }
}
