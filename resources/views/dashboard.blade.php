@extends('layouts.app')

@section('title', 'Dasbor Rekening Bank')

@section('contents')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- Kartu Dasbor dengan Desain Modern --}}
            <div class="card shadow-sm rounded-3 mb-4 animate__animated animate__fadeIn">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0">Selamat Datang, {{ Auth::user()->name }}!</h1>
                        <a href="{{ route('profile') }}" class="btn btn-outline-primary">
                            <i class="bi bi-person-circle"></i> Profil Saya
                        </a>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <a href="{{ route('profile') }}" class="card text-bg-primary h-100 stretched-link text-decoration-none animate__animated animate__zoomIn">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <h5 class="card-title text-white">Rekening Bank</h5>
                                    <p class="card-text text-white">
                                        Kelola rekening bank Anda dengan mudah dan aman.
                                    </p>
                                    <i class="bi bi-arrow-right text-white fs-3 mt-auto"></i>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <div class="card text-bg-success h-100 animate__animated animate__zoomIn animate__delay-1s">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <h5 class="card-title text-white">Transaksi Terakhir</h5>
                                    <p class="card-text text-white">
                                        Lihat riwayat transaksi terbaru Anda di sini.
                                    </p>
                                    <a href="#" class="btn btn-light stretched-link">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
