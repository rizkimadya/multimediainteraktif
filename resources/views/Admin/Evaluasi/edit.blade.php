@extends('layouts.app', ['title' => 'Evaluasi Materi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <h2 class="fw-bold mb-4">Halaman Edit Video Materi</h2>
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('evaluasi.update', ['id' => $evaluasi->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan Materi</label>
                                <input type="text" id="keterangan" class="form-control" name="keterangan"
                                    placeholder="Masukkan Keterangan" value="{{ $evaluasi->keterangan }}">
                            </div>
                            <div class="mb-3">
                                <label for="nama_materi" class="form-label">Nama Materi</label>
                                <input type="text" id="nama_materi" class="form-control" name="nama_materi"
                                    placeholder="Masukkan Nama Materi" value="{{ $evaluasi->nama_materi }}">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_soal" class="form-label">Jumlah Soal</label>
                                <input type="number" id="jumlah_soal" class="form-control" name="jumlah_soal"
                                    placeholder="Masukkan Jumlah Soal" value="{{ $evaluasi->jumlah_soal }}">
                            </div>
                            <div class="mb-3">
                                <label for="link_soal" class="form-label">Link Soal</label>
                                <input type="text" id="link_soal" class="form-control" name="link_soal"
                                    placeholder="Masukkan Link Soal" value="{{ $evaluasi->link_soal }}">
                            </div>
                            <div class="mb-2 d-flex justify-content-end">
                                <a href="{{ route('evaluasi.index') }}" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-success">update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
