<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus';
    protected $fillable = [
        'judul', 
        'tipe_id', 
        'jenjang_id',
        'mapel_id', 
        'penerbit', 
        'ISBN', 
        'edisi', 
        'penulis', 
        'het', 
        'gambar'
    ];
}
