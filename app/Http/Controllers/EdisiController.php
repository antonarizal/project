<?php

namespace App\Http\Controllers;

use App\Models\Edisi;
use Illuminate\Http\Request;

class EdisiController extends Controller
{
    public function index()
    {
        $edisis = Edisi::all();

        return view('admin.edisi.index',compact('edisis'));
    }

    public function create()
    {
        return view('admin.edisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'edisi' => 'required|string|max:255',
        ]);

        Edisi::create($request->all());

        return redirect()->route('edisi.index')->with('success', 'Edisi berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $edisi = Edisi::find($id);

        return view('admin.edisi.show', compact('edisi'));
    }

    public function edit(string $id)
    {
    $edisi = Edisi::find($id);
    return view('admin.edisi.edit', compact('edisi'));
    }

    public function update(Request $request, Edisi $edisi)
    {
        // Validasi input
        $request->validate([
            'edisi' => 'required|string|max:255',
        ]);
    
        $edisi->update($request->all());
    
        return redirect()->route('edisi.edit', $edisi->id)->with('success', 'edisi berhasil diupdate.');
    }

    public function destroy(Edisi $edisi)
    {
        $edisi->delete();
        return redirect()->route('edisi.index')->with('success', 'edisi berhasil dihapus.');
    }
}
