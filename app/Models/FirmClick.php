<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmClick extends Model
{
    use HasFactory;

    protected $fillable = [
        'firm_id',
        'type',
        'ip_address',
    ];

    public function firm(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Firm::class);
    }
}
