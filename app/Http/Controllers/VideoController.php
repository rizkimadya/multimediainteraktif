<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = Video::all();
        return view('Admin.Video.index', ['video' => $video]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $video = new Video();
        $video->fill($data);
        $video->save();
        Alert::success('Sukses', 'Data Berhasil Ditambah');
        return redirect()->route('video.index');
    }


    public function edit($id)
    {
        $video = Video::where('id', $id)->first();
        return view('Admin.Video.edit', ['video' => $video]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::where('id', $id)->first();
        $video->linkvideo = $request->linkvideo;
        $video->keteranganvideo = $request->keteranganvideo;

        $data = $video;
        $data->update();
        Alert::success('Sukses', 'Data Berhasil Diupdate');
        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();
        Alert::success('Sukses', 'Data Berhasil Dihapus');
        return redirect()->route('video.index');
    }
}
