@extends('User.Layoutuser.app', ['title' => 'Video'])

@section('content')
    <div class="container isi-video">
        <div class="row">
            <div class="col-12 mb-3">
                <p class="title">Playlist Video</p>
                {{-- <p class="subtitle">Materi Sistem Pernapasan</p> --}}
            </div>
            @foreach ($videodetail as $item)
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
