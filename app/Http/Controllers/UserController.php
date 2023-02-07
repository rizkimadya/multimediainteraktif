<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarPustaka;
use App\Models\Evaluasi;

class UserController extends Controller
{
    public function indexdapus()
    {
        $daftarpustaka = DaftarPustaka::orderBy('created_at', 'desc')->get();
        return view('User.daftarpustaka.daftarpustaka', ['daftarpustaka' => $daftarpustaka]);
    }

    public function indexevaluasi()
    {
        $evaluasi = Evaluasi::orderBy('created_at', 'desc')->get();
        return view('User.evaluasi.evaluasi', ['evaluasi' => $evaluasi]);
    }
}
