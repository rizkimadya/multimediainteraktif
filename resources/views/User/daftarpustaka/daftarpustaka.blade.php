@extends('User.Layoutuser.app', ['title' => 'Daftar Pustaka'])

@section('content')
    <section id="dapus">
        <div class="container">
            <div class="row">
                <div class="col-md-7 align-self-center order-md-1 order-2">
                    <p class="title">Daftar Pustaka</p>
                    <p class="subtitle">Daftar pustaka adalah sebuah daftar yang berisikan berbagai sumber bacaan untuk
                        dijadikan dasar informasi dalam mengerjakan tugasmu. Sumber informasi yang kamu gunakan bisa berasal
                        dari berbagai media, lho! Contohnya itu buku, jurnal, artikel internet, skripsi, dan lainnya bisa
                        kamu jadikan rujukan dalam membuat tugas.</p>
                    <img src="{{ asset('assets/img/arrow.svg') }}" alt="" width="100%">
                </div>
                <div class="col-md-5 ps-md-5 order-md-2 order-1">
                    <img src="{{ asset('assets/img/bgdapus.svg') }}" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row isi-dapus">
            <div class="col-12 mb-4">
                <div class="card">
                    <p class="my-auto p-4">Mirza, F. (1997). Hubungan Remaja dan Penyimpangan Sosial. Asosiasi Psikologi Jakarta.
                        https://lib.psijkt.ac.id/123abc..................</p>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="card">
                    <p class="my-auto p-4">Mirza, F. (1997). Hubungan Remaja dan Penyimpangan Sosial. Asosiasi Psikologi Jakarta.
                        https://lib.psijkt.ac.id/123abc..................</p>
                </div>
            </div>
        </div>
    </div>
@endsection
