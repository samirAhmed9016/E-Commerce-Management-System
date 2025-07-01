<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\View\View as my_view;
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
        //global variable in all project ==> '*'
        // view::composer('*', function (my_view   $view) {
        //     return $view->with(['myVar' => 'message from myVAr']);
        // });

        view::composer(['index', 'example.index'], function (my_view   $view) {
            return $view->with(['myVar' => 'message from myVAr']);
        });

        // Blade::if('checkValue', function (string $value) {
        //     return config('app.timezone') === $value;
        // });
    }
}
