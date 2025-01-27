<?php

namespace App\Http\Controllers;

use App\Models\Adopsi;
use App\Models\Hewan;
use Illuminate\Http\Request;

class AdopsiController extends Controller
{
    public function index()
    {
        $adopsi = Adopsi::with('hewan')->get();
        return view('adopsi.index', compact('adopsi'));
    }

    // Menampilkan form adopsi
    public function create($hewan_id)
    {
        $hewan = Hewan::findOrFail($hewan_id);
        return view('adopsi.create', compact('hewan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hewan_id' => 'required|exists:hewan,id',
            'nama_pengadopsi' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        // Simpan data adopsi
        Adopsi::create($request->all());

        // Hapus hewan dari daftar hewan yang tersedia
        Hewan::where('id', $request->hewan_id)->delete();

        return redirect()->route('hewan.index')->with('success', 'Permintaan adopsi berhasil dikirim!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
