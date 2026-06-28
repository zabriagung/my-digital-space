<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; // nama tabel di database

    protected $fillable = [
        'nim',
        'nama',
        'jurusan',
        'ipk',
    ];
}