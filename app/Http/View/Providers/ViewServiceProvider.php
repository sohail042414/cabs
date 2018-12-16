<?php

namespace App\Http\View\Providers;

use App\Models\Tarrif;
use App\Models\Service;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            'profile',
            'App\Http\View\Composers\ProfileComposer'
        );

        // Using Closure based composers...
        View::composer('common.section_tarrif', function ($view) {
            $tarrifs = Tarrif::paginate(4);
            $view->with('tarrifs', $tarrifs);
        });

                // Using Closure based composers...
        View::composer('common.section_services', function ($view) {
            $services = Service::paginate(4);
            $view->with('services', $services);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}