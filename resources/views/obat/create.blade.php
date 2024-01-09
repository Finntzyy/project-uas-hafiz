@extends('layouts.app')

@section('content')
<h2>Add Obat</h2>

<form action="{{ url('obat') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Nama Obat</label>
        <input type="text" name="obat_nama" id="" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="">Keterangan Obat</label>
        <input type="text" name="obat_ket" id="" class="form-control">
    </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
</form>
@endsection