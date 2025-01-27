<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hewan;
use App\Models\Adopsi;

class DashboardController extends Controller
{
    public function index()
    {
        $hewan = Hewan::all();
        $adopsi = Adopsi::all();
        $jenis_hewan = Hewan::select('jenis')->groupBy('jenis')->get();

        $statistik = [];
        foreach ($jenis_hewan as $jh) {
            $statistik[$jh->jenis] = Hewan::where('jenis', $jh->jenis)->count();
        }

        return view('dashboard', compact('hewan', 'adopsi', 'statistik'));
    }
}