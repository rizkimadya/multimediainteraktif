<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    public function index()
    {
        $dataguru = User::where('roles', '=', 'user')->get();
        return view('Admin.DataGuru.index', compact('dataguru'));
    }

    public function store(Request $request)
    {
        $user = new User();

        $user->namaguru = $request->namaguru;
        $user->nipguru = $request->nipguru;
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(60);

        $dataguru = $user;

        $dataguru->save();
        return redirect()->route('dataguru.index');
    }

    public function edit($id)
    {
        $dataguru = User::where('id', $id)->first();
        return view('Admin.DataGuru.edit', ['dataguru' => $dataguru]);
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();

        $user->namaguru = $request->namaguru;
        $user->nipguru = $request->nipguru;
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(60);

        $dataguru = $user;

        $dataguru->update();
        return redirect()->route('dataguru.index');
    }

    public function destroy($id)
    {
        $dataguru = User::where('id', $id);
        $dataguru->delete();
        return redirect()->route('dataguru.index');
    }
}
