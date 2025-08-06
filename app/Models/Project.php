<?php

namespace App\Models;

use App\Casts\TimeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = [
        'user_id',
        'recruiter_id',
        'title',
        'category',
        'categorySub',
        'profession',
        'position',
        'workingMode',
        'typeOfContract',
        'days',
        'currency',
        'workLoad',
        'shiftWork',
        'country',
        'workingPlace',
        'basicSalaryFrom',
        'basicSalaryTo',
        'bonusSalaryFrom',
        'bonusSalaryTo',
        'hoursFrom',
        'hoursTo',
        'hoursTo',
        'payoutMode',
        'paySystem',
        'workNight',
        'offer',
        'wait',
        'experience',
        'welcome',
        'education',
        'countryWork',
        'streetWork',
        'streetWorkNumber',
        'postalWork',
        'cityWork',
        'detailProjects',
        'other_recruits',
        'cv',
        'external_company_id',
    ];

    protected $casts = [
        'title'=>'array',
        'category'=>'array',
        'currency'=>'array',
        'countryWork'=>'array',
        'categorySub'=>'array',
        'payoutMode'=>'array',
        'profession'=>'array',
        'workLoad'=>'array',
        'position'=>'array',
        'workingMode'=>'array',
        'typeOfContract'=>'array',
        'days'=>'array',
        'paySystem'=>'array',
        'country'=>'array',
        'workingPlace'=>'array',
        'offer'=>'array',
        'wait'=>'array',
        'experience'=>'array',
        'detailProjects'=>'array',
        'welcome'=>'array',
        'cv'=>'array',
        'other_recruits'=>'array',
        'basicSalaryFrom' => 'float',
        'basicSalaryTo' => 'float',
        'bonusSalaryFrom' => 'float',
        'bonusSalaryTo' => 'float',
        'hoursFrom'=>TimeCast::class,
        'hoursTo'=>TimeCast::class,
    ];

    protected $attributes = [
        'other_recruits' => '[]',
        'cv' => '[]',
    ];



    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function recruit(): BelongsTo
    {
        return $this->belongsTo(User::class, 'recruiter_id');
    }
    public function shiftWork(): BelongsTo
    {
        return $this->belongsTo(ShiftWork::class,'shiftWork');
    }
    public function education(): BelongsTo
    {
        return $this->belongsTo(Education::class,'education');
    }
    public function detailprojects()
    {
        return $this->belongsToMany(DetailProject::class,'detailproject_project');
    }
    public function aplications(): HasMany
    {
        return $this->hasMany(Aplication::class);
    }

    public function cvClassics(): HasMany
    {
        return $this->hasMany(CvClassic::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(ProjectQuestion::class);
    }

    public function audio()
    {
        return $this->hasOne(CvAudio::class); // lub hasMany, zależnie od relacji
    }

    public function video()
    {
        return $this->hasOne(CvVideo::class); // lub hasMany, zależnie od relacji
    }

    public function externalCompany(): BelongsTo
    {
        return $this->belongsTo(ExternalCompany::class);
    }

}
