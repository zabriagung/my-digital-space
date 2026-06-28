<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mahasiswa;

class mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        mahasiswa::create([
            'nim' => '2455202021',
            'nama' => 'anton',
            'jurusan' => 'TeknikInformatika',
            'ipk' => '4.00'
        ]);
         mahasiswa::create([
            'nim' => '2455202022',
            'nama' => 'meli',
            'jurusan' => 'Tekniksipil',
            'ipk' => '3.3'
        ]);
         mahasiswa::create([
            'nim' => '2455202023',
            'nama' => 'jek',
            'jurusan' => 'TeknikInformatika',
            'ipk' => '3.9'
        ]);
         mahasiswa::create([
            'nim' => '2455202024',
            'nama' => 'nopal',
            'jurusan' => 'TeknikInformatika',
            'ipk' => '4.00'
        ]);
         mahasiswa::create([
            'nim' => '2455202025',
            'nama' => 'deo',
            'jurusan' => 'TeknikInformatika',
            'ipk' => '4.00'
        ]);
         mahasiswa::create([
            'nim' => '2455202026',
            'nama' => 'kia',
            'jurusan' => 'TeknikInformatika',
            'ipk' => '4.00'
        ]);
         mahasiswa::create([
            'nim' => '2455202027',
            'nama' => 'dina',
            'jurusan' => 'TeknikInformatika',
            'ipk' => '4.00'
        ]);
         mahasiswa::create([
            'nim' => '2455202028',
            'nama' => 'andika',
            'jurusan' => 'TeknikInformatika',
            'ipk' => '4.00'
        ]);
         mahasiswa::create([
            'nim' => '2455202029',
            'nama' => 'rangga',
            'jurusan' => 'TeknikInformatika',
            'ipk' => '4.00'
        ]);
         mahasiswa::create([
            'nim' => '2455202030',
            'nama' => 'zhannu',
            'jurusan' => 'TeknikInformatika',
            'ipk' => '4.00'
        ]);

        
    }
}