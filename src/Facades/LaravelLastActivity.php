<?php

namespace Rpungello\LaravelLastActivity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rpungello\LaravelLastActivity\LaravelLastActivity
 */
class LaravelLastActivity extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rpungello\LaravelLastActivity\LaravelLastActivity::class;
    }
}
