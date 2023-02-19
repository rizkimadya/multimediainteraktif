@extends('Layouts.app', ['title' => 'Data Guru Login'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="ni ni-fat-add align-self-center mr-1"></i>
                        Tambah Data</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="d-flex mb-4">
                                    <h4 class="modal-title" id="exampleModalLabel">Form Tambah Data</h4>
                                    <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/dataguru" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="namaguru" class="form-label">Nama Guru</label>
                                        <input type="text" name="namaguru" id="namaguru" class="form-control"
                                            placeholder="Masukkan Nama Guru" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="nipguru" class="form-label">NIP Guru</label>
                                        <input type="text" name="nipguru" id="nipguru" class="form-control"
                                            placeholder="Masukkan Nip Guru" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Masukkan Password" required />
                                    </div>
                                    <div class="mb-2 d-flex justify-content-end">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Guru</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataguru as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nipguru }}</td>
                                    <td>{{ $item->namaguru }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="dataguru/edit/{{ $item->id }}"
                                            class="btn btn-sm btn-success mr-2">Edit</a>

                                        <form action="dataguru/{{ $item->id }}" method="post">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm(&quot;Apakah yakin ingin menghapus data?&quot;)">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
