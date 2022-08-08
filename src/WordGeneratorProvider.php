<?php

namespace Harsh\WordGenerator;

use Illuminate\Support\ServiceProvider;

class WordGeneratorProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/words.php',
            'words'
        );
    }

    public function register()
    {
        $this->app->bind('harsh.word.generator', function () {
            return new \Harsh\WordGenerator\WordGenerator;
        });
    }
}
