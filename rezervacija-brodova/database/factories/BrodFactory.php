<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\en_US\Address;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brod>
 */
class BrodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->word(),
            'zemljaPorekla' => $this->faker->country(),
            'godiste' => $this->faker->numberBetween($min = 2000, $max = 2022),
        ];
    }
}
