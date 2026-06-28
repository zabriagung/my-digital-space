@extends('layouts.main')

@section('title', 'Edit Project')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">

            <div class="card-header bg-primary text-white">
                Edit Project Anda
            </div>

            <div class="card-body">

                <form action="/projects/{{ $project->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Judul Project</label>
                        <input
                            type="text"
                            name="judul"
                            class="form-control @error('judul') is-invalid @enderror"
                            value="{{ $project->judul }}">

                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea
                            name="deskripsi"
                            class="form-control">{{ $project->deskripsi }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teknologi</label>
                        <input
                            type="text"
                            name="teknologi"
                            class="form-control"
                            value="{{ $project->teknologi }}"
                            placeholder="Contoh: Laravel, React">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Selesai</label>
                        <input
                            type="date"
                            name="tanggal_selesai"
                            class="form-control"
                            value="{{ $project->tanggal_selesai }}">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Update Project
                    </button>

                    <a href="/" class="btn btn-secondary">
                        Batal
                    </a>

                </form>

            </div>

        </div>
    </div>
</div>
@endsection