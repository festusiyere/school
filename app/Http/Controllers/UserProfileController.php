<?php

namespace App\Http\Controllers;

use App\userProfile;
use App\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        // dd($user->name);
        // return view('super_admin.profile.blade');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\userProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(User $profile)
    {
        $profile = userProfile::find($profile);

        return view('super_admin.profile', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\userProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(userProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\userProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userProfile $userProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\userProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(userProfile $userProfile)
    {
        //
    }
}
