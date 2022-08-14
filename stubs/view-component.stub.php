<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

use Closure;
use Illuminate\View\View;
use Illuminate\View\Component;

final class ___LaravelStubs___class extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return ___LaravelStubs___view;
    }
}
