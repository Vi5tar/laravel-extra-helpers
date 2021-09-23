<?php

namespace Vi5tar\LaravelExtraHelpers\Tests;

class SortByStringLengthTest extends TestCase
{
    /** @test */
    public function it_sorts_an_array_of_strings_shortest_to_longets()
    {
        $unsorted = [
            'a',
            'bbbb',
            'cc',
            'ddd',
        ];

        $expected = [
            'a',
            'cc',
            'ddd',
            'bbbb'
        ];

        $this->assertEquals($expected, sort_by_string_length($unsorted));
    }
}