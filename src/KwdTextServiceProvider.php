<?php

namespace Tonymans33\KwdText;

use Illuminate\Support\ServiceProvider;
use Tonymans33\KwdText\Services\KwdTextService;

class KwdTextServiceProvider extends ServiceProvider
{

    public function boot()
    {
       //
    }
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Bind the service to the service container
        $this->app->singleton('kwdtext', function () {
            return new KwdTextService();
        });
    }

}
