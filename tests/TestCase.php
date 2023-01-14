<?php

declare(strict_types=1);

namespace VicGutt\LaravelStubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use VicGutt\LaravelStubs\LaravelStubsServiceProvider;

abstract class TestCase extends Orchestra
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            LaravelStubsServiceProvider::class,
        ];
    }
}
