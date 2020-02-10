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
        $this->app->singleton(\Set\TestModule\Module::class, function ($app) {
            return new \Set\TestModule\Module();
        });
    }
}