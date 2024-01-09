@extends('layouts.app')
@section('content')
<h2>REKAM MEDIS</h2>

<a href="{{ url('/rm/create') }}" class="btn btn-primary mb-3 float-end">Input Rekam Medis</a>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>Pasien</th>
        <th>Dokter</th>
        <th>Diagnosa</th>
        <th>Obat</th>
        <th>Tanggal Pemeriksaan</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @php $no = 1; @endphp
    @foreach($rm as $r)
    <tr>
        <td>{{ $r->rm_id }}</td>
        <td>{{ $r->pasien->pasien_nama }}</td>
        <td>{{ $r->dokter->dok_nama }}</td>
        <td>{{ $r->diagnosa}}</td>
        <td>{{ $r->obat->obat_nama }}</td>
        <td>{{ $r->tgl_pemeriksaan }}</td>
        <td><a href="{{ url('rm/edit/' . $r->rm_id) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('rm/' . $r->rm_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            </form>
    </tr>
    @endforeach
</table>
@endsection