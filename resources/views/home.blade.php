<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama - Adopsi Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Tombol Admin -->
    <a href="{{ route('admin.login') }}" class="fixed bottom-4 left-4 bg-blue-500 text-white px-4 py-2 rounded-lg shadow-lg">
        Admin
    </a>

    <!-- Header -->
    <div class="bg-white shadow-lg py-4">
        <h1 class="text-3xl font-bold text-center">Adopsi Hewan</h1>
    </div>

    <!-- Daftar Hewan -->
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($hewans as $hewan)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden cursor-pointer" onclick="showDetail({{ $hewan->id }})">
                    <img src="{{ asset('storage/' . $hewan->gambar) }}" alt="{{ $hewan->nama }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">{{ $hewan->nama }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal Detail Hewan -->
    <div id="detailModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg w-full max-w-md p-6">
            <img id="detailGambar" src="" alt="Gambar Hewan" class="w-full h-64 object-cover rounded-lg">
            <h2 id="detailNama" class="text-2xl font-bold mt-4"></h2>
            <p id="detailDeskripsi" class="text-gray-700 mt-2"></p>
            <div class="mt-4">
                <a id="tombolAdopsi" href="#" class="bg-green-500 text-white px-4 py-2 rounded-lg">Adopsi</a>
                <button onclick="hideDetail()" class="bg-gray-500 text-white px-4 py-2 rounded-lg ml-2">Tutup</button>
            </div>
        </div>
    </div>

    <script>
        function showDetail(id) {
            fetch(`/hewan/${id}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('detailGambar').src = "{{ asset('storage') }}/" + data.gambar;
                    document.getElementById('detailNama').innerText = data.nama;
                    document.getElementById('detailDeskripsi').innerText = data.deskripsi;
                    document.getElementById('tombolAdopsi').href = `/adopsi/create?hewan_id=${data.id}`;
                    document.getElementById('detailModal').classList.remove('hidden');
                });
        }

        function hideDetail() {
            document.getElementById('detailModal').classList.add('hidden');
        }
    </script>
</body>
</html>