<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pasien::create([
            'pasien_nama' => $request->pasien_nama,
            'jk' => $request->jk,
            'no_telp' => $request->no_telp
        ]);

        return redirect('pasien');
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
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pasien = Pasien::findOrFail($id);

        $pasien->update([
            'pasien_nama' => $request->pasien_nama,
            'jk' => $request->jk,
            'no_telp' => $request->no_telp
        ]);

        return redirect('pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::findOrFail($id);

        $pasien->delete();

        return redirect('pasien');
    }
}
