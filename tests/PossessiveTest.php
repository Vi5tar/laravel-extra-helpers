<?php

namespace Vi5tar\LaravelExtraHelpers\Tests;

class PossessiveTest extends TestCase
{
    /** @test */
    public function it_makes_a_string_ending_in_s_possessive()
    {
        $this->assertTrue('Travis\'' === possessive(('Travis')));
    }

    /** @test */
    public function it_makes_a_string_NOT_ending_in_s_possessive()
    {
        $this->assertTrue('Thor\'s' === possessive(('Thor')));
    }
}