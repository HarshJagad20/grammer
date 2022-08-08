<?php

namespace Harsh\WordGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class WordGeneratorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'harsh.word.generator';
    }
}
