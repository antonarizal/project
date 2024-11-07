<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'penulis_id',
        'mapel_id',
        'jenjang_id',
        'tipe_id',
        'isbn',
        'edisi',
        'gambar',
    ];

    /**
     * Get the user that owns the Buku
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipe(): BelongsTo
    {
        return $this->belongsTo(Tipe::class);
    }
    public function jenjang(): BelongsTo
    {
        return $this->belongsTo(Jenjang::class);
    }
    public function mapel(): BelongsTo
    {
        return $this->belongsTo(Mapel::class);
    }
    public function penulis(): BelongsTo
    {
        return $this->belongsTo(Penulis::class);
    }
}
