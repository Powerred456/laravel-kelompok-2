@extends('layouts.app')

@section('title', 'Detail data Bank Rekening')

@section('contents')
<div class="container py-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Detail Data Bank Rekening</h2>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold text-secondary">Kode Bank Rekening</label>
                        <input type="text" class="form-control bg-light" value="{{ $product->kode_bank_rekening }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-secondary">Nama Bank Rekening</label>
                        <input type="text" class="form-control bg-light" value="{{ $product->nama_bank_rekening }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold text-secondary">Nomor Rekening</label>
                        <input type="text" class="form-control bg-light" value="{{ $product->nomor_rekening }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-secondary">Nama Pemilik Rekening</label>
                        <input type="text" class="form-control bg-light" value="{{ $product->nama_pemilik_rekening }}" readonly>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold text-secondary">Cabang Bank</label>
                        <input type="text" class="form-control bg-light" value="{{ $product->cabang_bank }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-secondary">Mata Uang</label>
                        <input type="text" class="form-control bg-light" value="{{ $product->mata_uang }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold text-secondary">Created At</label>
                        <input type="text" class="form-control bg-light" value="{{ $product->created_at }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-secondary">Updated At</label>
                        <input type="text" class="form-control bg-light" value="{{ $product->updated_at }}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .form-label {
        font-size: 1rem;
    }
    .form-control {
        border-radius: 0.5rem;
        border: 1px solid #ced4da;
        transition: all 0.3s ease-in-out;
    }
    .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 5px rgba(128, 189, 255, 0.5);
    }
    .card {
        border-radius: 1rem;
        border: none;
    }
    .card-header {
        border-radius: 1rem 1rem 0 0;
    }
    .card-body {
        padding: 2rem;
    }
    .container {
        max-width: 900px;
    }
    .mb-3 {
        margin-bottom: 1.5rem !important;
    }
</style>
@endsection
