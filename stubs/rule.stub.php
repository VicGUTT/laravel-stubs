<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

use Illuminate\Contracts\Validation\___LaravelStubs___ruleType;

final class ___LaravelStubs___class implements ___LaravelStubs___ruleType
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     */
    public function passes($attribute, $value): bool
    {
        return false;
    }

    /**
     * Get the validation error message.
     *
     */
    public function message(): string
    {
        return 'The validation error message.';
    }
}
