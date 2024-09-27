<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Edisi extends Model
{
    use HasFactory;

    protected $table = 'edisis';
    protected $fillable = [
        'edisi'
    ];
}
