@extends('layouts.main')

@section('title', 'Tentang Saya')

@section('content')

<div class="container py-5">

    <!-- TITLE -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Tentang Saya</h2>
        <p class="text-muted">Perkenalan singkat</p>
    </div>

    <!-- CARD PROFILE -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow text-center p-4">

                <!-- FOTO -->
                <img src="{{ asset('img/foto.png') }}" 
                     class="rounded-circle mx-auto d-block mb-3"
                     style="width: 150px; height: 150px; object-fit: cover;"
                     alt="Foto Profil">

                <!-- DATA -->
                <h4 class="fw-bold">Zabri Agung Pratama</h4>
                <p class="text-muted mb-3">Mahasiswa</p>

                <hr>

                <div class="text-start">
                    <p class="mb-2"><strong>NIM:</strong> 2455202029</p>
                    <p class="mb-2"><strong>Hobi:</strong> Membaca Buku</p>
                </div>

                <!-- BUTTON -->
                <a href="/beranda" class="btn btn-success mt-3">
                    ← Kembali ke Beranda
                </a>

            </div>
        </div>
    </div>

</div>

@endsection