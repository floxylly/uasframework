<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopsi Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .fixed-top-right {
            position: fixed;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Hewan untuk Diadopsi</h1>
        <div class="row">
            @foreach($hewan as $h)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $h->foto) }}" class="card-img-top" alt="{{ $h->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $h->nama }}</h5>
                        <a href="{{ route('hewan.show', $h->id) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Tombol Admin -->
    <div class="fixed-top-right">
        <a href="{{ route('login') }}" class="btn btn-secondary">Admin</a>
    </div>
</body>
</html>