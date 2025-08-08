<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectLegacyView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedPatterns = [
            'api/*',
            'graphql',
            'admin',
            'admin/*',
            'sanctum/csrf-cookie',
            '_debugbar/*'
        ];

        //if(!$request->is($allowedPatterns)) return redirect('https://www.farmashopdior.com.py');
        return $next($request);
    }
}
