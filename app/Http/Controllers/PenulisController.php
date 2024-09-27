<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function index()
    {
        $penuliss = Penulis::all();

        return view('admin.penulis.index',compact('penuliss'));
    }

    public function create()
    {
        return view('admin.penulis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'penulis' => 'required|string|max:255',
        ]);

        Penulis::create($request->all());

        return redirect()->route('penulis.index')->with('success', 'penulis berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $penulis = Penulis::find($id);

        return view('admin.penulis.show', compact('penulis'));
    }

    public function edit(string $id)
{
    $penulis = Penulis::find($id);
    return view('admin.penulis.edit', compact('penulis'));
}


    public function update(Request $request, Penulis $penulis)
    {
        // Validasi input
        $request->validate([
            'penulis' => 'required|string|max:255',
        ]);
    
        $penulis->update($request->all());
    
        return redirect()->route('penulis.edit', $penulis->id)->with('success', 'penulis berhasil diupdate.');
    }

    public function destroy(Penulis $penulis)
    {
        $penulis->delete();
        return redirect()->route('penulis.index')->with('success', 'penulis berhasil dihapus.');
    }
}
