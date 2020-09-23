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
    'namespace' => '\Admin\Http\Controllers',

    /* =======================
     * *
     * Load MIDDLEWARE CHO TRANG QUẢN TRỊ
     * *
     * ======================== */
    'middleware' => 'admin',

    /* =======================
     * *
     * QUẢN LÝ CÁC ĐƯỜNG DÂN THƯ MỤC
     * *
     * ======================== */
    'paths' => [
        'views' => base_path('admin/views'),
        'routes'=>base_path('admin/routes.php'),
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
