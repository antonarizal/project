<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Tipe;
use App\Models\Mapel;
use App\Models\Jenjang;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function katalog()
    {
        // Ambil semua data buku dari tabel
        $bukuList = Buku::all();
        $mapelList = Mapel::all();
        $tipeList = Tipe::all();
        $jenjangList = Jenjang::all();

        // Kirim data ke view
        return view('katalog', [
            'bukuList' => $bukuList, 
            'mapelList' => $mapelList,
            'tipeList' => $tipeList,
            'jenjangList' => $jenjangList,
        ]);
    }
}
