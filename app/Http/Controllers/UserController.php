<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarPustaka;
use App\Models\Evaluasi;
use App\Models\Materi;
use App\Models\Video;

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

    public function detailevaluasi($id)
    {
        $evaluasi = Evaluasi::find($id);
        return view('User.evaluasi.detailevaluasi', ['evaluasi' => $evaluasi]);
    }

    public function indexvideo()
    {
        $video = Video::orderBy('created_at', 'desc')->get();
        return view('User.video.video', ['video' => $video]);
    }

    public function indexmateri()
    {
        $materi = Materi::orderBy('created_at', 'desc')->get();
        return view('User.materi.materi', ['materi' => $materi]);
    }

    public function detailmateri($id)
    {
        $materi = Materi::find($id);
        $materilain = Materi::orderBy('created_at', 'desc')->get();
        return view('User.materi.detailmateri', compact('materi', 'materilain'));
    }
}
