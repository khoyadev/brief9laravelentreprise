<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nom' => $this->faker->city(),
            'pays_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
