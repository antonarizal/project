<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Tipe;
use App\Models\Edisi;
use App\Models\Mapel;
use App\Models\Jenjang;
use App\Models\Penulis;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();

        return view('admin.buku.index', compact('bukus'));
    }

    public function create()
    {
        $penulis = Penulis::all();
        $penerbit = Penerbit::all();
        $mapels = Mapel::all();
        $jenjangs = Jenjang::all();
        $tipes = Tipe::all();
        $edisis = Edisi::all();
        return view('admin.buku.create', compact('penulis', 'mapels', 'jenjangs', 'tipes', 'edisis', 'penerbit'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'penulis_id' => 'required|exists:penuliss,id',
            'penerbit_id' => 'required|exists:penerbits,id',
            'jenjang_id' => 'required|exists:jenjangs,id',
            'mapel_id' => 'required|exists:mapels,id',
            'tipe_id' => 'required|exists:tipes,id',
            'isbn' => 'required|string|max:20',
            'het' => 'required|numeric',
            'edisi_id' => 'nullable|exists:edisis,id',
            'gambar' => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('storage', 'public');
            $data['gambar'] = $path;
        }

        Buku::create($data);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }


    public function show(string $id)
    {
        $buku = Buku::find($id);

        return view('admin.buku.show', compact('buku'));
    }

    public function edit(string $id)
    {
        $buku = Buku::find($id);
        $penulis = Penulis::all();
        $penerbit = Penerbit::all();
        $mapels = Mapel::all();
        $jenjangs = Jenjang::all();
        $tipes = Tipe::all();
        $edisis = Edisi::all();
        return view('admin.buku.edit', compact('buku', 'penulis', 'mapels', 'jenjangs', 'tipes', 'edisis', 'penerbit'));
    }

    public function update(Request $request, Buku $buku){
        $request->validate([
            'nama' => 'required|string|max:255',
            'penulis_id' => 'required|exists:penuliss,id',
            'penerbit_id' => 'required|exists:penerbits,id',
            'jenjang_id' => 'required|exists:jenjangs,id',
            'mapel_id' => 'required|exists:mapels,id',
            'tipe_id' => 'required|exists:tipes,id',
            'isbn' => 'nullable|string|max:20',
            'het' => 'nullable|numeric',
            'edisi_id' => 'required|exists:edisis,id',
            'gambar' => 'nullable|mimes:jpg,jpeg,png',
        ]);
    
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('storage', 'public');
            $data['gambar'] = $path;
        }

        Buku::create($data);
    
        return redirect()->route('buku.edit', $buku->id)->with('success', 'Buku berhasil diupdate.');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
