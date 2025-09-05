<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CandidateAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_question_id',
        'candidate_id',
        'text_answer',
        'boolean_answer'
    ];

    protected $casts = [
        'boolean_answer' => 'boolean',
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(CandidateQuestion::class, 'candidate_question_id');
    }

    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
