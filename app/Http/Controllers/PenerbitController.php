<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index()
    {
        $penerbits = Penerbit::all();

        return view('admin.penerbit.index',compact('penerbits'));
    }

    public function create()
    {
        return view('admin.penerbit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'penerbit' => 'required|string|max:255',
        ]);

        Penerbit::create($request->all());

        return redirect()->route('penerbit.index')->with('success', 'penerbit berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $penerbit = Penerbit::find($id);

        return view('admin.penerbit.show', compact('penerbit'));
    }

    public function edit(string $id)
{
    $penerbit = Penerbit::find($id);
    return view('admin.penerbit.edit', compact('penerbit'));
}


    public function update(Request $request, Penerbit $penerbit)
    {
        // Validasi input
        $request->validate([
            'penerbit' => 'required|string|max:255',
        ]);
    
        $penerbit->update($request->all());
    
        return redirect()->route('penerbit.edit', $penerbit->id)->with('success', 'penerbit berhasil diupdate.');
    }

    public function destroy(Penerbit $penerbit)
    {
        $penerbit->delete();
        return redirect()->route('penerbit.index')->with('success', 'penerbit berhasil dihapus.');
    }
}
