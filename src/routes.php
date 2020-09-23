<?php

/* =====================
* * * * * *
* * *
* CẤU HÌNH TRANG QUẢN TRỊ
* * *
* * * * * *
======================== */
Route::prefix(config('admin.prefix'))
->namespace(config('admin.namespace'))
->middleware('web')
->name(config('admin.name'))
->group(function(){

    /* ================
    * Trang đăng nhập
    =================== */
    Route::middleware('guest')
    ->group(function(){

        // Form trang đăng nhập
        Route::get('login',function (){
            return view(VIEW_ADMIN.'login');
        })->name('login');

        //trang xử lý đăng nhập
        Route::post('login','AuthController@login')->name('login');
    });

    /* * =================
    * * * *
    * TRANG QUẢN TRỊ
    * * * *
    * * ================ */
   Route::middleware('admin')->group(function(){

        /* ======TRANG CHỦ QUẢN TRỊ ======== */
        Route::get('/','AdminController@index')->name('index');
   });

});