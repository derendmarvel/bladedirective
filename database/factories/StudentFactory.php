<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => fake()->unique()->numberBetween(0100000000000, 0700000000000),
            'name' => fake()->name(),
            'ipk' => fake()->randomFloat(1, 0.0, 4.0),
            'email' => fake()->unique()->safeEmail(),
            'major' => fake()->lexify('???')
        ];
    }
}
