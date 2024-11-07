<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Tipe;
use App\Models\Mapel;
use App\Models\Jenjang;
use App\Models\Penulis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bukus = Buku::all();

        // dd($bukus);
        return view('buku.index',compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $penulis = Penulis::all();
        $mapels = Mapel::all();
        $jenjangs = Jenjang::all();
        $tipes = Tipe::all();
        return view('buku.create',compact('penulis','mapels','jenjangs','tipes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'gambar' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $path = $request->file('gambar')->store('gambar', 'public');
        $data = $request->except('_token');
        $storedFileName = basename($path);
        $orifilename = $request->file('gambar')->getClientOriginalName();
        $data["gambar"] = $storedFileName;

        $insert = Buku::insert($data);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $buku = Buku::find($id);

        return view('buku.show',compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $buku = Buku::find($id);
        $penulis = Penulis::all();
        $mapels = Mapel::all();
        $jenjangs = Jenjang::all();
        $tipes = Tipe::all();
        return view('buku.edit',compact('buku','penulis','mapels','jenjangs','tipes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        //
        $buku->update($request->all());
        return redirect()->route('buku.edit',$buku->id)->with('success', 'Buku berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    $buku->delete();
    return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
