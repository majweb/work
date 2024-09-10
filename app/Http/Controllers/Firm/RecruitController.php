<?php

namespace App\Http\Controllers\Firm;

use App\Enum\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRecruitRequest;
use App\Http\Resources\PermissionsResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class RecruitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('view',User::class);

        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => ['in:id,name']
        ]);

        $query = User::query()->where('recruiter_from_firm_id', auth()->user()->id);

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        });

        return inertia()->render('Recruits/Index', [
            'users' => $query->paginate(5)->withQueryString(),
            'filters' => request()->only(['field', 'direction'])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create',User::class);
        $permissions = PermissionsResource::collection(Permission::all());
        return inertia()->render('Recruits/Create',['permissions'=>$permissions]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecruitRequest $request)
    {
        Gate::authorize('create',User::class);
        $user =  User::create([
            'name' => $request->userData()['name'],
            'email' => $request->userData()['email'],
            'recruiter_from_firm_id' => $request->userData()['recruiter_from_firm_id'],
            'recruiter_phone' => $request->userData()['recruiter_phone'],
            'password' => Hash::make($request->userData()['password']),
        ]);
        $user->assignRole('recruit');
        $user->givePermissionTo(collect($request->userData()['permissions'])->pluck('id'));

        session()->flash('flash.banner', __('auth.addedRecruit'));
        session()->flash('flash.bannerStyle', 'success');

        return to_route('recruits.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $recruit)
    {
        $recruit->load('permissions:id,name,trans');
        Gate::authorize('update',auth()->user());
        $permissions = PermissionsResource::collection(Permission::all());
        $locale = app()->getLocale();
        return inertia()->render('Recruits/Edit',['permissions'=>$permissions,'recruit'=>$recruit,'locale'=>$locale]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRecruitRequest $request, User $recruit)
    {
        Gate::authorize('update',auth()->user());
        $recruit->update([
            'name' => $request->userData()['name'],
            'email' => $request->userData()['email'],
            'recruiter_from_firm_id' => $request->userData()['recruiter_from_firm_id'],
            'recruiter_phone' => $request->userData()['recruiter_phone'],
            'user_blocked' => $request->userData()['user_blocked'] ? now() :  NULL,
            'password' => Hash::make($request->userData()['password']),
        ]);
        $per = collect($request->userData()['permissions'])->pluck('name');
        $recruit->syncPermissions($per);
        session()->flash('flash.banner', __('auth.updateRecruit'));
        session()->flash('flash.bannerStyle', 'success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $recruit)
    {
        Gate::authorize('delete',$recruit);
        $recruit->delete();
        session()->flash('flash.banner', __('auth.deleteRecruit'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('recruits.index');
    }
}
