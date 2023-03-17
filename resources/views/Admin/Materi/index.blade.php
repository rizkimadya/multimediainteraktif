@extends('layouts.app', ['title' => 'Materi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div>
                    <a href="{{ route('materi.create') }}" class="btn btn-primary d-inline-block">
                        <i class="ni ni-fat-add align-self-center mr-1"></i>
                        Tambah Materi</a>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Materi</th>
                                {{-- <th>Deskripsi</th> --}}
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($materi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_materi }}</td>
                                    {{-- <td>{{ Str::limit($item->isi_materi, 70) }}</td> --}}
                                    <td class="d-flex justify-content-center">
                                        <a href="Materi/show/{{ $item->id }}" class="btn btn-sm btn-info mr-2">Lihat</a>
                                        <a href="Materi/edit/{{ $item->id }}" class="btn btn-sm btn-success mr-2">Edit</a>

                                        <form action="Materi/{{ $item->id }}" method="post">
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
