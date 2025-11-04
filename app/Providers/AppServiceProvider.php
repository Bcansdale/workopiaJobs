<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route; // Global constraint

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
//        Route::pattern('id', '[0-9]+'); // Global constraint for routes
//        Route::pattern('comment', '[a-zA-Z]'); // Global constraint for routes
    }
}
