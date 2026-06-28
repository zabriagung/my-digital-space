<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProfileController extends Controller
{
   public function index(Request $request)
{
    $projects = Project::all();

    $pengunjung = $request->query('nama', 'Tamu');
    $namaLengkap = "ZabriAgungPratama";

    $nim = "2455200229";
    $tempat_lahir = "Pagaralam";
    $alamat = "Nendagung";
    $no_wa = "085866187963";

    $skills = ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel'];

    return view('beranda', compact(
        'namaLengkap',
        'pengunjung',
        'skills',
        'projects',
        'nim',
        'tempat_lahir',
        'alamat',
        'no_wa'
    ));
}
public function mahasiswa()
{
    $mahasiswa = DB::table('mahasiswa')->get();

    return view('mahasiswa', compact('mahasiswa'));
}

public function buku()
{
    $buku = DB::table('buku')->get();

    return view('buku', compact('buku'));
}
}