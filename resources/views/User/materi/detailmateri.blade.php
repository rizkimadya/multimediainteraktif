@extends('User.Layoutuser.app', ['title' => 'Detail Materi'])

@section('content')
    <section id="detailmateri">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="title">{{ $materi->nama_materi }}</p>
                </div>
                <div class="col-md-8 isi">
                      <img src="/storage/{{ $materi->gambar }}" alt="">
                    <p class="subtitle">{{ $materi->isi_materi }}</p>
                </div>
                <div class="col-md-4 materilain">
                    <div class="row">
                        @foreach ($materilain as $item)
                            <div class="col-12 mb-md-4 mb-3">
                                <div class="card">
                                    <img src="/storage/{{ $item->gambar }}" width="100%" alt="">
                                    <div class="text-center">
                                        <p class="namamateri">{{ $item->nama_materi }}</p>
                                        <p class="deskripsimateri">{{ Str::limit($item->isi_materi, 60) }}</p>
                                        <a href="/materi/detailmateri/{{ $item->id }}"
                                            class="d-flex justify-content-center">Lihat Materi <i
                                                class="bi bi-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
