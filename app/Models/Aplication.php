<?php

namespace App\Models;

use App\Casts\TimeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Aplication extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'recruiter_id',
        'name',
        'surname',
        'phone',
        'email',
        'aplication_user_id',
        'project_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function recruit(): BelongsTo
    {
        return $this->belongsTo(User::class,'recruiter_id');
    }

    public function worker(): BelongsTo
    {
        return $this->belongsTo(User::class,'aplication_user_id');
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class,'project_id');
    }


}
