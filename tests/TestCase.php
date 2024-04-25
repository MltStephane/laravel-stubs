<?php

namespace MltStephane\Stubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use MltStephane\Stubs\StubsServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
