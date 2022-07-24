<?php

namespace App\Http\Middleware;

use Closure;

class CustomerCheck
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
        $user = \Auth::user();

        if (is_object($user) && $user->type == 'customer') {
            return $next($request);
        }

        return redirect('/');
    }
}
