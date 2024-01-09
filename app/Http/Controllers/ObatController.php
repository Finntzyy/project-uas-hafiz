<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obat = Obat::all();
        return view('obat.index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Obat::create([
            'obat_nama' => $request->obat_nama,
            'obat_ket' => $request->obat_ket
        ]);

        return redirect('obat');
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
        $obat = Obat::find($id);
        return view('obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obat = Obat::findOrFail($id);

        $obat->update([
            'obat_nama' => $request->obat_nama,
            'obat_ket' => $request->obat_ket
        ]);

        return redirect('obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obat = Obat::findOrFail($id);

        $obat->delete();

        return redirect('obat');
    }
}
