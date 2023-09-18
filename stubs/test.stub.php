<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

// keep: use Tests\TestCase;
// keep: use PHPUnit\Framework\Attributes\Test;
// keep: use Illuminate\Foundation\Testing\WithFaker;
// keep: use Illuminate\Foundation\Testing\RefreshDatabase;

final class ___LaravelStubs___class extends TestCase
{
    #[Test]
    public function it_works(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
