<?php

namespace Database\Factories;

use App\Models\Lagu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lagu>
 */
class LaguFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(3),
            'artis' => fake()->name(),
            'album' => fake()->words(2, true),
            'genre' => fake()->randomElement(['Pop', 'Rock', 'Jazz', 'Hip Hop']),
            'durasi' => fake()->numberBetween(120, 360),
        ];
    }
}
