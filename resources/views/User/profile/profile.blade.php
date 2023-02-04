@extends('User.Layoutuser.app', ['title' => 'Profile'])

@section('content')
    <section id="profile">
        <div class="container">
            <div class="row biodata">
                <div class="col-md-5 mb-4">
                    <img src="{{ asset('assets/img/imgprofile.svg') }}" alt="" width="100%">
                </div>
                <div class="col-md-7 mb-4 align-self-center">
                    <div class="row ps-md-5">
                        <div class="col-md-3 col-4">
                            <p>Nama</p>
                            <p>Jurusan</p>
                            <p>Fakultas</p>
                            <p>Universitas</p>
                            <p>Judul Skripsi</p>
                        </div>
                        <div class="col-md-9 col-8">
                            <p>: Nur Aulia</p>
                            <p>: Pendidikan Biologi</p>
                            <p>: Tarbiyah dan Keguruan</p>
                            <p>: UIN Alauddin Makassar</p>
                            <p>: Pengembangan multimedia interaktif
                                berbasis web pada pembelajaran biologi
                                materi sistem pernapasan siswa kelas XI
                                MA Aisyiyah Sungguminasa</p>
                        </div>
                        <div class="col-12 mt-md-5 mt-3">
                            <a href="#" class="btn btn-contact">Kontak Saya <i class="bi bi-whatsapp ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row lokasi">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/imguin.svg') }}" alt="">
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
                        <img src="{{ asset('assets/img/imgman.svg') }}" alt="">
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
