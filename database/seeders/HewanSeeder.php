<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hewan;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 

    public function run()
    {
        Hewan::factory()->count(20)->create();
    }
}
