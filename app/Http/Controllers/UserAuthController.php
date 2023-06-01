<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function list()
    {
        return view('auth.list');
    }

    public function showLogin($guard)
    {
        return response()->view('auth.login', compact('guard'));
    }
}
