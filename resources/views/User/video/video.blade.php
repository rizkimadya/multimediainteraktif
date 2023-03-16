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
                    <form action="" method="get">
                        <div id="search" class="d-flex">
                            <input type="text" name="search" placeholder="Cari Video Pembelajaran">
                            <button type="submit" class="bi bi-search align-self-center ms-2 border-0"></button>
                        </div>
                    </form>
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
            @foreach ($video as $item)
                <div class="col-6 mb-4">
                    <div class="card">
                        <iframe width="100%" src="{{ $item->linkvideo }}" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
