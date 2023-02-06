<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('Login.login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return view('Admin.Dashboard.dashboard')->with('users', $request);
        }
        return back()->withErrors([
            'password' => 'Username atau Password anda salah'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
