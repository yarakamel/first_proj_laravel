<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    /// هندلي الريكوست اللي جاي هل مسموح الك بالريسبونس ولا لا
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
}
