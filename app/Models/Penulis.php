<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penulis extends Model
{
    use HasFactory;

    protected $table = 'penuliss';
    protected $fillable = [
        'penulis'
    ];
}
