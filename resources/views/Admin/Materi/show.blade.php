@extends('layouts.app', ['title' => 'Materi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <h2 class="mb-4">Halaman Lihat Materi</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="nama_materi" class="form-label">Judul Materi</label>
                            <p class="form-control">{{ $materi->nama_materi }}</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <img src="/storage/{{ $materi->gambar }}" style="width:40%; height:auto;" alt="" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="isi_materi" class="form-label">Isi Materi</label>
                            <textarea name="isi_materi" id="isi_materi" rows="10" class="form-control">{{ $materi->isi_materi }}</textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('materi.index') }}" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
