<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Redirect;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfOldUrl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentPath = '/' . ltrim($request->getRequestUri(), '/');
        $redirect = Redirect::where('old_url', $currentPath)->first();

        if ($redirect) {
            return redirect($redirect->new_url, 301);
        }
        return $next($request);
    }
}
