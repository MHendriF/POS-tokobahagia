<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class CheckLoginMiddleware
{
    public function handle($request, Closure $next)
    {
        if(Sentinel::check())
            return redirect('general');
        else
            return redirect('auth');
    }
}
