@extends('User.Layoutuser.app', ['title' => 'Video'])

@section('content')
    <section id="video">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/bgvideo.svg') }}" alt="" width="100%">
                </div>
                <div class="col-md-7 align-self-center ps-md-5">
                    <p class="title"><span>Belajar</span> adalah Ibadah</p>
                    <p class="subtitle">Memang baik merayakan kesuksesan, tapi hal yang lebih penting adalah untuk mengambil
                        pelajaran dari kegagalan dan Jangan malas untuk belajar karena ilmu adalah harta yang bisa kita bawa
                        ke mana pun tanpa membebani kita.</p>
                    <div id="search" class="d-flex">
                        <input type="text" placeholder="Cari Video Pembelajaran">
                        <a href="#" class="bi bi-search align-self-center ms-2"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container isi-video">
        <div class="row">
            <div class="col-12 mb-3">
                <p class="title">Video Pembelajaran</p>
                <p class="subtitle">Materi Sistem Pernapasan</p>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <iframe width="100%" src="https://www.youtube.com/embed/xenPP8MyenI" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <iframe width="100%" src="https://www.youtube.com/embed/JA9_mY91JeE" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
