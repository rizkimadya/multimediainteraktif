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
                    <form action="" method="GET">
                        <div id="search" class="d-flex justify-content-center mt-4">
                            <input type="text" name="search" placeholder="Cari Materi Pembelajaran ...">
                            <button type="submit" id="search"
                                class="bi bi-search align-self-center ms-2 border-0"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="isimateri">
        <div class="container">
            <div class="row">
                @foreach ($materi as $item)
                    <div class="col-md-4 col-6 mb-md-4 mb-3">
                        <div class="card">
                            <img src="/storage/{{ $item->gambar }}" width="100%" alt="">
                            <div class="text-center">
                                <p class="namamateri">{{ $item->nama_materi }}</p>
                                {{-- <p class="deskripsimateri">{!! html_entity_decode($item->isi_materi) !!}</p> --}}
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
@endsection
