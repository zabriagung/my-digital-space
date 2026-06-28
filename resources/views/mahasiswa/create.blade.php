@extends('layouts.main')

@section('title', 'Tambah Mahasiswa')

@section('content')

<div class="container mt-5">

    <h2>Tambah Mahasiswa</h2>

    <form action="/mahasiswa/store" method="POST">
        @csrf

        <div class="mb-3">
            <label>NIM</label>
            <input type="text"
                   name="nim"
                   class="form-control"
                   value="{{ old('nim') }}">

            @error('nim')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text"
                   name="nama"
                   class="form-control"
                   value="{{ old('nama') }}">

            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text"
                   name="jurusan"
                   class="form-control"
                   value="{{ old('jurusan') }}">

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
                   value="{{ old('ipk') }}">

            @error('ipk')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

    </form>

</div>

@endsection