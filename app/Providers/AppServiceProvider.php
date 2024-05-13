<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('application_settings')) {
            $menu = new Menu;
            $menuList = $menu->tree();

            Paginator::useBootstrap();

            $general        = gs();
            View::share(['general' => $general, 'menulist'=> $menuList]);
        }
    }
}
