<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //Import Schema
use Illuminate\Support\Facades\Config;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        //Load dynamic settings
        if (Schema::hasTable('settings')) {
            foreach (Setting::all() as $setting) {
                Config::set('settings.' . $setting->key, $setting->value);
            }
        }
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