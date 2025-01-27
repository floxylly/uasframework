<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adopsi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $labels = ['Kucing', 'Anjing', 'Kelinci', 'Ikan', 'Landak', 'Burung'];
        $data = [];
        foreach ($labels as $jenis) {
            $data[] = Adopsi::whereHas('hewan', function ($query) use ($jenis) {
                $query->where('jenis', $jenis);
            })->count();
        }

        return view('admin.dashboard', compact('labels', 'data'));
    }
}