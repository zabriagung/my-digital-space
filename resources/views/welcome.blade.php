@extends('layouts.main')

@section('title', 'BERANDA')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #eef2ff, #f8f9fa);
    }

    .hero {
        background: linear-gradient(135deg, #e33cb7, #f63be3);
        color: white;
        padding: 60px 30px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        text-transform: uppercase;
    }

    .btn-custom {
        background: white;
        color: #ef539c;
        border-radius: 30px;
        padding: 10px 25px;
        font-weight: bold;
        transition: 0.3s;
        text-transform: uppercase;
    }

    .btn-custom:hover {
        background: #e0e7ff;
        transform: scale(1.05);
    }

    .card {
        border: none;
        border-radius: 20px;
        transition: 0.3s;
        background: white;
        text-transform: uppercase;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .card-title {
        font-weight: bold;
        color: #e850bf;
    }
</style>

<div class="container py-5">

    <!-- HERO -->
    <div class="hero mb-5">
        <h1>SELAMAT DATANG DI PORTOFOLIO NAMA SAYA {{ $namaLengkap }}</h1>
        
        <p class="mt-3">
            SAYA ADALAH MAHASISWA {{ $pengunjung }} YANG SEDANG MENDALAMI FLAMEWORK LARAVEL UNTUK MEMBANGUN APLIKASI WEB MODERN
        </p>

        <a href="/about" class="btn btn-custom mt-3">
            KENALI SAYA LEBIH JAUH DENGAN HTML SAYA {{ strtoupper($skills[0]) }}
        </a>
       <a href="/mahasiswa" class="btn btn-custom mt-3">
           Daftar Mahasiswa
        </a>

        <a href="/buku" class="btn btn-custom mt-3">
            Daftar Buku 
        </a>
        
    </div>

    <!-- CARD -->
    <div class="row text-center g-4">

        <div class="col-md-4">
            <div class="card p-4">
                <div class="card-body">
                    <h5 class="card-title">PENDIDIKAN</h5>
                    <p>SEDANG MENEMPUH S1 TEKNIK INFORMATIKA</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4">
                <div class="card-body">
                    <h5 class="card-title">SKILL</h5>
                    <p>{{ strtoupper(implode(', ', $skills)) }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4">
                <div class="card-body">
                    <h5 class="card-title">VISI</h5>
                    <p>MENJADI FULLSTACK DEVELOPER HANDAL</p>
                </div>
            </div>
        </div>

    </div>

</div>

<h3 class="mt-5">Project Saya</h3>

<a href="/projects/create" class="btn btn-success btn-sm">
    <i class="bi bi-plus-circle"></i> Project Baru
</a>

<hr>

<div class="row mt-3">
    @foreach($projects as $p)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">

                <div class="card-body">
                    <h5 class="card-title">{{ $p->judul }}</h5>

                    <span class="badge bg-info">
                        {{ $p->teknologi }}
                    </span>

                    <p class="card-text mt-3">
                        {{ $p->deskripsi }}
                    </p>

                    <small class="text-muted d-block mb-3">
                        Selesai: {{ $p->tanggal_selesai }}
                    </small>

                    <a href="/projects/{{ $p->id }}/edit"
                        class="btn btn-warning btn-sm">
                        Edit
                    </a>
                    <form action="/projects/{{ $p->id }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')

        <button type="submit"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin ingin menghapus data ini?')">
            Hapus
        </button>
    </form>

                </div>

            </div>
        </div>
    @endforeach
</div>






@endsection