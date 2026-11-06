<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        Http::fake([
            'hackatime.hackclub.com/*' => Http::response(['total_seconds' => 3720]),
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('1h 2m');
    }
}
