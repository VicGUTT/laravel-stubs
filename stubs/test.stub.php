<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

// keep: use Tests\TestCase;
// keep: use Illuminate\Foundation\Testing\WithFaker;
// keep: use Illuminate\Foundation\Testing\RefreshDatabase;

final class ___LaravelStubs___class extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
