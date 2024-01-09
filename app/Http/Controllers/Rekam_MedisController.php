<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Rekam_medis;

class Rekam_MedisController extends Controller
{
    public function index()
    {
        $rm = Rekam_medis::with('pasien', 'dokter', 'obat')->orderBy('rm_id')->get();
        return view('rm.index', compact('rm'));
    }

    public function create()
    {
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $obat = Obat::all();
        return view('rm.create', compact('pasien', 'dokter', 'obat'));
    }

    public function store(Request $request)
    {
        Rekam_medis::create($request->all());
        return redirect()->route('rm.index');
    }

    public function edit($id)
    {
        $rm = Rekam_medis::with('dokter', 'obat', 'pasien')->find($id);
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $obat = Obat::all();
        return view('rm.edit', compact('rm', 'dokter', 'pasien', 'obat'));
    }

    public function update(Request $request, $id)
    {
        Rekam_medis::find($id)->update($request->all());
        return redirect()->route('rm.index');
    }

    public function destroy($id)
    {
        Rekam_medis::destroy($id);
        return redirect()->route('rm.index');
    }
}