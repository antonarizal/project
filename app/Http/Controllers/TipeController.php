<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    public function index()
    {
        $tipes = Tipe::all();

        return view('admin.tipe.index',compact('tipes'));
    }

    public function create()
    {
        return view('admin.tipe.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe' => 'required|string|max:255',
        ]);

        Tipe::create($request->all());

        return redirect()->route('tipe.index')->with('success', 'tipe berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $tipe = Tipe::find($id);

        return view('admin.tipe.show', compact('tipe'));
    }

    public function edit(string $id)
{
    $tipe = Tipe::find($id);
    return view('admin.tipe.edit', compact('tipe'));
}


    public function update(Request $request, Tipe $tipe)
    {
        // Validasi input
        $request->validate([
            'tipe' => 'required|string|max:255',
        ]);
    
        $tipe->update($request->all());
    
        return redirect()->route('tipe.edit', $tipe->id)->with('success', 'tipe berhasil diupdate.');
    }

    public function destroy(Tipe $tipe)
    {
        $tipe->delete();
        return redirect()->route('tipe.index')->with('success', 'tipe berhasil dihapus.');
    }
}
