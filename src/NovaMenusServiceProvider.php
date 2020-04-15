<?php

namespace Saaksin\NovaMenus;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class NovaMenusServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 패키지명을 nova로 하여 override 한다.
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nova');

        Nova::serving(function(ServingNova $event) {
            Nova::script('nova-menus', __DIR__.'/../dist/js/nova-menus.js');
        });
    }

}
