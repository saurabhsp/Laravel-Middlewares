<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo '<pre>';
        // print_r($request->age);
        // echo " age ahe";
        if($request->age<18){
            die("You can not visit this section");
        }
        else{
            return $next($request);
        }
    }
}
