<?php
namespace Mung9thang12\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function register()
    {
        /* ================
         *
         * ĐĂNG KÝ CÁC HÀM VÀ HẰNG HỖ TRỢ
         * LOAD CÁC FILE CONFIG
         *
         * ================ */
        $this->registerHelpers();
        $this->registerMiddleware();
    }


    public function boot()
    {
        /* =================
         * LOAD VIEW FROM
         * ================== */
        if(!file_exists($path_to_views=config('admin.paths.views'))){
            $path_to_views=__DIR__.'/../views';
        }
        $this->loadViewsFrom($path_to_views, config('admin.views.name'));

        /* =================
         * LOAD ROUTE FROM
         * ================== */
        if (!file_exists(config('admin.paths.routes'))) {
            $path_routes = __DIR__ . '/../routes.php';
        }
        $this->loadRoutesFrom($path_routes);


        // Chạy publish console
        if ($this->app->runningInConsole()) {
            $this->loadPublishes();
        }

        
        /* =================
         * LOAD COMMAND
         * ================== */
        $this->commands([
            \Mung9thang12\Admin\Console\MakeController::class,
        ]);
    }




    /* ================
    * =====REGISTER HELPERS
    * =============== */
    final private function registerMiddleware(){
        foreach(config('admin.middlewares') as $key => $middleware){
            app('router')->aliasMiddleware($key,$middleware);
        }
    }




    /* ================
    * =====REGISTER HELPERS
    * =============== */
    final private function registerHelpers()
    {
        // load config
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../config/' => config_path()], 'Config Admin');
        }
        //merge config
        foreach (glob( __DIR__ . '/../config/*.php') as $config) {
            $this->mergeConfigFrom($config, getConfigName($config));
        }

        // load helpers
        if (file_exists($file_helpers = __DIR__ . '/../helpers.php')) {
            require_once $file_helpers;
        }
    }
    



    /* ================
    * =====LOAD PUBLISHES
    * =============== */
    final private function loadPublishes(){
        //router
        $this->publishes([ __DIR__ . '/../routes.php' => config('admin.paths.routes')], 'Route Admin');
    }
}
