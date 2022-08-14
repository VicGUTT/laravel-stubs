<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;

final class ___LaravelStubs___class implements CastsInboundAttributes
{
    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     */
    public function set($model, string $key, $value, array $attributes): mixed
    {
        return $value;
    }
}
