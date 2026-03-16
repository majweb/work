<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceCorrection extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'number',
        'date_correction',
        'date_invoice',
        'amount',
        'pdf',
        'reason',
        'name_invoice',
        'nip_invoice',
        'street_invoice',
        'postal_invoice',
        'city_invoice',
        'country_invoice',
    ];

    protected $casts = [
        'date_correction' => 'date',
        'date_invoice' => 'date',
    ];

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }
}
