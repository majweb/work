<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Models\Aplication;
use Illuminate\Http\Request;

class AplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia()->render('Aplication/Index');
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
    public function show(Aplication $aplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aplication $aplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aplication $aplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aplication $aplication)
    {
        //
    }
}
