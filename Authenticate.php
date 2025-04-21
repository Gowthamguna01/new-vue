<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    public function handle($request, Closure $next): Response
    {

        if (!auth()->check()) {
            return redirect()->route('login.form');
        }

        return $next($request);
    }
}
