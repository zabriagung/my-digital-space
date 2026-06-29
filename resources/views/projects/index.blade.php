@extends('layouts.main')

@section('title', 'Project')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="fw-bold">Daftar Project</h2>

        <a href="{{ route('projects.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            Tambah Project
        </a>

    </div>

    @if(session('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{ session('success') }}

        <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>

    @endif

    <div class="card shadow">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover mb-0">

                    <thead class="table-light">

                        <tr>

                            <th class="px-4 py-3">Nama Project</th>

                            <th class="py-3">Deskripsi</th>

                            <th class="py-3">Teknologi</th>

                            <th class="py-3 text-center">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse ($projects as $p)

                        <tr>

                            <td class="px-4 py-3 fw-semibold">
                                {{ $p->judul }}
                            </td>

                            <td class="py-3 text-muted">
                                {{ Str::limit($p->deskripsi, 50) }}
                            </td>

                            <td class="py-3">
                                <span class="badge bg-info text-dark">
                                    {{ $p->teknologi }}
                                </span>
                            </td>

                            <td class="py-3 text-center">

                                <div class="btn-group">

                                    {{-- Tombol Edit --}}

                                    <a href="{{ route('projects.edit', $p->id) }}"
                                        class="btn btn-sm btn-outline-warning">
                                        Edit
                                    </a>

                                    {{-- Tombol Hapus --}}

                                    <form
                                        action="{{ route('projects.destroy', $p->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus project ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger ms-1">
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="4" class="text-center py-5 text-muted">

                                Belum ada project.
                                Klik tombol tambah untuk memulai.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection