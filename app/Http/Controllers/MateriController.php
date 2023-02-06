<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi = Materi::all();
        return view('Admin.Materi.index', ['materi' => $materi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Materi.create');
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
            'nama_materi' => 'required',
            'isi_materi' => 'required',
            'gambar' => 'file|image|mimes:jpeg,png,jpg|max:5000'
        ]);

        $materi = new Materi();
        $materi->fill($data);

        $dir = 'Materi/' . $request->nama_materi;
        $path = $request
            ->file('gambar')
            ->storePubliclyAs($dir, "gambar.{$request->file('gambar')->extension()}");
        $materi->gambar = Str::of($path)->replace('public', 'storage')->toString();

        $materi->save();
        return redirect()->route('materi.index')->with('status', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materi = Materi::find($id);
        return view('Admin.Materi.show', ['materi' => $materi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materi = Materi::where('id', $id)->first();
        return view('Admin.Materi.edit', ['materi' => $materi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $materi = Materi::where('id', $id)->first();
        $data = $request->all();

        if (!$request->file("gambar")) {
            $materi->fill($data);
            $materi->save();
        }
        if ($request->file("gambar")) {
            $materi->fill($data);

            $dir = 'Materi/' . $request->nama_materi;
            $path = $request
                ->file('gambar')
                ->storePubliclyAs($dir, "gambar.{$request->file('gambar')->extension()}");
            $materi->gambar = Str::of($path)->replace('public', 'storage')->toString();

            $materi->save();
        }
        return redirect()->route('materi.index')->with('status', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materi = Materi::find($id);
        Storage::delete(Str::of($materi->gambar)->replace('storage', 'public')->toString());
        $materi->delete();
        return redirect()->route('materi.index');
    }
}