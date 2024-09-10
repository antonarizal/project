<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id)
    {
        // Cari buku berdasarkan ID
        $buku = Buku::findOrFail($id);

        // Kirim data ke view
        return view('detail', [
            'buku' => $buku, 
            'title' => 'Detail Buku'
        ]);
    }
}
