<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      => $this->faker->company(),
            'email'     => $this->faker->companyEmail(),
            'logo'      => $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
            'website'   => $this->faker->tld()
        ];
    }
}
