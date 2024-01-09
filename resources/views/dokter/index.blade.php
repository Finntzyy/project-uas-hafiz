@extends('layouts.app')
@section('content')
<h2>Dokter</h2>

<a href="{{ url('/dokter/create') }}" class="btn btn-primary mb-3 float-end">Input Dokter</a>

<table class="table table-bordered">
    <tr>
        <td>ID Dokter</td>
        <td>Nama Dokter </td>
        <td>Spesialis</td>
        <td>Alamat</td>
        <td>No Telp</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($dokter as $d)
    <tr>
        <td>{{ $d->dok_id }}</td>
        <td>{{ $d->dok_nama }}</td>
        <td>{{ $d->spesialis }}</td>
        <td>{{ $d->alamat }}</td>
        <td>{{ $d->no_telp }}</td>
        <td><a href="{{ url('dokter/edit/' . $d->dok_id) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('dokter/' . $d->dok_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            </form>
    </tr>
    @endforeach
</table>
@endsection