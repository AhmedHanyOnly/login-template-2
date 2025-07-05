<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestAuth
{

    public function handle(Request $request, Closure $next): Response
    {
        if (1 == 1) {
            return redirect('/');
        }
        return $next($request);
    }
}
