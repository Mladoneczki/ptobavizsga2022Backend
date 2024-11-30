<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\szakdoga>
 */
class SzakdogaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'szakdoga_nev' => fake('hu_HU')->sentence(3),
            'githublink' => 'https://github.com/' . fake()->name(),
            'oldallink' => fake()->sentence(4) . '.hu',
           'tagokneve' => implode(', ', [fake()->name(), fake()->name(), fake()->name()]),


        ];
    }
}
