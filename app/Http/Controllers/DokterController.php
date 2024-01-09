<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter.index', compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dokter::create([
            'dok_nama' => $request->dok_nama,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('dokter');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.edit', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dokter = Dokter::findOrFail($id);

        $dokter->update([
            'dok_nama' => $request->dok_nama,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('dokter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dokter = Dokter::findOrFail($id);

        $dokter->delete();

        return redirect('dokter');
    }
}
