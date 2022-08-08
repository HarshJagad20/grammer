<?php

namespace Harsh\WordGenerator;

use Illuminate\Support\Arr;

class WordGenerator
{
    public function all($count = null)
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

    public function nouns($count = null)
    {
        $count = $count ?? 5;

        $array    = config('words.nouns');
        $response = Arr::random($array, $count);

        return ['nouns'=>$response];
    }

    public function verbs($count = null)
    {
        $count = $count ?? 5;

        $array    = config('words.verbs');
        $response = Arr::random($array, $count);

        return ['verbs'=>$response];
    }

    public function adjectives($count = null)
    {
        $count = $count ?? 5;

        $array    = config('words.adjectives');
        $response = Arr::random($array, $count);

        return ['adjectives'=>$response];
    }
}
