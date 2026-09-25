<?php

namespace Tests\Concerns;

use App\Models\Aplication;
use App\Models\Project;
use App\Models\ShiftWork;
use App\Models\User;

trait CreatesProjects
{
    protected function createProject(User $user, array $overrides = []): Project
    {
        return Project::forceCreate(array_merge([
            'user_id' => $user->id,
            'recruiter_id' => $user->id,
            'title' => ['pl' => 'Oferta'],
            'category' => [],
            'categorySub' => [],
            'profession' => [],
            'position' => [],
            'currency' => [],
            'workingMode' => [],
            'typeOfContract' => [],
            'payoutMode' => [],
            'workingPlace' => [],
            'country' => [],
            'countryWork' => ['value' => 165, 'name' => 'Polska', 'countryCode' => 'pl'],
            'streetWork' => 'Dworek',
            'streetWorkNumber' => '1',
            'postalWork' => '44-200',
            'cityWork' => 'Rybnik',
            'workLoad' => [],
            'shiftWork' => (ShiftWork::first() ?? ShiftWork::create(['name' => ['pl' => 'Test']]))->id,
            'paySystem' => [],
            'days' => [],
            'basicSalaryFrom' => 0,
            'basicSalaryTo' => 0,
            'salary_type' => 'monthly',
            'workNight' => false,
            'experience' => [],
            'offer' => [],
            'wait' => [],
            'welcome' => [],
            'education' => null,
            'other_recruits' => [],
            'cv' => [],
            'langs' => [],
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ], $overrides));
    }

    protected function createAplication(User $firm, array $overrides = []): Aplication
    {
        $project = $this->createProject($firm);

        return Aplication::forceCreate(array_merge([
            'user_id' => $firm->id,
            'recruiter_id' => $firm->id,
            'project_id' => $project->id,
            'created_at' => now(),
            'updated_at' => now(),
        ], $overrides));
    }
}
