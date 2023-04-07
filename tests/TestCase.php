<?php

namespace Rpungello\LaravelLastActivity\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Rpungello\LaravelLastActivity\LaravelLastActivityServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelLastActivityServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        $migration = include __DIR__.'/../database/migrations/create_users_table.php';
        $migration->up();

        $migration = include __DIR__.'/../database/migrations/add_last_activity_to_users_table.php.stub';
        $migration->up();
    }
}
