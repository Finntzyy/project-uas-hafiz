@extends('layouts.app')

@section('content')
<h2>Edit Rekam Medis</h2>
<form action="{{  url('rm/' . $rm->rm_id)  }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">Pasien</label>
        <select name="rm_id_pasien">
            @foreach($pasien as $p)
            <option value="{{ $p->pasien_id }}" {{ $p->pasien_id == $rm->rm_id_gol ? 'selected' : '' }}>{{
                $p->pasien_nama }}</option>
            @endforeach
        </select>
    </div>
        <div class="mb-3">
            <label for="">Dokter</label>
            <select name="rm_id_dok">
                @foreach($dokter as $d)
                <option value="{{ $d->dok_id }}" {{ $d->dok_id == $rm->rm_id_dok ? 'selected' : '' }}>{{
                    $d->dok_nama }}</option>
                @endforeach
            </select>
            </div>
        <div class="mb-3">
            <label for="">Diagnosa</label>
            <input type="text" name="diagnosa" id="" class="form-control" value="{{ $rm->diagnosa }}">
        </div>
        <div class="mb-3">
            <label for="">obat</label>
            <select name="rm_id_obat">
                @foreach($obat as $o)
                <option value="{{ $o->obat_id }}" {{ $o->obat_id == $rm->rm_id_obat ? 'selected' : '' }}>{{
                    $o->obat_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">Tanggal Pemeriksaan</label>
            <input type="text" name="tgl_pemeriksaan" id="" class="form-control" value="{{ $rm->tgl_pemeriksaan }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
</form>
@endsection