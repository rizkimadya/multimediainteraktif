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
            'nipguru' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['nipguru' => $request->nipguru, 'password' => $request->password])) {
            return view('Admin.Dashboard.dashboard')->with('users', $request);
        }
        return back()->withErrors([
            'password' => 'Nip atau Password anda salah'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
