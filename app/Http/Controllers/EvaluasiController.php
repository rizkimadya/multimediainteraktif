<?php

namespace App\Http\Controllers;

use App\Models\Evaluasi;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Eval_;

class EvaluasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluasi = Evaluasi::all();
        return view('Admin.Evaluasi.index', ['evaluasi' => $evaluasi]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'keterangan' => 'required',
            'nama_materi' => 'required',
            'jumlah_soal' => 'required',
            'link_soal' => 'required',
        ]);

        $evaluasi = new Evaluasi();
        $evaluasi->fill($data);
        $evaluasi->save();
        return redirect()->route('evaluasi.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evaluasi  $evaluasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evaluasi = Evaluasi::where('id', $id)->first();
        return view('Admin.Evaluasi.edit', ['evaluasi' => $evaluasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evaluasi  $evaluasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $evaluasi = Evaluasi::where('id', $id)->first();
        $evaluasi->keterangan = $request->keterangan;
        $evaluasi->nama_materi = $request->nama_materi;
        $evaluasi->jumlah_soal = $request->jumlah_soal;
        $evaluasi->link_soal = $request->link_soal;

        $data = $evaluasi;
        $data->update();
        return redirect()->route('evaluasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evaluasi  $evaluasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evaluasi = Evaluasi::find($id);
        $evaluasi->delete();
        return redirect()->route('evaluasi.index');
    }
}
