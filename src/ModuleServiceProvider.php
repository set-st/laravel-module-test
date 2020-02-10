<?php

namespace Set\TestModule;

use Illuminate\Support\ServiceProvider;
use App;
use Blade;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        App::singleton('module', function (){
            return new \Set\TestModule\Module();
        });
    }
}