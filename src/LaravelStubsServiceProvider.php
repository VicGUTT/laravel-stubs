<?php

declare(strict_types=1);

namespace VicGutt\LaravelStubs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use VicGutt\LaravelStubs\Commands\LaravelStubsCommand;

final class LaravelStubsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-stubs')
            ->hasCommand(LaravelStubsCommand::class);
    }
}
