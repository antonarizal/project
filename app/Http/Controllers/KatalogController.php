<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Mapel;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function katalog()
    {
        // Ambil semua data buku dari tabel
        $bukuList = Buku::all();
        $mapelList = Mapel::all();

        // Kirim data ke view
        return view('katalog', [
            'bukuList' => $bukuList, 
            'mapelList' => $mapelList
        ]);
    }
}
