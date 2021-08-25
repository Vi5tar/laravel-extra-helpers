<?php

namespace Vi5tar\LaravelExtraHelpers\Tests;

class ArrayDiffRecursiveTest extends TestCase
{
    /** @test */
    public function it_returns_the_difference_of_a_one_dimmensional_array()
    {
        $firstArray = [
            'one',
            'two',
            'three',
        ];

        $secondArray = [
            'two',
            'three',
        ];

        $this->assertTrue(['one'] === array_diff_recursive($firstArray, $secondArray));
    }

    /** @test */
    public function it_returns_the_difference_of_a_two_dimensional_array()
    {
        $firstArray = [
            'one',
            'two',
            'three',
            'four' => [
                'one',
                'two'
            ]
        ];

        $secondArray = [
            'two',
            'three',
            'four' => [
                'two',
            ]
        ];

        $expectedArray = [
            'one',
            'four' => ['one']
        ];

        $this->assertTrue($expectedArray === array_diff_recursive($firstArray, $secondArray));
    }
}