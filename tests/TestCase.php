<?php

declare(strict_types=1);

namespace VicGutt\LaravelStubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use VicGutt\LaravelStubs\LaravelStubsServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelStubsServiceProvider::class,
        ];
    }
}
