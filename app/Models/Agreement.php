<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Agreement extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = ['title', 'description', 'help_text', 'type', 'is_active', 'parent_id', 'is_required', 'subscribes_newsletter'];

    public array $translatable = ['title', 'description', 'help_text'];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'help_text' => 'array',
        'is_active' => 'boolean',
        'is_required' => 'boolean',
        'subscribes_newsletter' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::saving(function (Agreement $agreement) {
            // Jeśli to podzgoda, help_text musi być null
            if ($agreement->parent_id) {
                $agreement->attributes['help_text'] = null;

                return;
            }

            // Pobranie surowych atrybutów, aby ominąć mutatory Spatie/Eloquent przy sprawdzeniu
            $helpText = $agreement->attributes['help_text'] ?? null;

            if (is_string($helpText)) {
                $decoded = json_decode($helpText, true);
                if (is_array($decoded)) {
                    $filtered = array_filter($decoded, fn ($value) => ! is_null($value) && trim((string) $value) !== '');
                    $agreement->attributes['help_text'] = empty($filtered) ? null : json_encode($filtered);
                } elseif (trim($helpText) === '' || $helpText === 'null' || $helpText === '[]' || $helpText === '{}' || $helpText === '{"":null}') {
                    $agreement->attributes['help_text'] = null;
                }
            } elseif (is_array($helpText)) {
                $filtered = array_filter($helpText, fn ($value) => ! is_null($value) && trim((string) $value) !== '');
                if (empty($filtered)) {
                    $agreement->attributes['help_text'] = null;
                } else {
                    $agreement->attributes['help_text'] = json_encode($filtered);
                }
            }
        });
    }

    protected function helpText(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                if (is_array($value)) {
                    $filtered = array_filter($value, fn ($v) => ! is_null($v) && trim((string) $v) !== '');

                    return empty($filtered) ? null : $filtered;
                }

                if (is_string($value)) {
                    $trimmed = trim($value);
                    if ($trimmed === '' || $trimmed === 'null' || $trimmed === '[]' || $trimmed === '{}') {
                        return null;
                    }
                    // Jeśli to JSON string (np. z formularza Inertia), spróbujmy go odkodować i przefiltrować
                    $decoded = json_decode($trimmed, true);
                    if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                        $filtered = array_filter($decoded, fn ($v) => ! is_null($v) && trim((string) $v) !== '');

                        return empty($filtered) ? null : $filtered;
                    }

                    return $trimmed;
                }

                return $value === null ? null : $value;
            },
        );
    }

    public function children()
    {
        return $this->hasMany(Agreement::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Agreement::class, 'parent_id');
    }

    /**
     * Domyślnie zapis do newslettera na zgodzie marketingowej rejestracji pracownika:
     * "Chcę otrzymywać informacje marketingowe od work4you.global" -> podpunkt "na mój adres e-mail"
     * (bez podpunktu - sama zgoda); zgoda marketingowa partnerów pomijana. Zwraca ID oznaczonych zgód.
     *
     * @return array<int, int>
     */
    public static function markWorkerMarketingConsentAsNewsletter(): array
    {
        $agreements = self::where('type', 'worker_registration')->get();
        $text = fn (self $a) => mb_strtolower(($a->getTranslation('title', 'pl', false) ?: '').' '.($a->getTranslation('description', 'pl', false) ?: ''));

        $ids = [];
        // Bez zgody marketingowej partnerów ("...informacje marketingowe od partnerów work4you.global")
        $isOwnMarketing = fn (self $a) => str_contains($text($a), 'informacje marketingowe') && ! str_contains($text($a), 'partner');

        foreach ($agreements->filter(fn (self $a) => ! $a->parent_id && $isOwnMarketing($a)) as $parent) {
            $email = $agreements->filter(fn (self $a) => $a->parent_id === $parent->id && str_contains($text($a), 'e-mail'));
            array_push($ids, ...($email->isNotEmpty() ? $email->pluck('id')->all() : [$parent->id]));
        }

        self::whereIn('id', $ids)->update(['subscribes_newsletter' => true]);

        return $ids;
    }
}
