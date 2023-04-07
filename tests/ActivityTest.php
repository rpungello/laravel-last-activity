<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Rpungello\LaravelLastActivity\Http\Middleware\LastActivity;

it('can track activity', function () {
    DB::table('users')->insert([
        'name' => 'John Doe',
        'email' => 'john@example.com',
    ]);
    expect(DB::table('users')->value('last_active_at'))->toBeNull();

    $request = Request::create('/');
    $request->setUserResolver(function () {
        return User::first();
    });
    $middleware = new LastActivity();
    $middleware->handle($request, function () {
        return new Response();
    });

    expect(DB::table('users')->value('last_active_at'))->toMatch('/\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}/');
});
