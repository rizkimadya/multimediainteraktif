@extends('layouts.app', ['title' => 'Evaluasi Materi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div>
                    <button class="btn btn-primary d-flex" data-toggle="modal" data-target="#exampleModal">
                        <i class="ni ni-fat-add align-self-center mr-1"></i>
                        Tambah Evaluasi</button>
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
                                <form action="/Admin/Evaluasi" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="keterangan" class="form-label">Keterangan Materi</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan"
                                            placeholder="Masukkan Keterangan" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_materi" class="form-label">Nama Materi</label>
                                        <input type="text" id="nama_materi" class="form-control" name="nama_materi"
                                            placeholder="Masukkan Nama Materi" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jumlah_soal" class="form-label">Jumlah Soal</label>
                                        <input type="number" id="jumlah_soal" class="form-control" name="jumlah_soal"
                                            placeholder="Masukkan Jumlah Soal" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="link_soal" class="form-label">Link Soal</label>
                                        <input type="text" id="link_soal" class="form-control" name="link_soal"
                                            placeholder="Masukkan Link Soal" required>
                                    </div>
                                    <div class="mb-2 d-flex justify-content-end">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                <th>Keterangan</th>
                                <th>Nama Materi</th>
                                <th>Jumlah Soal</th>
                                <th>Link Soal</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($evaluasi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ Str::limit($item->keterangan, 20) }}</td>
                                    <td>{{ Str::limit($item->nama_materi, 20) }}</td>
                                    <td>{{ $item->jumlah_soal }}</td>
                                    <td>{{ Str::limit($item->link_soal, 20) }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="Evaluasi/edit/{{ $item->id }}"
                                            class="btn btn-sm btn-success mr-2">Edit</a>

                                        <form action="Evaluasi/{{ $item->id }}" method="post">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)">
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
