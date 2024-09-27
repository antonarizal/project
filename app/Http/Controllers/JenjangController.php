<?php

namespace App\Http\Controllers;

use App\Models\Jenjang;
use Illuminate\Http\Request;

class JenjangController extends Controller
{
    public function index()
    {
        $jenjangs = Jenjang::all();

        return view('admin.jenjang.index',compact('jenjangs'));
    }

    public function create()
    {
        return view('admin.jenjang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenjang' => 'required|string|max:255',
        ]);

        Jenjang::create($request->all());

        return redirect()->route('jenjang.index')->with('success', 'jenjang berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $jenjang = Jenjang::find($id);

        return view('admin.jenjang.show', compact('jenjang'));
    }

    public function edit(string $id)
{
    $jenjang = Jenjang::find($id);
    return view('admin.jenjang.edit', compact('jenjang'));
}


    public function update(Request $request, Jenjang $jenjang)
    {
        // Validasi input
        $request->validate([
            'jenjang' => 'required|string|max:255',
        ]);
    
        $jenjang->update($request->all());
    
        return redirect()->route('jenjang.edit', $jenjang->id)->with('success', 'jenjang berhasil diupdate.');
    }

    public function destroy(Jenjang $jenjang)
    {
        $jenjang->delete();
        return redirect()->route('jenjang.index')->with('success', 'jenjang berhasil dihapus.');
    }
}
