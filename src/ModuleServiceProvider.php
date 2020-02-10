<?php

namespace Set\TestModule;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton(Module::class, function ($app) {
            return new Module();
        });
    }
}