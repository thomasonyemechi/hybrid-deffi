<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Wallet
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->wallet == null || strtolower(substr(auth()->user()->wallet, 0, 1)) != 't' || strlen(auth()->user()->wallet) < 20) {
            return redirect('/wallet')->with('error', 'Update your usdt walllet to continue');
        }

        return $next($request);

    }
}
