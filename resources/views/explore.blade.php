@extends('layouts.app') <!-- Menggunakan layout utama -->

@section('title', 'Explore') <!-- Menambahkan judul halaman -->

@section('content')
<div class="container my-4">
    <!-- Bagian Pencarian -->
    <div class="row justify-content-between align-items-center">
        <div class="col-md-12">
            <div class="input-group">
                <span class="input-group-text bg-transparent border-end-0">🔍</span>
                <input type="text" class="form-control border-start-0" placeholder="Cari">
            </div>
        </div>
        <div class="col-md-12 text-end">
            <a href="#" class="filter-icon">⚙️ Filter</a>
        </div>
    </div>

    <!-- Hasil Pencarian -->
    <h5 class="mt-4">Hasil</h5>
    <div class="row">
        <!-- Loop untuk Data Klinik -->
        @foreach ($clinics as $clinic)
        <div class="col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="{{ $clinic['image'] }}" class="card-img-top" alt="{{ $clinic['name'] }}">
                <div class="card-body">
                    <h6 class="card-title">{{ $clinic['name'] }}</h6>
                    <p class="mb-1"><span>{{ $clinic['rating'] }} ⭐</span></p>
                    <p class="mb-1">{{ $clinic['address'] }}</p>
                    <p class="mb-1">Open {{ $clinic['hours'] }}</p>
                    <p class="text-muted">{{ $clinic['phone'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</div>
@endsection
