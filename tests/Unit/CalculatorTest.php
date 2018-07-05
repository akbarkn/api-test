<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSum1()
    {
        $this->assertSame(Calculator::Sum([1,2,6,10,8]), 27);
    }

    public function testSum2()
    {
        $this->assertSame(Calculator::Sum([1,2,3,4]), 10);
    }

    public function testSum3()
    {
        $this->assertSame(Calculator::Sum([5,6,7,8]), 26);
    }
}
