<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'token', 'aplication_ids', 'sender_id',
    ];

    protected $casts = [
        'aplication_ids' => 'array',
    ];

    public static function findValid(?string $email, ?string $token): ?self
    {
        if (! $email || ! $token) {
            return null;
        }

        return static::where('email', $email)->where('token', $token)->first();
    }

    public function grantsAccessTo(int $aplicationId): bool
    {
        return in_array($aplicationId, array_map('intval', $this->aplication_ids ?? []), true);
    }
}
