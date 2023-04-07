<?php

namespace Rpungello\LaravelLastActivity\Http\Middleware;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LastActivity
{
    public function handle(Request $request, \Closure $next): Response
    {
        if (($user = $request->user()) instanceof User) {
            $user->touch(config('last-activity.column_name'));
        }

        return $next($request);
    }
}
