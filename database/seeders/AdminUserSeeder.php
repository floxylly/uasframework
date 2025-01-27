<?php

namespace Database\Seeders;

use App\Models\User; // Pastikan ini diimpor dengan benar
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), // Password: admin123
        ]);
    }
}