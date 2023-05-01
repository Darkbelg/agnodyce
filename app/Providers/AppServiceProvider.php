<?php

namespace App\Providers;

use App\Service\Youtube\Connection;
use App\Service\YoutubeAPI;
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
        $this->app->singleton(Connection::class, function () {
            return new Connection();
        });

        $this->app->singleton(YoutubeAPI::class, function ($app) {
            return new YoutubeAPI();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
