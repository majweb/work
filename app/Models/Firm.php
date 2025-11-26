<?php

namespace App\Models;

use App\Enum\Currency;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Firm extends Model
{
    use HasFactory;

    public function premiumCertificateHistories()
    {
        return $this->hasMany(PremiumCertificateHistory::class);
    }

    protected $fillable = [
        'user_id',
        'nip',
        'regon',
        'street',
        'number',
        'city',
        'postal',
        'country',
        'invoice_same',
        'contact_phone',
        'nip_invoice',
        'name_invoice',
        'regon_invoice',
        'street_invoice',
        'number_invoice',
        'city_invoice',
        'postal_invoice',
        'country_invoice',
        'www',
        'opinion_google',
        'opinion_trust',
        'opinion_facebook',
        'social_facebook',
        'social_google',
        'social_x',
        'social_instagram',
        'social_linkedin',
        'social_tiktok',
        'count_workers',
        'annual_turnover',
        'video',
        'points',
        'currency',
        'premium_certificate_path',
        'premium_certificate_level',
        'extra_description',
    ];

    protected $casts = [
        'invoice_same' => 'boolean',
        'contact_phone' => 'array',
        'countryJson' => 'array',
        'countryInvoiceJson' => 'array',
        'currency' => Currency::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
