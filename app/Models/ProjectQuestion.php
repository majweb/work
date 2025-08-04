<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'user_id',
        'content',
        'answer_time',
        'accepted',
    ];

    /**
     * Relacja do projektu, do którego należy pytanie
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Relacja do użytkownika, który utworzył pytanie
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
