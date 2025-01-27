<?php
namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    // Menampilkan semua hewan
    public function index()
    {
        $hewan = Hewan::all();
        return view('hewan.index', compact('hewan'));
    }

    // Menampilkan form tambah hewan
    public function create()
    {
        return view('hewan.create');
    }

    // Menyimpan data hewan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        // Upload foto jika ada
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('hewan', 'public');
        }

        Hewan::create($data);

        return redirect()->route('hewan.index')->with('success', 'Hewan berhasil ditambahkan!');
    }

    // Menampilkan detail hewan
    public function show(Hewan $hewan)
    {
        return view('hewan.show', compact('hewan'));
    }

    // Menampilkan form edit hewan
    public function edit(Hewan $hewan)
    {
        return view('hewan.edit', compact('hewan'));
    }

    // Mengupdate data hewan
    public function update(Request $request, Hewan $hewan)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        // Upload foto jika ada
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('hewan', 'public');
        }

        $hewan->update($data);

        return redirect()->route('hewan.index')->with('success', 'Hewan berhasil diperbarui!');
    }

    // Menghapus data hewan
    public function destroy(Hewan $hewan)
    {
        $hewan->delete();
        return redirect()->route('hewan.index')->with('success', 'Hewan berhasil dihapus!');
    }
}