@extends('User.Layoutuser.app', ['title' => 'Detail Evaluasi'])

@section('content')
    <section id="evaluasi">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <p class="title">{{ $evaluasi->keterangan }}</p>
                    <p class="subtitle">{{ $evaluasi->nama_materi }}</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-11">
                    <iframe
                        src="{{ $evaluasi->link_soal }}"
                        width="100%" style="height:100vh;" frameborder="0">Loading…</iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
