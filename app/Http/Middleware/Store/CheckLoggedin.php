<?php

namespace App\Http\Middleware\Store;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckLoggedin
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
        if (!Session::has('email')):
            return redirect('login');
        endif;
        return $next($request);
    }
}
