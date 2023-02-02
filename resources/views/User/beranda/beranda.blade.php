@extends('User.Layoutuser.app', ['title' => 'Beranda'])

@section('content')
    <section id="beranda">
        <div class="container">
            <div class="row hero">
                <div class="col-md-6 align-self-center">
                    <p class="title"><span>Selamat</span> Datang, <br>
                        dan Selamat <span>Belajar</span></p>
                    <p class="subtitle">Pembelajaran tidak didapat secara kebetulan, ia harus dicari dengan semangat dan
                        dijalani dengan tekun.
                    </p>
                    <div class="d-inline-block">
                        <a href="" class="btn btn-mulai d-flex">Mulai Belajar <i class="bi bi-book ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/bghero.svg') }}" alt="" width="100%">
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
                            dan meningkatkan kualitas belajar siswa</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="d-flex">
                        <img src="{{ asset('assets/img/fitur3.svg') }}" alt=""
                            class="align-self-center d-flex me-2">
                        <p class="mb-0">Dapat menumbuh- kan minat dan motivasi belajar siswa.</p>
                    </div>
                </div>
            </div>

            <div class="row sistempernapasan">
                <div class="col-12">
                    <p class="title mb-0">Sistem Pernapasan</p>
                    <p class="subtitle">Media Pembelajaran Interaktif</p>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/book.svg') }}" alt="" width="100%" height="300px">
                        <a href="#" class="btn btn-sistem">Materi</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/video.svg') }}" alt="" width="100%" height="300px">
                        <a href="#" class="btn btn-sistem">Video</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/file.svg') }}" alt="" width="100%" height="300px">
                        <a href="#" class="btn btn-sistem">Evaluasi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
