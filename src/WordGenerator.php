<?php

namespace Harsh\WordGenerator;

use Illuminate\Support\Arr;

class WordGenerator
{
    public static function all($count = null)
    {
        $count = $count ?? 5;

        return [
            'all' => [
                'nouns'      => Arr::random(config('words.nouns'), $count),
                'verbs'      => Arr::random(config('words.verbs'), $count),
                'adjectives' => Arr::random(config('words.adjectives'), $count),
            ]
        ];
    }

    public static function nouns($count = null)
    {
        $count = $count ?? 5;

        $array    = config('words.nouns');
        $response = Arr::random($array, $count);

        return ['nouns'=>$response];
    }

    public static function verbs($count = null)
    {
        $count = $count ?? 5;

        $array    = config('words.verbs');
        $response = Arr::random($array, $count);

        return ['verbs'=>$response];
    }

    public static function adjectives($count = null)
    {
        $count = $count ?? 5;

        $array    = config('words.adjectives');
        $response = Arr::random($array, $count);

        return ['adjectives'=>$response];
    }
}
