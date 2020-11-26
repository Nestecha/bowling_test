<?php

use App\Bowling;
use PHPUnit\Framework\TestCase;

class BowlingTest extends TestCase
{
    // Write your tests here

    /** @test */
    function it_scores_a_perfect_game()
    {
        $this->markTestSkipped("This test shows the expected API to be implemented by the Bowling class. Enable it when code is ready.");

        $game = new Bowling();

        foreach (range(1, 12) as $roll) {
            $game->roll(10);
        }

        $this->assertSame(300, $game->score());
    }

    /** @test */
    public function fake_test()
    {
        new Bowling();
        $this->assertTrue(true);
    }
}