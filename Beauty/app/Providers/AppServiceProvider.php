<?php

namespace App\Providers;

use App\Observers\GroupObserver;
use Illuminate\Support\ServiceProvider;
use App\Group;
use  Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Group::observe(GroupObserver::class);
        Schema::defaultStringLength(191);
    }
}