<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $mapels = mapel::all();

        return view('admin.mapel.index',compact('mapels'));
    }

    public function create()
    {
        return view('admin.mapel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mapel' => 'required|string|max:255',
        ]);

        Mapel::create($request->all());

        return redirect()->route('mapel.index')->with('success', 'mapel berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $mapel = Mapel::find($id);

        return view('admin.mapel.show', compact('mapel'));
    }

    public function edit(string $id)
{
    $mapel = Mapel::find($id);
    return view('admin.mapel.edit', compact('mapel'));
}


    public function update(Request $request, Mapel $mapel)
    {
        // Validasi input
        $request->validate([
            'mapel' => 'required|string|max:255',
        ]);
    
        $mapel->update($request->all());
    
        return redirect()->route('mapel.edit', $mapel->id)->with('success', 'mapel berhasil diupdate.');
    }

    public function destroy(Mapel $mapel)
    {
        $mapel->delete();
        return redirect()->route('mapel.index')->with('success', 'mapel berhasil dihapus.');
    }
}
