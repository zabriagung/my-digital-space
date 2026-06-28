<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\buku;

class bukuseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        buku::create([
            'judul' => 'Website E-Commerce',
            'penulis' => 'nopal',
            'tahun_terbit' => '2029',
        ]);
         buku::create([
            'judul' => 'malinkundang',
            'penulis' => 'anggi',
            'tahun_terbit' => '2000',
        ]);
        buku::create([
            'judul' => 'naruto',
            'penulis' => 'angga',
            'tahun_terbit' => '2099',
        ]);
        buku::create([
            'judul' => 'boruto',
            'penulis' => 'anton',
            'tahun_terbit' => '2000',
        ]);
        buku::create([
            'judul' => 'merahputih',
            'penulis' => 'deo',
            'tahun_terbit' => '1999',
        ]);
        buku::create([
            'judul' => 'siksa neraka',
            'penulis' => 'deo lahat',
            'tahun_terbit' => '1999',
        ]);
        buku::create([
            'judul' => 'kampus biru',
            'penulis' => 'rangga',
            'tahun_terbit' => '1945',
        ]);
        buku::create([
            'judul' => 'kisah lahat',
            'penulis' => 'nopal lahat',
            'tahun_terbit' => '1922',
        ]);
        buku::create([
            'judul' => 'kamus inggris',
            'penulis' => 'nopal inggris',
            'tahun_terbit' => '1290',
        ]);
        buku::create([
            'judul' => 'kamus indonesia',
            'penulis' => 'nopal indo',
            'tahun_terbit' => '2000',
        ]);
        

        
    }
}