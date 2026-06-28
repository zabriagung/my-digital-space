<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = 'buku'; // nama tabel di database

    protected $fillable = [
        'judul',
        'penulis',
        'tahun_terbit',
    ];
}