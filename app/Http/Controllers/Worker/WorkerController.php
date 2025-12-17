<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function Termwind\render;

class WorkerController extends Controller
{
    public function aplications()
    {
        return inertia()->render('Worker/Aplications');
    }
}
