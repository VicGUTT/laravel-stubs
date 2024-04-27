<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

use Illuminate\Console\Command;

final class ___LaravelStubs___class extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = '{{ command }}';

    /**
     * The console command description.
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        return self::SUCCESS;
    }
}
