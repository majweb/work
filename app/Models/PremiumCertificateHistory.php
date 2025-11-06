<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumCertificateHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'firm_id',
        'certificate_path',
        'level',
        'amount',
        'generated_at'
    ];

    protected $casts = [
        'generated_at' => 'datetime',
        'amount' => 'decimal:2'
    ];

    public function firm()
    {
        return $this->belongsTo(Firm::class);
    }
}
