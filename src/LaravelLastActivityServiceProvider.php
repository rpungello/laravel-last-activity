<?php

namespace Rpungello\LaravelLastActivity;

use Rpungello\LaravelLastActivity\Commands\LaravelLastActivityCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelLastActivityServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-last-activity')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-last-activity_table')
            ->hasCommand(LaravelLastActivityCommand::class);
    }
}
