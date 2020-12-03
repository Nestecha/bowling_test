<?php

use App\Bowling;
use PHPUnit\Framework\TestCase;

class BowlingTest extends TestCase
{
    /** @test */
    public function it_scores_zero_when_it_rolls_zero_pin()
    {
        $game = new Bowling();

        foreach (range(1, 10) as $roll) {
            $game->roll(0);
        }

        $this->assertSame(0, $game->score());
    }

    /** @test */
    public function fake_test()
    {
        new Bowling();
        $this->assertTrue(true);
    }
}