<?php

namespace App\Http\Middleware;

use Closure;

class ExistUser
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
        if (empty($request->user->id)) {
            return redirect('/');
        }

        return $next($request);
    }
}
