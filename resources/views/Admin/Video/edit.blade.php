@extends('layouts.app', ['title' => 'Video Materi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <h2 class="fw-bold mb-4">Halaman Edit Video Materi</h2>
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('video.update', ['id' => $video->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="linkvideo" class="form-label">Link Video</label>
                                <input type="text" id="linkvideo" class="form-control" name="linkvideo"
                                    placeholder="Masukkan Link Video" value="{{ $video->linkvideo }}">
                            </div>
                            <div class="mb-3">
                                <label for="namamateri" class="form-label">Nama Video</label>
                                <input type="text" id="namamateri" class="form-control" name="namamateri"
                                    placeholder="Masukkan Nama Materi Yang dibahas" value="{{ $video->namamateri }}" />
                            </div>
                            <div class="mb-2 d-flex justify-content-end">
                                <a href="{{ route('video.index') }}" type="button" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
