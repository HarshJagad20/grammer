<?php

namespace Harsh\Grammer;

use Illuminate\Support\ServiceProvider;

class GrammerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__ . '/routes/api.php');

        $this->mergeConfigFrom(
            __DIR__ . '/config/words.php',
            'words'
        );
    }

    public function register()
    {
        $this->app->bind('harsh.grammer', function () {
            return new \Harsh\Grammer\Grammer;
        });
    }
}
