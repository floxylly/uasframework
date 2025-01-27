@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Adopsi</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Pengadopsi</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Hewan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($adopsi as $a)
            <tr>
                <td>{{ $a->nama_pengadopsi }}</td>
                <td>{{ $a->email }}</td>
                <td>{{ $a->telepon }}</td>
                <td>{{ $a->alamat }}</td>
                <td>{{ $a->hewan->nama }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection