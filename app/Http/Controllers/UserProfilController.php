<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserProfilController extends Controller
{
    public function index():View{
        return view('profil.index', [
            'id' => Auth::id(),
            'user' => Auth::user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $chirp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user) : RedirectResponse {
        $this -> authorize('update', $user);

        $validated = $request->validate([
            "email" => "required|string|max:255"
        ]);

        $user->update($validated);

        return redirect(route('profil.index'));
    }
}
