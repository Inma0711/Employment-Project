<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $id = 1;

        return [
            'id' => $id++, 
            'title' => $this->faker->jobTitle(),
            'company' => $this->faker->company(),
            'offerStatus' => $this->faker->randomElement([
                "En proceso", 
                "Aceptado", 
                "Denegado"
            ]),
        ];
    }
}
