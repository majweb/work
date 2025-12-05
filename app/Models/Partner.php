<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Partner extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'link',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('partner_logo')->singleFile();
    }
}
