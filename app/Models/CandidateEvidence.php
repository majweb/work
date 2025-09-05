<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class CandidateEvidence extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'external_company' => 'array',
        'position' => 'array',
        'currency' => 'array',
        'country' => 'array',
        'date_of_hire' => 'date:Y-m-d',
    ];

    // Position – zapisujemy tylko ID jako JSON, getter zwraca obiekt do Vue
    protected function position(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Category::where('id', json_decode($value, true)['value'] ?? [])
                ->get()
                ->map(fn($p) => [
                    'value' => $p->id,
                    'name' => $p->title,
                    'allTranslations' => $p->title
                ]),
            set: fn($value) => $value ? !isset($value[0]) ? json_encode($value) : json_encode($value[0]) : null

        );
    }

    // Country – zapisujemy tylko ID jako JSON
    protected function country(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Country::where('id', json_decode($value, true)['value'] ?? [])
                ->get()
                ->map(fn($p) => [
                    'value' => $p->id,
                    'countryCode' => $p->countryCode,
                    'name' => $p->name,
                    'allTranslations' => $p->allTranslations
                ]),
            set: fn($value) => $value ? !isset($value[0]) ? json_encode($value) : json_encode($value[0]) : null

        );
    }


    // Date of hire – zapewnia format MySQL
    protected function dateOfHire(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? Carbon::parse($value)->format('d-m-Y') : null,
            set: fn($value) => $value ? Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d') : null
        );
    }    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }
}
