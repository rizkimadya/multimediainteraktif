@extends('layouts.app', ['title' => 'Video Materi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div>
                    <button class="btn btn-primary d-flex" data-toggle="modal" data-target="#exampleModal">
                        <i class="ni ni-fat-add align-self-center mr-1"></i>
                        Tambah Video</button>
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
                                <form action="/Admin/Video" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="linkvideo" class="form-label">Link Video</label>
                                        <input type="text" id="linkvideo" class="form-control" name="linkvideo"
                                            placeholder="Masukkan Link Video" value="https://www.youtube.com/embed/"
                                            required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="playlistbaru" class="form-label">Tambah Playlist</label>
                                        <input type="text" id="playlistbaru" class="form-control" name="playlistbaru"
                                            placeholder="Masukkan Playlist Baru" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="playlistlama" class="form-label">Playlist Lama</label>
                                        <select class="form-control" name="playlistlama" id="playlistlama">
                                            <option selected>Pilih Playlist Lama</option>
                                            @foreach ($video as $item)
                                                @if ($item->playlistbaru != null)
                                                    <option value="{{ $item->playlistbaru }}">{{ $item->playlistbaru }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="namamateri" class="form-label">Nama Video</label>
                                        <input type="text" id="namamateri" class="form-control" name="namamateri"
                                            placeholder="Masukkan Nama Materi Yang dibahas" required />
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
                                <th>Link Video Youtube</th>
                                <th>Nama Materi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($video as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ Str::limit($item->linkvideo, 55) }}</td>
                                    <td>{{ Str::limit($item->namamateri, 30) }}</td>
                                    <td class="d-flex">
                                        <a href="Video/edit/{{ $item->id }}"
                                            class="btn btn-sm btn-success mr-2">Edit</a>

                                        <form action="Video/{{ $item->id }}" method="post">
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
