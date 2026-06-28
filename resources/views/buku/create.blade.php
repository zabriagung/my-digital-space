@extends('layouts.main')

@section('title', 'Tambah Buku')

@section('content')

<div class="container mt-5">

    <h2>Tambah Buku</h2>

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul') }}">
        </div>

        <div class="mb-3">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control" value="{{ old('penulis') }}">
        </div>

        <div class="mb-3">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" value="{{ old('tahun_terbit') }}">
        </div>

        <button type="submit" class="btn btn-danger">
            Simpan
        </button>

    </form>

</div>

@endsection