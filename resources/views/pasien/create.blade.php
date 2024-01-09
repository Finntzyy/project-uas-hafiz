@extends('layouts.app')

@section('content')
<h2>Add Pasien</h2>

<form action="{{ url('pasien') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Nama pasien</label>
        <input type="text" name="pasien_nama" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Status</label>
        <select name="jk" id="jk">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
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