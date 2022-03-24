<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WebsiteFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'url' => $this->faker->url,
        ];
    }
}
