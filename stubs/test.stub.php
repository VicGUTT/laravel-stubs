<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

use Tests\TestCase;

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
