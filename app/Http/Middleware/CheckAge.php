<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
//        if ($request->age < 10){
//            echo 'I am '.$request->age . ' years old, I am not an adult'.'<br />';
//        }
//        echo 'i am '.$request->age . 'years old, i am adult <br>';
//        dd($request->age);
        return $next($request);
    }
}
