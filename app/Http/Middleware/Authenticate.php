<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
//use Illuminate\Contracts\Session\Session;
//use Illuminate\Support\Facades\DB;
//use App\User;

class Authenticate extends Middleware
{
   // protected $session;
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {

        if (! $request->expectsJson()) {
            return route('login');
        }
       
    }
}
