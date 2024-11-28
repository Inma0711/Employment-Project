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
        return [
            'title' => $this->faker->title(),
            'company' => $this->faker->company(),
            'offerStatus' => $this->faker->randomElement([
                "En proceso", 
                "Aceptado", 
                "Denegado"
            ]),
        ];
    }
}
