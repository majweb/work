<?php

namespace App\Models;

use App\Casts\TimeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'payoutMode',
        'paySystem',
        'workNight',
        'offer',
        'wait',
        'experience',
        'welcome',
        'education',
        'address',
        'postal',
        'city',
        'detailProjects',
    ];

    protected $casts = [
        'title'=>'array',
        'category'=>'array',
        'currency'=>'array',
        'categorySub'=>'array',
        'profession'=>'array',
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
        'basicSalaryFrom' => 'float',
        'basicSalaryTo' => 'float',
        'bonusSalaryFrom' => 'float',
        'bonusSalaryTo' => 'float',
        'hoursFrom'=>TimeCast::class,
        'hoursTo'=>TimeCast::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function recruit(): BelongsTo
    {
        return $this->belongsTo(User::class, 'recruiter_id');
    }
    public function detailprojects()
    {
        return $this->belongsToMany(DetailProject::class,'detailproject_project');
    }

}
