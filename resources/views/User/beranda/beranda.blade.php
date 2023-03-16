@extends('User.Layoutuser.app', ['title' => 'Beranda'])

@section('content')
    <section id="beranda">
        <div class="container">
            <div class="row hero">
                <div class="col-md-6 align-self-center order-md-1 order-2">
                    <p class="title"><span>Sistem</span> Pernapasan
                    <p class="subtitle">Sistem Pernapasan adalah sekumpulan organ yang terlibat dalam proses pertukaran oksigen dan karbon dioksida dalam darah.
                    </p>
                    <div class="d-inline-block">
                        <a href="#cardmateri" class="btn btn-mulai d-flex">Mulai Belajar <i class="bi bi-book ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <img src="{{ asset('assets/img/bghero.png') }}" alt="" width="100%">
                </div>
            </div>

            <div class="row fitur">
                <div class="col-md-4 mb-3">
                    <div class="d-flex">
                        <img src="{{ asset('assets/img/fitur1.svg') }}" alt=""
                            class="align-self-center d-flex me-2">
                        <p class="mb-0">Membuat proses pembelajaran lebih
                            menarik dan interaktif</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="d-flex">
                        <img src="{{ asset('assets/img/fitur2.svg') }}" alt=""
                            class="align-self-center d-flex me-2">
                        <p class="mb-0">Mengurangi jumlah waktu pembelajaran
                            dan meningkatkan kualitas belajar peserta didik</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="d-flex">
                        <img src="{{ asset('assets/img/fitur3.svg') }}" alt=""
                            class="align-self-center d-flex me-2">
                        <p class="mb-0">Dapat menumbuhkan minat dan motivasi belajar peserta didik.</p>
                    </div>
                </div>
            </div>

            <div class="row sistempernapasan" id="cardmateri">
                <div class="col-12">
                    <p class="title mb-4">Sistem Pernapasan</p>
                    {{-- <p class="subtitle">Media Pembelajaran Interaktif</p> --}}
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/books.png') }}" alt="" width="100%" height="300px">
                        <a href="/materi" class="btn btn-sistem">Materi</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/video.png') }}" alt="" width="100%" height="300px">
                        <a href="/video" class="btn btn-sistem">Video</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/file.png') }}" alt="" width="100%" height="300px">
                        <a href="/evaluasi" class="btn btn-sistem">Evaluasi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
