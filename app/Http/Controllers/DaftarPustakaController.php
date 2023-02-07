<?php

namespace App\Http\Controllers;

use App\Models\DaftarPustaka;
use Illuminate\Http\Request;

class DaftarPustakaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarpustaka = DaftarPustaka::all();
        return view('Admin.DaftarPustaka.index', ['daftarpustaka' => $daftarpustaka]);
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
            'link_daftarpustaka' => 'required'
        ]);

        $daftarpustaka = new DaftarPustaka();
        $daftarpustaka->fill($data);

        $daftarpustaka->save();
        return redirect()->route('dapus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaftarPustaka  $daftarPustaka
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarPustaka $daftarPustaka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarPustaka  $daftarPustaka
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftarpustaka = DaftarPustaka::where('id', $id)->first();
        return view('Admin.DaftarPustaka.edit', ['daftarpustaka' => $daftarpustaka]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarPustaka  $daftarPustaka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $daftarpustaka = DaftarPustaka::where('id', $id)->first();
        $data = $request->all();
        $daftarpustaka->fill($data);
        $daftarpustaka->save();
        return redirect()->route('dapus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarPustaka  $daftarPustaka
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftarpustaka = DaftarPustaka::find($id);
        $daftarpustaka->delete();
        return redirect()->route('dapus.index');
    }
}
