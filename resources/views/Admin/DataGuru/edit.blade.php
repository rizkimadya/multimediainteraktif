@extends('Layouts.app', ['title' => 'Edit Data Guru'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <form action="{{ route('dataguru.update', ['id' => $dataguru->id]) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="namaguru" class="form-label">Nama Guru</label>
                                <input type="text" name="namaguru" id="namaguru" class="form-control"
                                    placeholder="Masukkan Nama Guru" value="{{ $dataguru->namaguru }}" />
                            </div>
                            <div class="mb-3">
                                <label for="nipguru" class="form-label">Nip Guru</label>
                                <input type="text" name="nipguru" id="nipguru" class="form-control"
                                    placeholder="Masukkan Nama Guru" value="{{ $dataguru->nipguru }}" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Masukkan Password baru/Konfirmasi Ulang Password" required/>
                            </div>
                        </div>
                    </div>
                    <div class="my-2 d-flex justify-content-end">
                        <a href="{{ route('dataguru.index') }}" class="btn btn-danger" data-dismiss="modal">Kembali</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
