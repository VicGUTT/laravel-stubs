<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

// {{ factoryImport }}
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;

final class ___LaravelStubs___class extends Model
{
    // {{ factory }}

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    protected $guarded = [
        'id',
    ];

    /* Relationships
    ------------------------------------------------*/

    /**
     * ...
     */
    public function relationName(): void
    {
        //
    }

    /* Scopes
    ------------------------------------------------*/

    /**
     * ...
     *
     * @param Builder<static> $query
     * @return Builder<static>
     */
    public function scopeName(Builder $query): Builder
    {
        return $query;
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'int',
        ];
    }

    /* Accessors & Mutators
    ------------------------------------------------*/

    /**
     * ...
     */
    protected function attributeName(): Attribute
    {
        return Attribute::make(
            get: static fn (string $value): string => ucfirst($value),
            set: static fn (string $value): string => mb_strtolower($value),
        )->shouldCache();
    }

    /* Methods
    ------------------------------------------------*/

    /**
     * ...
     */
    private function methodName(): void
    {
        //
    }
}
