@extends('User.Layoutuser.app', ['title' => 'Profile'])

@section('content')
    <section id="profile">
        <div class="container">
            <div class="row biodata">
                <div class="col-12">
                    <p class="keterangan">Biografi Penulis</p>
                </div>
                <div class="col-12">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card p-3 mb-md-0 mb-3">
                                    <img src="{{ asset('assets/img/profile.jpeg') }}" alt="" width="100%">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <p class="nama">Nur Aulia Darmayanti</p>
                                <p class="isi"> Lahir di soppeng pada tanggal 22 agustus 2001 adalah mahasiswa dari
                                    pendidikan
                                    tinggi Universitas Islam Negeri Alauddin Makassar dengan program studi Pendidikan
                                    Biologi,
                                    fakultas Tarbiyah dan Keguruan.
                                    Anak pertama dari dua bersaudara hasil buah kasih dari pasangan Sudarman dan Asrianti
                                    Santri.
                                    Pendidikan Formal dimulai dari TK masita di soppeng, kemudian melanjutkan pendidikan di
                                    SDN
                                    Minasa Upa Makassar dan lulus pada tahun 2013. Pada tahun yang sama, ia melanjutkan
                                    pendidikan
                                    di SMPN 40 Makassar dan lulus pada tahun 2016 dan pada tahun yang sama pula ia
                                    melanjutkan
                                    pendidikan di MAN 1 makassar dan lulus pada tahun 2019. Pada tahun 2019 dia melanjutkan
                                    pendidikan tinggi di Universitas Islam Negeri Alauddin Makassar dengan Program Studi
                                    Pendidikan
                                    Biologi, Fakultas Tarbiyah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row lokasi">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/imguin.png') }}" alt="">
                        <div class="p-4">
                            <div class="d-flex">
                                <i class="bi bi-geo-alt-fill fs-2 me-2 align-self-center"></i>
                                <p class="mb-0">
                                    UNIVERSITAS ISLAM NEGERI ALAUDDIN MAKASSAR
                                    <span class="d-block">Kampus</span>
                                </p>
                            </div>
                            <div class="mt-3">
                                <a href="https://goo.gl/maps/GbPb41VhroTBC5wm8" target="_blank" class="btn btn-lokasi">Lihat
                                    Lokasi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/imgman.png') }}" alt="">
                        <div class="p-4">
                            <div class="d-flex">
                                <i class="bi bi-geo-alt-fill fs-2 me-2 align-self-center"></i>
                                <p class="mb-0">
                                    MADRASAH ALIYAH AISYIYAH SUNGGUMINASA
                                    <span class="d-block">Sekolah</span>
                                </p>
                            </div>
                            <div class="mt-3">
                                <a href="https://goo.gl/maps/cVRCmVF76GABVGeb8" target="_blank" class="btn btn-lokasi">Lihat
                                    Lokasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
