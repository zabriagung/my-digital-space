@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="container py-4">

    <!-- Hero -->
    <div class="p-5 mb-5 rounded-4 text-white shadow"
        style="background: linear-gradient(135deg,#ff2d95,#7b2ff7);">

        <h2 class="fw-bold">
            👋 Selamat Datang, {{ Auth::user()->name }}
        </h2>

        <p class="mb-0">
            Selamat datang kembali di <b>MyDigitalSpace</b>.
            Kelola Project, Mahasiswa, dan Buku dengan mudah.
        </p>

    </div>

    <!-- Statistik -->
    <div class="row g-4">

        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow text-center h-100">
                <div class="card-body">
                    <div style="font-size:50px;">📂</div>
                    <h5 class="mt-2">Project</h5>
                    <h2 class="text-primary fw-bold">{{ DB::table('projects')->count() }}</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow text-center h-100">
                <div class="card-body">
                    <div style="font-size:50px;">👨‍🎓</div>
                    <h5 class="mt-2">Mahasiswa</h5>
                    <h2 class="text-success fw-bold">{{ DB::table('mahasiswa')->count() }}</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow text-center h-100">
                <div class="card-body">
                    <div style="font-size:50px;">📚</div>
                    <h5 class="mt-2">Buku</h5>
                    <h2 class="text-warning fw-bold">{{ DB::table('buku')->count() }}</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow text-center h-100">
                <div class="card-body">
                    <div style="font-size:50px;">👤</div>
                    <h5 class="mt-2">User</h5>
                    <h2 class="text-danger fw-bold">{{ DB::table('users')->count() }}</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- Quick Menu -->
    <div class="card border-0 shadow mt-5">
        <div class="card-header bg-white">
            <h4>⚡ Quick Menu</h4>
        </div>

        <div class="card-body">

            <a href="/projects/create" class="btn btn-primary me-2">
                ➕ Project
            </a>

            <a href="/mahasiswa/create" class="btn btn-success me-2">
                👨‍🎓 Mahasiswa
            </a>

            <a href="/buku/create" class="btn btn-warning text-white">
                📚 Buku
            </a>

        </div>
    </div>

    <!-- Informasi -->
    <div class="card border-0 shadow mt-4">
        <div class="card-header bg-white">
            <h4>📋 Informasi Akun</h4>
        </div>

        <div class="card-body">

            <table class="table">

                <tr>
                    <th>Nama</th>
                    <td>{{ Auth::user()->name }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ Auth::user()->email }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        <span class="badge bg-success">
                            Online
                        </span>
                    </td>
                </tr>

            </table>

        </div>
    </div>

</div>

@endsection