@extends('layouts.main')

@section('title', 'Edit Mahasiswa')

@section('content')

<div class="container mt-5">

    <h2>Edit Mahasiswa</h2>

    <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>NIM</label>
            <input type="text"
                   name="nim"
                   class="form-control"
                   value="{{ old('nim', $mahasiswa->nim) }}">

            @error('nim')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text"
                   name="nama"
                   class="form-control"
                   value="{{ old('nama', $mahasiswa->nama) }}">

            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text"
                   name="jurusan"
                   class="form-control"
                   value="{{ old('jurusan', $mahasiswa->jurusan) }}">

            @error('jurusan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label>IPK</label>
            <input type="number"
                   step="0.01"
                   name="ipk"
                   class="form-control"
                   value="{{ old('ipk', $mahasiswa->ipk) }}">

            @error('ipk')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-warning">
            Update
        </button>

        <a href="/mahasiswa" class="btn btn-secondary">
            Batal
        </a>

    </form>

</div>

@endsection