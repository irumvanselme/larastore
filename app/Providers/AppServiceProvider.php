<?php

namespace App\Providers;

use App\View\Components\Forms\Input;
use App\View\Components\Forms\Select;
use App\View\Components\Forms\TextArea;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::component("form-control", Input::class);
        Blade::component("form-textarea", TextArea::class);
        Blade::component("form-select", Select::class);
    }
}
