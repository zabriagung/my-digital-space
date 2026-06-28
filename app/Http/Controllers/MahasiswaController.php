<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    // ===========================
    // MAHASISWA
    // ===========================

    public function mahasiswa()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('mahasiswa', compact('mahasiswa'));
    }

    public function createMahasiswa()
    {
        return view('mahasiswa.create');
    }

    public function storeMahasiswa(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required|min:3',
            'jurusan' => 'required',
            'ipk' => 'required'
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'ipk' => $request->ipk
        ]);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data Mahasiswa berhasil disimpan');
    }

    // Menampilkan Form Edit Mahasiswa
    public function editMahasiswa($id)
    {
        $mahasiswa = DB::table('mahasiswa')
            ->where('id', $id)
            ->first();

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // Menyimpan Hasil Edit Mahasiswa
    public function updateMahasiswa(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required|min:3',
            'jurusan' => 'required',
            'ipk' => 'required'
        ]);

        DB::table('mahasiswa')
            ->where('id', $id)
            ->update([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'jurusan' => $request->jurusan,
                'ipk' => $request->ipk
            ]);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data Mahasiswa berhasil diperbarui');
    }

    // ===========================
    // BUKU
    // ===========================

    public function buku()
    {
        $buku = DB::table('buku')->get();
        return view('buku', compact('buku'));
    }

    public function createBuku()
    {
        return view('buku.create');
    }

    public function storeBuku(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:3',
            'penulis' => 'required',
            'tahun_terbit' => 'required'
        ]);

        DB::table('buku')->insert([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun_terbit' => $request->tahun_terbit
        ]);

        return redirect()->route('buku.index')
            ->with('success', 'Data Buku berhasil disimpan');
    }

    // Menampilkan Form Edit Buku
    public function editBuku($id)
    {
        $buku = DB::table('buku')
            ->where('id', $id)
            ->first();

        return view('buku.edit', compact('buku'));
    }

    // Menyimpan Hasil Edit Buku
    public function updateBuku(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|min:3',
            'penulis' => 'required',
            'tahun_terbit' => 'required'
        ]);

        DB::table('buku')
            ->where('id', $id)
            ->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'tahun_terbit' => $request->tahun_terbit
            ]);

        return redirect()->route('buku.index')
            ->with('success', 'Data Buku berhasil diperbarui');
    }
}