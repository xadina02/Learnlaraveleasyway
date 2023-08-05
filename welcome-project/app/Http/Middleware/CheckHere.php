<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckHere
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param String $year
     */
    public function handle(Request $request, Closure $next, $year): Response
    {
        // dd($request->all());
        if($request->has('score') && ($request->score == $year))
        {
            return $next($request);
        }
        return redirect()->route('home');
    }
}
