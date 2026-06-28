<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class projectseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'judul' => 'Website E-Commerce',
            'deskripsi' => 'Membangun toko online keranjang.',
            'teknologi' => 'Laravel & Bootstrap',
            'tanggal_selesai' => '2023-10-01'
        ]);
          Project::create([
            'judul' => 'Aplikasi Kasir',
            'deskripsi' => 'Sistem manajement invantaris toko kelontong.',
            'teknologi' => 'PHP Native',
            'tanggal_selesai' => '2023-12-15'
        ]);

        
    }
}