<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edisi extends Model
{
    use HasFactory;

    protected $table = 'edisis';
    protected $fillable = [
        'edisi'
    ];
}
