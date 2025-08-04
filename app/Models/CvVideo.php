<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CvVideo extends Model
{
    use HasFactory;

    /**
     * Atrybuty, które można masowo przypisywać.
     *
     * @var array
     */
    protected $fillable = [
        'project_id',
        'user_id',
        'file_path',
        'temp_session_id',
        'aplication_id',
    ];

    /**
     * Relacja do projektu
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Relacja do użytkownika
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relacja do aplikacji
     */
    public function aplication(): BelongsTo
    {
        return $this->belongsTo(Aplication::class, 'aplication_id');
    }
}
