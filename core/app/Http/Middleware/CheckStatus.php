<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckStatus
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
        if (Auth::check()) {
            // dd('hi');
            $user = Auth()->user();
            if ($user->status  && $user->ev  && $user->sv  && $user->tv) {
                return $next($request);
            } else {

                return $next($request);
                // redirect()->route('user.authorization');
            }
        }
        abort(403);
    }
}
