@extends('layouts.app')

@section('title', 'Profile')

@section('contents')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Profile Settings</h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" name="name" id="name" class="form-control" placeholder="First Name" value="{{ auth()->user()->name }}" {{ session('success') ? 'disabled' : '' }}>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="email" id="email" class="form-control" value="{{ auth()->user()->email }}" placeholder="Email" disabled>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" value="{{ auth()->user()->phone }}" {{ session('success') ? 'disabled' : '' }}>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" class="form-label">Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input type="text" name="address" id="address" class="form-control" placeholder="Address" value="{{ auth()->user()->address }}" {{ session('success') ? 'disabled' : '' }}>
                            </div>
                        </div>
                        <div class="text-center">
                            <button id="btn" class="btn btn-primary" type="submit" {{ session('success') ? 'disabled' : '' }}>Save Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .form-label {
        font-size: 1.1rem;
        font-weight: 500;
    }
    .input-group-text {
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 0.375rem 0 0 0.375rem;
    }
    .form-control {
        border-radius: 0.375rem;
        transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 5px rgba(128, 189, 255, 0.5);
    }
    .card {
        border-radius: 0.5rem;
        border: none;
    }
    .card-header {
        border-radius: 0.5rem 0.5rem 0 0;
    }
    .card-body {
        padding: 2rem;
    }
    .btn-primary {
        border-radius: 0.375rem;
        transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        box-shadow: 0 0 10px rgba(0, 86, 179, 0.3);
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        $('#profile_setup_frm').submit(function(event) {
            event.preventDefault();
            // Lakukan aksi yang sesuai, seperti pengiriman data melalui AJAX
            // atau navigasi ke halaman tertentu
            
            // Menonaktifkan semua input setelah form disubmit
            $('#profile_setup_frm input').prop('disabled', true);
            $('#btn').prop('disabled', true).text('Saving...'); // Mengubah teks tombol
        });
    });
</script>
@endpush
z