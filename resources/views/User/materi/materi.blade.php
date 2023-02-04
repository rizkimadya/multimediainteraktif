@extends('User.Layoutuser.app', ['title' => 'Materi'])

@section('content')
    <section id="materi">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <p class="title">Materi Multimedia Interaktif</p>
                    <p class="subtitle">Kesuksesan seseorang berbanding lurus dengan kemauannya untuk belajar, bangkit, dan
                        mencoba.</p>
                    <img src="{{ asset('assets/img/bgmateri.svg') }}" alt="">
                    <div id="search" class="d-flex justify-content-center mt-4">
                        <input type="text" placeholder="Cari Materi Pembelajaran ...">
                        <a href="#" class="bi bi-search align-self-center ms-2"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="isimateri">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-6 mb-3">
                    <div class="card">
                        <img src="{{ asset('assets/img/imgmateri.svg') }}" alt="" width="100%">
                        <div class="text-center">
                            <p class="namamateri">Materi Trakea</p>
                            <p class="deskripsimateri">Trakea atau batang kerongkongan adalah sfj gdr fh dan.....</p>
                            <a href="" class="d-flex justify-content-center">Lihat Materi <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 mb-3">
                    <div class="card">
                        <img src="{{ asset('assets/img/imgmateri.svg') }}" alt="" width="100%">
                        <div class="text-center">
                            <p class="namamateri">Materi Trakea</p>
                            <p class="deskripsimateri">Trakea atau batang kerongkongan adalah sfj gdr fh dan.....</p>
                            <a href="" class="d-flex justify-content-center">Lihat Materi <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 mb-3">
                    <div class="card">
                        <img src="{{ asset('assets/img/imgmateri.svg') }}" alt="" width="100%">
                        <div class="text-center">
                            <p class="namamateri">Materi Trakea</p>
                            <p class="deskripsimateri">Trakea atau batang kerongkongan adalah sfj gdr fh dan.....</p>
                            <a href="" class="d-flex justify-content-center">Lihat Materi <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
