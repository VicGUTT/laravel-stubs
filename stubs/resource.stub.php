<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

use JsonSerializable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;

final class ___LaravelStubs___class extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function toArray($request): array|Arrayable|JsonSerializable
    {
        return parent::toArray($request);
    }
}
