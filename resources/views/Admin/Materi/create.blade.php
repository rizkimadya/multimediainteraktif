@extends('layouts.app', ['title' => 'Materi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <h2 class="mb-4">Halaman Tambah Materi</h2>
                <form action="{{ route('materi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama_materi" class="form-label">Judul Materi</label>
                                <input type="text" name="nama_materi" id="nama_materi" class="form-control"
                                    placeholder="Masukkan Judul Materi">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control"
                                    placeholder="Masukkan Judul Materi">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="isi_materi" class="form-label">Isi Materi</label>
                                <textarea name="isi_materi" id="isi_materi" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('materi.index') }}" class="btn btn-danger">Batal</a>
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
