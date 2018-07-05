<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CalculatorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSumSuccess()
    {
        $response = $this->json('POST', '/api/v1/test-result', ['numbers' => [1,2,6,10,8]]);

        $response
            ->assertStatus(200)
            ->assertExactJson([
                'total' => 27,
            ]);
    }

    public function testSumInvalidKey()
    {
        $response = $this->json('POST', '/api/v1/test-result', ['number' => [1,2,6,10,8]]);

        $response
            ->assertStatus(422)
            ->assertJsonFragment([
                'message' => 'The given data was invalid.',
                'numbers' => [
                    "The numbers field is required."
                ]
            ]);
    }

    public function testSumInvalidArray()
    {
        $response = $this->json('POST', '/api/v1/test-result', ['numbers' => [1,2,6,"a",10,8]]);

        $response
            ->assertStatus(422)
            ->assertJsonFragment([
                'numbers.3' => ["The numbers.3 must be an integer."]
            ]);
    }
}
