<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTwoFactorAuthRequest;
use App\Http\Requests\UpdateTwoFactorAuthRequest;
use App\Models\TwoFactorAuth;

class TwoFactorAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('authentication.two_factor_auth');
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
     * @param  \App\Http\Requests\StoreTwoFactorAuthRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTwoFactorAuthRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TwoFactorAuth  $twoFactorAuth
     * @return \Illuminate\Http\Response
     */
    public function show(TwoFactorAuth $twoFactorAuth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TwoFactorAuth  $twoFactorAuth
     * @return \Illuminate\Http\Response
     */
    public function edit(TwoFactorAuth $twoFactorAuth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTwoFactorAuthRequest  $request
     * @param  \App\Models\TwoFactorAuth  $twoFactorAuth
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTwoFactorAuthRequest $request, TwoFactorAuth $twoFactorAuth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TwoFactorAuth  $twoFactorAuth
     * @return \Illuminate\Http\Response
     */
    public function destroy(TwoFactorAuth $twoFactorAuth)
    {
        //
    }
}
