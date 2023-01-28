@extends('layouts.app', ['title' => 'Data Guru'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div>
                    <button class="btn btn-primary d-flex" data-toggle="modal" data-target="#exampleModal">
                        <i class="ni ni-fat-add align-self-center mr-1"></i>
                        Tambah Data Guru</button>
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
                                <form action="">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Guru</label>
                                        <input type="text" id="nama" class="form-control" name="nama"
                                            placeholder="Masukkan Nama Guru">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" id="nip" class="form-control" name="nip"
                                            placeholder="Masukkan Nip Guru">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" id="password" class="form-control" name="password"
                                            placeholder="Masukkan Password">
                                    </div>
                                    <div class="mb-2 d-flex justify-content-end">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Tambahkan</button>
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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>123452345</td>
                                <td>M.Rizki Madya</td>
                                <td class="d-flex">
                                    <button class="btn btn-success mr-2">Edit</button>
                                    <button class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
