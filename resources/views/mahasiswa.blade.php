@extends('layouts.main')

@section('title', 'MAHASISWA')

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
        color: #c71154;
        letter-spacing: 1px;
    }

    .header p {
        color: #6b7280;
    }

    .stats-box {
        background: linear-gradient(135deg, #e40aad, #e40b94);
        color: white;
        padding: 20px;
        border-radius: 15px;
        text-align: center;
        margin-bottom: 25px;
        text-transform: uppercase;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .card-box {
        background: white;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        text-transform: uppercase;
    }

    table {
        border-radius: 10px;
        overflow: hidden;
    }

    thead {
        background: linear-gradient(135deg, #4f46e5, #3b82f6);
        color: white;
    }

    th, td {
        text-align: center;
        vertical-align: middle;
    }

    tbody tr {
        transition: 0.3s;
    }

    tbody tr:hover {
        background-color: #eef2ff;
        transform: scale(1.01);
    }

    .nim-badge {
        background: #e0e7ff;
        color: #4f46e5;
        padding: 5px 10px;
        border-radius: 8px;
        font-weight: bold;
    }
</style>

<div class="container py-5">

    <!-- HEADER -->
    <div class="header">
        <h1>DATA MAHASISWA</h1>
        <p>INFORMASI MAHASISWA AKTIF</p>
    </div>

    <!-- STATS -->
    <div class="stats-box">
        TOTAL MAHASISWA: {{ count($mahasiswa) }}
    </div>

    <!-- CARD -->
    <div class="card-box">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>NAMA MAHASISWA</th>
                    <th>JURUSAN</th>
                    <th>IPK</th>
                    <th>AKSI</th>
                </tr>
            </thead>

            <tbody>
                @foreach($mahasiswa as $m)
              <tr>    
                <td>{{ $m->id }}</td>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->jurusan }}</td>
                <td>{{ $m->ipk }}</td>
                <td>
                    <a href="/mahasiswa/{{ $m->id }}/edit" class="btn btn-warning btn-sm">
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