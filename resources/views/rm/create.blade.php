@extends('layouts.app')

@section('content')
<h2>Add Rekam Medis</h2>

<form action="{{ url('rm') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Pasien</label>
        <select name="rm_id_pasien">
            @foreach($pasien as $p)
            <option value="{{ $p->pasien_id }}">{{ $p->pasien_nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="">Dokter</label>
        <select name="rm_id_dok">
            @foreach($dokter as $d)
            <option value="{{ $d->dok_id }}">{{ $d->dok_nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="">Diagnosa</label>
        <input type="text" name="diagnosa" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Obat</label>
        <select name="rm_id_obat">
            @foreach($obat as $o)
            <option value="{{ $o->obat_id }}">{{ $o->obat_nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="">Tanggal Pemeriksaan</label>
        <input type="text" name="tgl_pemeriksaan" id="" class="form-control">
    </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
</form>
@endsection