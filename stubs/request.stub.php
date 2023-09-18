<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\ValidationRule;

final class ___LaravelStubs___class extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, Rule|ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
