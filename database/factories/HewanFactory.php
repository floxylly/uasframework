<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hewan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HewanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
 

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'jenis' => $this->faker->randomElement(['Kucing', 'Anjing', 'Kelinci', 'Ikan', 'Landak', 'Burung']),
            'deskripsi' => $this->faker->paragraph,
            'foto' => $this->faker->imageUrl(),
        ];
    }
}
