<?php

namespace App\Http\Middleware;

use Closure;

class CheckforBadWords
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(preg_match('(hate|idiot|stupid|Hate|Idiot|Stupid)', $request->content) === 1) {
            return response(view('nba.teams.badWords'));
        }
        return $next($request);
    }
}
