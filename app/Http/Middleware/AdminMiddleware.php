<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Session;

class AdminMiddleware
{

    public function handle($request, Closure $next)
    {
        if(Sentinel::check() && Sentinel::getUser()->roles
            ()->first()->slug == 'admin')
            return $next($request);
        else
            Session::flash('error', 'Access not permitted. Your are not authorized to perform this operation!');
            //return redirect('/home');
            return redirect()->back();
    }
}
