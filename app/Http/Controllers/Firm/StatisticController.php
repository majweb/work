<?php

namespace App\Http\Controllers\Firm;

use App\Charts\AppsRecruits;
use App\Charts\AppWithStatus;
use App\Charts\ProjectsRecruits;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProjectsRecruits $chart,AppsRecruits $chart2)
    {
        $recruiters = auth()->user()->recruits()->withCount(['projectsRecruits', 'applicationsRecruits'])->get();
        return inertia()->render('Statistic/Index',[
            'ProjectsRecruits' => $chart->build(),
            'AppsRecruits' => $chart2->build(),
            'recruiters' => $recruiters,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
