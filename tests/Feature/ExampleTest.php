<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserCanBeRegisteredTest extends TestCase
{
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->post('/api/users', [
            'name' => 'Cristian Guzmán',
            'email' => 'cristian@test.com',
            'password' => '58506484'
        ]);

        dd($response);

        $response->assertStatus(200);
    }
}
