@extends('layouts.app')

@section('content')
<h2>Edit Obat</h2>

<form action="{{ url('obat/' . $obat->obat_id) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
        <div class="mb-3">
            <label for="">Nama Obat</label>
            <input type="text" name="obat_nama" id="" class="form-control" value="{{ $obat->obat_nama }}">
        </div>
        <div class="mb-3">
            <label for="">Keterangan Obat</label>
            <input type="text" name="obat_ket" id="" class="form-control" value="{{ $obat->obat_ket}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
</form>
@endsection