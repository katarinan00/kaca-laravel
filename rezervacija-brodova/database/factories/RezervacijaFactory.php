<?php

namespace Database\Factories;

use App\Models\Klijent;
use App\Models\Brod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rezervacija>
 */
class RezervacijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cena' => $this->faker->numberBetween($min = 10000, $max = 100000),
            'nacinPlacanja' => $this->faker->randomElement($array = array('kartica', 'gotovina')),
            'klijent_id' => Klijent::factory(),
            'brod_id' => Brod::factory(),
        ];
    }
}
