<?php
/* =================
* KHAI BÁO HẰNG SỐ
===================*/
if(!defined('VIEW_ADMIN')){
    define('VIEW_ADMIN',config('admin.views.name').'::');
}




/* =================
* KHAI BÁO HÀM
===================*/
if(!function_exists('cproute')){
    function cproute($name, $parameters = [], $absolute = true)
    {
        return app('url')->route(config('admin.name').$name, $parameters, $absolute);
    }
}
if(!function_exists('redirectToRouteAdmin')){
    function redirectToRouteAdmin($route, $parameters = [], $status = 302, $headers = []){
        return redirect()->route(config('admin.name').$route, $parameters, $status, $headers);
    }
}