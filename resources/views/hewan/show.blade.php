<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $hewan->foto) }}" class="img-fluid" alt="{{ $hewan->nama }}">
            </div>
            <div class="col-md-6">
                <h1>{{ $hewan->nama }}</h1>
                <p><strong>Jenis:</strong> {{ $hewan->jenis }}</p>
                <p><strong>Deskripsi:</strong> {{ $hewan->deskripsi }}</p>
                <a href="{{ route('adopsi.create', $hewan->id) }}" class="btn btn-success">Ingin Adopsi</a>
                <a href="{{ route('hewan.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>