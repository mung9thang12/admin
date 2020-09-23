<?php
namespace Mung9thang12\Admin\Http\Middleware;

use Closure;

class Admin
{
    function handle($request, Closure $next){
        if(auth()->guest()){
            return redirectToRouteAdmin('login',['redirect'=>getUrl()]);
        }
        return $next($request);
    }
}