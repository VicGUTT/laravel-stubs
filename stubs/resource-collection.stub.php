<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

use JsonSerializable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class ___LaravelStubs___class extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function toArray($request): array|Arrayable|JsonSerializable
    {
        return parent::toArray($request);
    }
}
