<?php

namespace App\Http\Controllers\API;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bukus = Buku::all();
        return response()->json($bukus);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $buku = Buku::create($request->all());
        return response()->json($buku, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
