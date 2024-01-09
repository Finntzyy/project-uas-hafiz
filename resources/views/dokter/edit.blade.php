@extends('layouts.app')

@section('content')
<h2>Edit Dokter</h2>

<form action="{{ url('dokter/' . $dokter->dok_id) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
        <div class="mb-3">
            <label for="">Nama Dokter</label>
            <input type="text" name="dok_nama" id="" class="form-control" value="{{ $dokter->dok_nama }}">
        </div>
        <div class="mb-3">
            <label for="">Spesialis</label>
            <input type="text" name="spesialis" id="" class="form-control" value="{{ $dokter->spesialis}}">
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <input type="text" name="alamat" id="" class="form-control" value="{{ $dokter->alamat }}">
        </div>
        <div class="mb-3">
            <label for="">No Telepon</label>
            <input type="text" name="no_telp" id="" class="form-control" value="{{ $dokter->no_telp }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
</form>
@endsection