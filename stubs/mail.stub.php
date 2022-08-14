<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

final class ___LaravelStubs___class extends Mailable
{
    use Queueable;
    use SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     */
    public function build(): self
    {
        return $this->view('view.name');
    }
}
