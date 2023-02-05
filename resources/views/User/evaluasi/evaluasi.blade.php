@extends('User.Layoutuser.app', ['title' => 'Evaluasi'])

@section('content')
    <section id="evaluasi">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <p class="title">Evaluasi</p>
                    <p class="subtitle">Materi Sistem Pernapasan</p>
                </div>
            </div>
            <div class="row cardevaluasi">
                <div class="col-md-3 mb-md-4 mb-3">
                    <a href="/detailevaluasi" class="card text-white">
                        <div class="d-flex">
                            <div>
                                <p class="nama">Evaluasi 1</p>
                                <p class="keterangan">Materi Trakea</p>
                            </div>
                            <img src="{{ asset('assets/img/imgevaluasi.svg') }}" alt="" class="d-flex ms-auto">
                        </div>
                        <div class="row mt-3">
                            <div class="col-5 align-self-center">
                                <div class="progress" style="height: 4px;">
                                    <div class="progress-bar bg-white progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Example 20px high"
                                        style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-7">
                                <p class="jmlsoal">20 Soal</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-md-4 mb-3">
                    <a href="/detailevaluasi" class="card text-white">
                        <div class="d-flex">
                            <div>
                                <p class="nama">Evaluasi 1</p>
                                <p class="keterangan">Materi Trakea</p>
                            </div>
                            <img src="{{ asset('assets/img/imgevaluasi.svg') }}" alt="" class="d-flex ms-auto">
                        </div>
                        <div class="row mt-3">
                            <div class="col-5 align-self-center">
                                <div class="progress" style="height: 4px;">
                                    <div class="progress-bar bg-white progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Example 20px high"
                                        style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-7">
                                <p class="jmlsoal">20 Soal</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-md-4 mb-3">
                    <a href="/detailevaluasi" class="card text-white">
                        <div class="d-flex">
                            <div>
                                <p class="nama">Evaluasi 1</p>
                                <p class="keterangan">Materi Trakea</p>
                            </div>
                            <img src="{{ asset('assets/img/imgevaluasi.svg') }}" alt="" class="d-flex ms-auto">
                        </div>
                        <div class="row mt-3">
                            <div class="col-5 align-self-center">
                                <div class="progress" style="height: 4px;">
                                    <div class="progress-bar bg-white progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Example 20px high"
                                        style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-7">
                                <p class="jmlsoal">20 Soal</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-md-4 mb-3">
                    <a href="/detailevaluasi" class="card text-white">
                        <div class="d-flex">
                            <div>
                                <p class="nama">Evaluasi 1</p>
                                <p class="keterangan">Materi Trakea</p>
                            </div>
                            <img src="{{ asset('assets/img/imgevaluasi.svg') }}" alt="" class="d-flex ms-auto">
                        </div>
                        <div class="row mt-3">
                            <div class="col-5 align-self-center">
                                <div class="progress" style="height: 4px;">
                                    <div class="progress-bar bg-white progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Example 20px high"
                                        style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-7">
                                <p class="jmlsoal">20 Soal</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
