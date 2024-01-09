@extends('layouts.app')

@section('content')
<h2>Edit Pasien</h2>

<form action="{{ url('pasien/' . $pasien->pasien_id) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
        <div class="mb-3">
            <label for="">Nama pasien</label>
            <input type="text" name="pasien_nama" id="" class="form-control" value="{{ $pasien->pasien_nama }}">
        </div>
        <div class="mb-3">
            <label for="">Jenis Kelamin</label>
            <select name="jk" id="jk" value="{{ $pasien->jk }}">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="">No Telepon</label>
            <input type="text" name="no_telp" id="" class="form-control" value="{{ $pasien->no_telp }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
</form>
@endsection