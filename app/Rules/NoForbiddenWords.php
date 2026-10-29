<?php

namespace App\Rules;

use App\Services\ForbiddenWordFilter;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

/**
 * Treść nie może zawierać zakazanych słów z panelu admina. Komunikat nie zdradza,
 * które słowo zablokowało wiadomość - lista jest wewnętrzna.
 */
class NoForbiddenWords implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (is_string($value) && app(ForbiddenWordFilter::class)->contains($value)) {
            $fail(__('messenger.forbiddenWords'));
        }
    }
}
