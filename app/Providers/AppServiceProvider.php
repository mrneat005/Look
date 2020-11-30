<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//this import will be used to get rid of that errror
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Lets write that line to get rid of that ERR
        Schema::defaultStringLength(191);
        // 2mb minimul image just added this here php artisan migrate
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
