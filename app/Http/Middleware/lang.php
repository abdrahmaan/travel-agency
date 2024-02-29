<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (in_array($request->segments()[0], ["en","ar"])) {

            App::setLocale($request->segments()[0]);
            
        } else {
            abort(404); 
            App::setLocale("en");

        }

        // if (in_array($request->segments()[0], ["ar","en"])) {

        //     App::setLocale($request->segments()[0]);
            
        // } else {

        //     App::setLocale("en");
        //     abort(404);        

        // }
        return $next($request);
    }
}
