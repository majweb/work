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
use Spatie\Permission\Models\Role;

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

        $query = User::query()->where('recruiter_from_firm_id', auth()->user()->id)
            ->withCount([
                'projectsRecruits as projects_count',
                'applicationsRecruits as applications_count',
                'applicationsRecruits as yes_count' => function ($query) {
                    $query->where('status', 'yes');
                }
            ]);

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        });

        $users = $query->paginate(5)->withQueryString();

        $users->getCollection()->transform(function ($user) {
            $user->quality = $user->applications_count > 0
                ? round(($user->yes_count / $user->applications_count) * 100, 1)
                : 0;
            return $user;
        });

        return inertia()->render('Recruits/Index', [
            'users' => $users,
            'filters' => request()->only(['field', 'direction'])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create',User::class);
        return inertia()->render('Recruits/Create');
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
            'color' => $request->userData()['color'],
            'password' => Hash::make($request->userData()['password']),
        ]);
        $user->assignRole('recruit');

        if (isset($request->userData()['photo'])) {
            $user->updateProfilePhoto($request->userData()['photo']);
        }

        session()->flash('flash.banner', __('translate.addedRecruit'));
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
        Gate::authorize('update',auth()->user());
        return inertia()->render('Recruits/Edit',['recruit'=>$recruit]);
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
            'color' => $request->userData()['color'],
            'password' => !is_null($request->userData()['password']) ? Hash::make($request->userData()['password']) : $recruit->password,
        ]);

        if (isset($request->userData()['photo'])) {
            $recruit->updateProfilePhoto($request->userData()['photo']);
        }

        session()->flash('flash.banner', __('translate.updateRecruit'));
        session()->flash('flash.bannerStyle', 'success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $recruit)
    {
        Gate::authorize('delete',$recruit);
        $recruit->delete();
        session()->flash('flash.banner', __('translate.deleteRecruit'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('recruits.index');
    }

    /**
     * Delete the recruit's profile photo.
     */
    public function destroyPhoto(User $recruit)
    {
        Gate::authorize('update', auth()->user());

        $recruit->deleteProfilePhoto();

        return back(303);
    }
}
