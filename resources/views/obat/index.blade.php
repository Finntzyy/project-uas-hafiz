@extends('layouts.app')
@section('content')
<h2>Obat</h2>

<a href="{{ url('/obat/create') }}" class="btn btn-primary mb-3 float-end">Input obat</a>

<table class="table table-bordered">
    <tr>
        <td>ID Obat</td>
        <td>Nama Obat </td>
        <td>Keterangan Obat</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($obat as $o)
    <tr>
        <td>{{ $o->obat_id }}</td>
        <td>{{ $o->obat_nama }}</td>
        <td>{{ $o->obat_ket }}</td>
        <td><a href="{{ url('obat/edit/' . $o->obat_id) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('obat/' . $o->obat_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            </form>
    </tr>
    @endforeach
</table>
@endsection