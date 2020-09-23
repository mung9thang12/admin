<?php
return [
    /* =======================
     * *
     * TIỀN TỐ TRANG QUẢN TRỊ
     * *
     *======================== */
    'prefix' => 'admincp',

    /* ======================
     * *
     * NAMESPACE THƯ MỤC CHỨA CONTROLLER
     * *
     * ======================= */
    'namespace' => '\Mung9thang12\Admin\Http\Controllers',

    /* ======================
     * *
     * NAME ROUTE
     * *
     * ======================= */
    'name' => 'admin.',

    /* =======================
     * *
     * Load MIDDLEWARE CHO TRANG QUẢN TRỊ
     * *
     * ======================== */
    'middlewares' => [
        'admin'=>\Mung9thang12\Admin\Http\Middleware\Admin::class,
    ],

    /* =======================
     * *
     * QUẢN LÝ CÁC ĐƯỜNG DÂN THƯ MỤC
     * *
     * ======================== */
    'paths' => [
        'views' => base_path('flatform/admin/views'),
        'routes'=>base_path('flatform/admin/routes_admin.php'),
        'root_path'=>'admin'
    ],

    
   /* =======================
   * *
   * TÊN VIEW TRANG QUẢN TRỊ
   * bắt buộc có dấu hai chấm ( : ) ở cuối
   * *
   * ======================== */
    'views'=>[
        'name'=>'admin'
    ]
];
