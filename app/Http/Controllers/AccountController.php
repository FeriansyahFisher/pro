<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AccountController extends Controller
{
    public function index():View
    {
        return view('account.index', [
            'users' => User::orderBy('name', 'asc')->get()
        ]);
    }
}
