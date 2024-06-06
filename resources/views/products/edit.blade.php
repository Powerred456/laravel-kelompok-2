@extends('layouts.app')

@section('contents')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm rounded-3">
                    <div class="card-header bg-primary text-white text-center py-3" style="font-family: 'Montserrat', sans-serif;">
                        <h2 class="mb-0 fw-bold">Edit Data Bank Rekening</h2>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="kodeBank" class="form-label">Kode Bank</label>
                                <div class="input-group">
                                    <span class="input-group-text" style="background-color: #e9ecef;"><i class="bi bi-credit-card"></i></span>
                                    <input type="text" name="kode_bank_rekening" class="form-control" id="kodeBank" placeholder="Kode Bank" value="{{ old('kode_bank_rekening', $product->kode_bank_rekening) }}" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="namaBank" class="form-label">Nama Bank</label>
                                <div class="input-group">
                                    <span class="input-group-text" style="background-color: #e9ecef;"><i class="bi bi-bank"></i></span>
                                    <input type="text" name="nama_bank_rekening" class="form-control" id="namaBank" placeholder="Nama Bank" value="{{ old('nama_bank_rekening', $product->nama_bank_rekening) }}" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nomorRekening" class="form-label">Nomor Rekening</label>
                                <div class="input-group">
                                    <span class="input-group-text" style="background-color: #e9ecef;"><i class="bi bi-credit-card-2-front"></i></span>
                                    <input type="text" name="nomor_rekening" class="form-control" id="nomorRekening" placeholder="Nomor Rekening" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="{{ old('nomor_rekening', $product->nomor_rekening) }}" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="namaPemilik" class="form-label">Nama Pemilik Rekening</label>
                                <div class="input-group">
                                    <span class="input-group-text" style="background-color: #e9ecef;"><i class="bi bi-person"></i></span>
                                    <input type="text" name="nama_pemilik_rekening" class="form-control" id="namaPemilik" placeholder="Nama Pemilik Rekening" value="{{ old('nama_pemilik_rekening', $product->nama_pemilik_rekening) }}" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="cabangBank" class="form-label">Cabang Bank</label>
                                <div class="input-group">
                                    <span class="input-group-text" style="background-color: #e9ecef;"><i class="bi bi-shop"></i></span>
                                    <input type="text" name="cabang_bank" class="form-control" id="cabangBank" placeholder="Cabang Bank" value="{{ old('cabang_bank', $product->cabang_bank) }}">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="mataUang" class="form-label">Mata Uang</label>
                                <select name="mata_uang" class="form-select" id="mataUang">
                                    <option value="IDR" {{ old('mata_uang', $product->mata_uang) == 'IDR' ? 'selected' : '' }}>IDR</option>
                                    <option value="USD" {{ old('mata_uang', $product->mata_uang) == 'USD' ? 'selected' : '' }}>USD</option>
                                    <option value="EUR" {{ old('mata_uang', $product->mata_uang) == 'EUR' ? 'selected' : '' }}>EUR</option>
                                    <option value="SGD" {{ old('mata_uang', $product->mata_uang) == 'SGD' ? 'selected' : '' }}>SGD</option>
                                    <option value="MYR" {{ old('mata_uang', $product->mata_uang) == 'MYR' ? 'selected' : '' }}>MYR</option>
                                    <option value="JPY" {{ old('mata_uang', $product->mata_uang) == 'JPY' ? 'selected' : '' }}>JPY</option>
                                </select>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
