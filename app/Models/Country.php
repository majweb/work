<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Country extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'continent',
        'name',
        'countryCode',
        'lang',
        'default_image'
    ];
    public array $translatable = ['name','continent'];

    protected $casts = [
        'name' => 'array',
        'continent' => 'array',
    ];

    public function holidays()
    {
        return $this->hasMany(Holiday::class);
    }

    public function currentHoliday()
    {
        return $this->holidays()
            ->whereDate('date', now()->toDateString())
            ->first();
    }

    public function getActiveImageAttribute()
    {
        return $this->currentHoliday()?->special_image ?? $this->default_image;
    }

    public function getActiveImageUrlAttribute()
    {
        return $this->active_image ? Storage::url($this->active_image) : null;
    }

    //$country = Country::where('code', 'PL')->first();
    //
    //$image = $country->active_image;
    // jeśli dziś święto -> weź special_image
    // jeśli nie -> weź default_image
}
