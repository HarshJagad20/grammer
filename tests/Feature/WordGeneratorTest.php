<?php

use Harsh\WordGenerator\WordGenerator;

test('get nouns', function () {
    $count         = 5;
    $response      = WordGenerator::nouns($count);
    $this->assertCount($count, $response['nouns']);
});

test('get verbs', function () {
    $count         = 5;
    $response      = WordGenerator::verbs($count);
    $this->assertCount($count, $response['verbs']);
});

test('get adjectives', function () {
    $count         = 5;
    $response      = WordGenerator::adjectives($count);
    $this->assertCount($count, $response['adjectives']);
});

test('get all words', function () {
    $count         = 5;
    $response      = WordGenerator::all($count);

    foreach ($response['all'] as $value) {
        $this->assertCount($count, $value);
    }
});
