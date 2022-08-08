<?php

namespace Harsh\Grammer;

use Illuminate\Support\Arr;

class Grammer
{
    public function getWords($type, $count)
    {
        $array    = config('words.' . $type);
        $response = Arr::random($array, $count);

        return $response;
    }
}
