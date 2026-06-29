<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // 1. Menampilkan Form Tambah Project
    public function create()
    {
        return view('projects.create');
    }

    // 2. Menyimpan Data Baru
    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|min:5',
        'deskripsi' => 'required',
        'teknologi' => 'required',
        'tanggal_selesai' => 'required|date',
    ]);

    Project::create($request->all());

    return redirect('/')
        ->with('success', 'Project baru berhasil ditambahkan!');
}


    // 3. Menampilkan Form Edit
    public function edit($id)
    {
        // Cari project berdasarkan ID
        $project = Project::findOrFail($id);

        // Kirim data ke halaman edit
        return view('projects.edit', compact('project'));
    }

    // 4. Menyimpan Hasil Edit
    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'judul' => 'required|min:5',
            'deskripsi' => 'required',
            'teknologi' => 'required',
            'tanggal_selesai' => 'required|date',
        ]);

        // Cari project berdasarkan ID
        $project = Project::findOrFail($id);

        // Update data
        $project->update($request->all());

        // Kembali ke halaman utama
        return redirect('/')
            ->with('success', 'Project berhasil diperbarui!');
    }
    public function destroy($id)
{
    $project = Project::findOrFail($id);

    $project->delete();

    return redirect('/')
        ->with('success', 'Project berhasil dihapus!');
}
public function index()
{
    $all_projects = Project::orderBy('created_at', 'desc')->get();

    return view('projects.index', [
        'projects' => $all_projects
    ]);
}
}
