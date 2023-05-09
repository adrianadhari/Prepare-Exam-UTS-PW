@extends('main')

@section('content')
<table class="table table-primary table-hover mt-5">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
    </tr>
    @foreach ($data as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->nama }}</td>
        <td>{{ $student->npm }}</td>
        <td>{{ $student->jeniskelamin }}</td>
        <td>{{ $student->alamat }}</td>
    </tr>
    @endforeach
  </table>
@endsection