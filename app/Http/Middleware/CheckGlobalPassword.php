<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckGlobalPassword
{
    public function handle(Request $request, Closure $next): Response
    {
        // check if user is authenticated
        if($request->session()->get('is_authenticated', false)) {
            return $next($request);
        } else {
            // not authenticated, redirect to login page
            return redirect('/login');
        }
    }
}
