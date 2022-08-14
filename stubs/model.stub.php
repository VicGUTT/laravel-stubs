<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property null|Carbon $created_at
 * @property null|Carbon $updated_at
 */
final class ___LaravelStubs___class extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int',
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
     */
    public function scopeName(Builder $query): Builder
    {
        return $query;
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
