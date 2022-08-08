<?php

namespace Harsh\Grammer\Facades;

use Illuminate\Support\Facades\Facade;

class GrammerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'harsh.grammer';
    }
}
