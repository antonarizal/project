<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jenjang extends Model
{
    use HasFactory;

    protected $table = 'jenjangs';
    protected $fillable = [
        'jenjang'
    ];
}
