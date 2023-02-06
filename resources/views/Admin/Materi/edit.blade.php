@extends('layouts.app', ['title' => 'Materi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <h2 class="mb-4">Halaman Edit Materi</h2>
                <form action="{{ route('materi.update', ['id' => $materi->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="nama_materi" class="form-label">Judul Materi</label>
                                <input type="text" name="nama_materi" id="nama_materi" class="form-control"
                                    placeholder="Masukkan Judul Materi" value="{{ $materi->nama_materi }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar Lama</label>
                                <img src="/storage/{{ $materi->gambar }}" style="width:40%; height:auto;" alt=""
                                    class="form-control mb-2">
                                <input type="file" name="gambar" id="gambar" class="form-control"
                                    placeholder="Masukkan Judul Materi">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="isi_materi" class="form-label">Isi Materi</label>
                                <textarea name="isi_materi" id="isi_materi" rows="10" class="form-control">{{ $materi->isi_materi }}</textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('materi.index') }}" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
