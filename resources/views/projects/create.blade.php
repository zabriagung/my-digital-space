@extends('layouts.main')

@section('title', 'Tambah Project')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">Tambah Project Baru</div>
            <div class="card-body">

                <form action="/projects" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Judul Project</label>
                        <input type="text"
                               name="judul"
                               class="form-control @error('judul') is-invalid @enderror"
                               value="{{ old('judul') }}">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi"
                                  class="form-control">{{ old('deskripsi') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teknologi</label>
                        <input type="text"
                               name="teknologi"
                               class="form-control"
                               placeholder="Contoh: Laravel, React">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                            <option value="">-- Pilih Status --</option>
                            <option value="ongoing" {{ old('status') == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                            <option value="selesai" {{ old('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Selesai</label>
                        <input type="date"
                               name="tanggal_selesai"
                               class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Simpan Project</button>
                    <a href="/" class="btn btn-secondary">Batal</a>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection