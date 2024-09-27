<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $fillable = [
        'nama', 
        'tipe_id', 
        'jenjang_id',
        'mapel_id', 
        'penerbit_id', 
        'isbn', 
        'edisi_id', 
        'penulis_id', 
        'het', 
        'gambar',
    ];
    public function tipe() {
        return $this->belongsTo(Tipe::class);
    }
    public function jenjang() {
        return $this->belongsTo(Jenjang::class);
    }
    public function mapel() {
        return $this->belongsTo(Mapel::class);
    }
    public function penerbit() {
        return $this->belongsTo(Penerbit::class);
    }
    public function edisi() {
        return $this->belongsTo(Edisi::class);
    }
    public function penulis() {
        return $this->belongsTo(Penulis::class);
    }
}