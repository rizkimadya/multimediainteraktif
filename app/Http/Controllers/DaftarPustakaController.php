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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(DaftarPustaka $daftarPustaka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarPustaka  $daftarPustaka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftarPustaka $daftarPustaka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarPustaka  $daftarPustaka
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarPustaka $daftarPustaka)
    {
        //
    }
}
