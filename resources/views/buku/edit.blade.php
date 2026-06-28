@extends('layouts.main')

@section('title', 'Edit Buku')

@section('content')

<div class="container mt-5">

    <h2>Edit Buku</h2>

    <form action="/buku/{{ $buku->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text"
                   name="judul"
                   class="form-control"
                   value="{{ old('judul', $buku->judul) }}">
        </div>

        <div class="mb-3">
            <label>Penulis</label>
            <input type="text"
                   name="penulis"
                   class="form-control"
                   value="{{ old('penulis', $buku->penulis) }}">
        </div>

        <div class="mb-3">
            <label>Tahun Terbit</label>
            <input type="number"
                   name="tahun_terbit"
                   class="form-control"
                   value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">
        </div>

        <button type="submit" class="btn btn-warning">
            Update
        </button>

        <a href="/buku" class="btn btn-secondary">
            Batal
        </a>

    </form>

</div>

@endsection