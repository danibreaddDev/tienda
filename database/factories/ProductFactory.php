<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'price' => random_int(10,20),
            'image' => "https://i.pinimg.com/736x/2d/93/37/2d933761bc7ca7cc5a150713cf1dfef3.jpg",
        ];
    }
}
