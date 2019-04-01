<?php

namespace Yiche\Region;

use Illuminate\Support\ServiceProvider;

class RegionSeviceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 加载路由
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->commands([
            RegionInstall::class
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('ycRegion', function () {
            return new Region();
        });
    }

    public function provides()
    {
        return [Region::class, 'ycRegion'];
    }
}
