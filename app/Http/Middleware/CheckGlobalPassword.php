<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckGlobalPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the session already has the correct password
        if (!$request->session()->has('global_access')) {
            //log::info('Access Denied');
            $login="We don't have session";
            //dd($login);
            //return view('/login');
            response()->view('login');
        }

        // Check if the correct password is provided in the query string
        $inputPassword = $request->input('global_password');
        $globalPassword = env('GLOBAL_PASSWORD');

        if ($inputPassword && $inputPassword === $globalPassword) {
            // Store in the session that the user has provided the correct password
            $request->session()->put('global_access', true);
            $text="Sucess";
            dd($text);
            dd($request);
            return $next($request);
        }

        // If no or incorrect password, return a 401 Unauthorized response or redirect
        // return response('Unauthorized', 401);'
        // 
        return redirect('/login')->with('error', 'Global password is required.');
        $text="All Failed";
        // dd($text);
    }
}