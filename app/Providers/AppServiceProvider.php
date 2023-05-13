<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\UserComposer;
use App\Http\View\Composers\IconComposer;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', UserComposer::class);
        View()->composer('*', IconComposer::class);
    }

    public function register()
    {
        //
    }
}
