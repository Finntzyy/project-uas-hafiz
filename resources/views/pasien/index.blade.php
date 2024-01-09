@extends('layouts.app')
@section('content')
<h2>Pasien</h2>

<a href="{{ url('/pasien/create') }}" class="btn btn-primary mb-3 float-end">Input Pasien</a>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>Nama Pasien</th>
        <th>Jenis Kelamin</th>
        <th>No. Telp</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @php $no = 1; @endphp
    @foreach($pasien as $p)
    <tr>
        <td>{{ $p->pasien_id }}</td>
        <td>{{ $p->pasien_nama }}</td>
        <td>{{ $p->jk }}</td>
        <td>{{ $p->no_telp }}</td>
        <td><a href="{{ url('pasien/edit/' . $p->pasien_id) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('pasien/' . $p->pasien_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            </form>
    </tr>
    @endforeach
</table>
@endsection