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

    protected $fillable = ['description', 'help_text', 'type', 'is_active', 'parent_id', 'is_required'];

    public array $translatable = ['description', 'help_text'];

    protected $casts = [
        'description' => 'array',
        'help_text' => 'array',
        'is_active' => 'boolean',
        'is_required' => 'boolean',
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
}
