<?php

namespace Harsh\WordGenerator\Tests\Unit;

use Harsh\WordGenerator\Tests\TestCase;
use Harsh\WordGenerator\WordGenerator;

class DemoTest extends TestCase
{
    /** @test */
    public function get_nouns()
    {
        $count     = 5;
        $response  = WordGenerator::nouns($count);
        $this->assertCount($count, $response['nouns']);
    }

    /** @test */
    public function get_verbs()
    {
        $count     = 5;
        $response  = WordGenerator::verbs($count);
        $this->assertCount($count, $response['verbs']);
    }

    /** @test */
    public function get_adjectives()
    {
        $count     = 5;
        $response  = WordGenerator::adjectives($count);
        $this->assertCount($count, $response['adjectives']);
    }

    /** @test */
    public function get_all_words()
    {
        $count     = 5;
        $response  = WordGenerator::all($count);

        foreach ($response['all'] as $value) {
            $this->assertCount($count, $value);
        }
    }
}
