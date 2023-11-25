<?php

namespace App\Http\Controllers;

use App\Models\UserProfil;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View
    {
        return view('profil.index', [
            "user" => User::with('user_profil')->get(),
        ]);
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
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenkel' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tgl_lahir' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
            'pic' => 'required|string|max:255',
        ]);

        $request->user()->user_profil()->create($validated);

        return redirect(route('user_profil.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfil  $userProfil
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfil $userProfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfil  $userProfil
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfil $userProfil)
    {
        $this->authorize('update', $userProfil);

        return view('user_profil.edit', [
            "user" => $userProfil
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfil  $userProfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfil $userProfil) : RedirectResponse
    {
        $this->authorize('update', $userProfil);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenkel' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tgl_lahir' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
            'pic' => 'required|string|max:255',
        ]);

        $userProfil->update($validated);

        return redirect(route('profil.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfil  $userProfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfil $userProfil)
    {
        //
    }
}
