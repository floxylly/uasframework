@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Hewan</h1>
    <a href="{{ route('hewan.create') }}" class="btn btn-primary mb-3">Tambah Hewan</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hewan as $h)
            <tr>
                <td>{{ $h->nama }}</td>
                <td>{{ $h->jenis }}</td>
                <td>{{ $h->deskripsi }}</td>
                <td>
                    @if($h->foto)
                        <img src="{{ asset('storage/' . $h->foto) }}" alt="{{ $h->nama }}" width="100">
                    @else
                        Tidak ada foto
                    @endif
                </td>
                <td>
                    <a href="{{ route('hewan.edit', $h->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('hewan.destroy', $h->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection