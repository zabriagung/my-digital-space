@extends('layouts.main')

@section('title', 'BUKU')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #eef2ff, #f8f9fa);
    }

    .header {
        text-align: center;
        margin-bottom: 40px;
        text-transform: uppercase;
    }

    .header h1 {
        font-weight: bold;
        color: #ea00f2;
    }

    .card-box {
        background: white;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        text-transform: uppercase;
    }

    thead {
        background: linear-gradient(135deg, #4f46e5, #3b82f6);
        color: white;
    }

    th, td {
        text-align: center;
    }

    tbody tr:hover {
        background-color: #eef2ff;
    }
</style>

<div class="container py-5">

    <div class="header">
        <h1>DATA BUKU</h1>
        <p>DAFTAR  BUKU</p>
    </div>

    <div class="card-box">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>JUDUL</th>
                    <th>PENGARANG</th>
                    <th>TAHUN TERBIT</th>
                    <th>AKSI</th>
                </tr>
            </thead>

            <tbody>
                @foreach($buku as $b)
                <tr>
                    <td>{{ $b->id}}</td>
                    <td>{{ $b->judul}}</td>
                    <td>{{ $b->penulis}}</td>
                    <td>{{ $b->tahun_terbit}}</td>
                    
                
                <td>
                    <a href="/buku/{{ $b->id }}/edit" class="btn btn-warning btn-sm">
                     Edit
                    </a>
                </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</div>

@endsection