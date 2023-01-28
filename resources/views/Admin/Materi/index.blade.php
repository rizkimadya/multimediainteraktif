@extends('layouts.app', ['title' => 'Materi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div>
                    <button class="btn btn-primary d-flex">
                        <i class="ni ni-fat-add align-self-center mr-1"></i>
                        Tambah Materi</button>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Materi</th>
                                <th>Deskripsi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Materi Sistem Pernapasan</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.....</td>
                                <td class="d-flex">
                                    <button class="btn btn-info mr-2">Lihat</button>
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
