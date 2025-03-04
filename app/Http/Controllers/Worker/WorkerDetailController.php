<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkerDetailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkerDetailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(WorkerDetailRequest $request)
    {
        Auth::user()->workerDetail()->update([
            'contact_phone'=>$request->workerData()['contact_phone'],
            'surname'=>$request->workerData()['surname'],
        ]);

        session()->flash('flash.banner', __('translate.dataUpdated'));
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }
}
