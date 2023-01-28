@extends('layouts.app', ['title' => 'Materi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <h2 class="mb-4">Halaman Tambah Materi</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Judul Materi</label>
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Masukkan Judul Materi">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Judul Materi</label>
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Masukkan Judul Materi">
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="" class="btn btn-danger">Batal</a>
                                <a href="" class="btn btn-success">Tambah</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
