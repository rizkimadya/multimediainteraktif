@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card py-3 px-4 mb-4">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Materi</h5>
                        <span class="h2 font-weight-bold mb-0">350+</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap d-flex justify-content-center">---- Jumlah Materi ----</span>
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card py-3 px-4 mb-4">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Video</h5>
                        <span class="h2 font-weight-bold mb-0">350,123+</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                            <i class="ni ni-camera-compact"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap d-flex justify-content-center">---- Jumlah Video ----</span>
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card py-3 px-4 mb-4">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Evaluasi</h5>
                        <span class="h2 font-weight-bold mb-0">123+</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                            <i class="ni ni-chart-pie-35"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap d-flex justify-content-center">---- Jumlah Evaluasi ----</span>
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card py-3 px-4 mb-4">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">D Pustaka</h5>
                        <span class="h2 font-weight-bold mb-0">123,12+</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                            <i class="ni ni-single-copy-04"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap d-flex justify-content-center">-- Jumlah Daftar Pustaka --</span>
                </p>
            </div>
        </div>
    </div>
@endsection
