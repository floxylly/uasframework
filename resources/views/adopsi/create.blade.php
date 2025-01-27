<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Adopsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Form Adopsi</h1>
        <form action="{{ route('adopsi.store') }}" method="POST">
            @csrf
            <input type="hidden" name="hewan_id" value="{{ $hewan->id }}">
            <div class="mb-3">
                <label for="nama_pengadopsi" class="form-label">Nama Pengadopsi</label>
                <input type="text" class="form-control" id="nama_pengadopsi" name="nama_pengadopsi" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Permintaan</button>
            <a href="{{ route('hewan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>