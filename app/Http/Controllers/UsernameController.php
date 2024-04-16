<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class UsernameController extends Controller
{
    public function showUsernameForm()
    {
        return view('username');
    }

    public function saveUsername(Request $request)
    {
        $username = $request->input('username');
        // Do something with the username, like store it in session
        session(['username' => $username]);

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
