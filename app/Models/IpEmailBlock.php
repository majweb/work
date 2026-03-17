<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpEmailBlock extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'type',
        'reason',
    ];

    protected function casts(): array
    {
        return [
            'type' => 'string',
        ];
    }
}
