@extends('layouts.app')

@section('content')
<h2>Add Dokter</h2>

<form action="{{ url('dokter') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Nama Dokter</label>
        <input type="text" name="dok_nama" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Spesialis</label>
        <input type="text" name="spesialis" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <input type="text" name="alamat" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">No Telepon</label>
        <input type="text" name="no_telp" id="" class="form-control">
    </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
</form>
@endsection