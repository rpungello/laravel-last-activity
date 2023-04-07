<?php

namespace Rpungello\LaravelLastActivity;

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
            ->hasConfigFile('last-activity')
            ->hasMigration('add_last_activity_to_users_table');
    }
}
