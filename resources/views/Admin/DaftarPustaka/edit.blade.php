@extends('layouts.app', ['title' => 'Daftar Pustaka'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <h2 class="fw-bold mb-4">Halaman Edit Daftar Pustaka</h2>
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('dapus.update', ['id' => $daftarpustaka->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="link_daftarpustaka" class="form-label">Daftar Pustaka</label>
                                <textarea name="link_daftarpustaka" id="link_daftarpustaka" rows="6" class="form-control"
                                    placeholder="Masukkan Daftar Pustaka">{{ $daftarpustaka->link_daftarpustaka }}</textarea>
                            </div>
                            <div class="mb-2 d-flex justify-content-end">
                                <a href="{{ route('dapus.index') }}" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-success">update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
