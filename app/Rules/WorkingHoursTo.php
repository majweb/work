<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;

/**
 * Godziny pracy: "do" wcześniej niż "od" (np. 19:00-03:00) oznacza zmianę kończącą się
 * następnego dnia - dozwoloną tylko przy włączonej pracy nocnej (workNight = 1).
 * Takie same godziny są zawsze błędem.
 */
class WorkingHoursTo implements DataAwareRule, ValidationRule
{
    protected array $data = [];

    public function setData(array $data): static
    {
        $this->data = $data;

        return $this;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $from = $this->data['hoursFrom'] ?? null;

        if (! self::isTime($from) || ! self::isTime($value)) {
            return;
        }

        if ($value === $from) {
            $fail(__('workHours.sameHours'));
        } elseif ($value < $from && (int) ($this->data['workNight'] ?? 2) !== 1) {
            $fail(__('workHours.overnightNeedsNightWork'));
        }
    }

    /**
     * Reguły pól godzin pracy - wspólne dla formularza i kroków kreatora.
     */
    public static function rules(): array
    {
        return [
            'hoursFrom' => ['nullable', 'date_format:H:i'],
            'hoursTo' => ['nullable', 'date_format:H:i', new self],
        ];
    }

    private static function isTime(mixed $value): bool
    {
        return is_string($value) && preg_match('/^([01]\d|2[0-3]):[0-5]\d$/', $value) === 1;
    }
}
