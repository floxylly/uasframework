@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Hewan</h1>
    <form action="{{ route('hewan.update', $hewan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Hewan</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $hewan->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Hewan</label>
            <select class="form-control" id="jenis" name="jenis" required>
                <option value="Kucing" {{ $hewan->jenis == 'Kucing' ? 'selected' : '' }}>Kucing</option>
                <option value="Anjing" {{ $hewan->jenis == 'Anjing' ? 'selected' : '' }}>Anjing</option>
                <option value="Kelinci" {{ $hewan->jenis == 'Kelinci' ? 'selected' : '' }}>Kelinci</option>
                <option value="Ikan" {{ $hewan->jenis == 'Ikan' ? 'selected' : '' }}>Ikan</option>
                <option value="Landak" {{ $hewan->jenis == 'Landak' ? 'selected' : '' }}>Landak</option>
                <option value="Burung" {{ $hewan->jenis == 'Burung' ? 'selected' : '' }}>Burung</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $hewan->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
            @if($hewan->foto)
                <img src="{{ asset('storage/' . $hewan->foto) }}" alt="{{ $hewan->nama }}" width="100" class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection