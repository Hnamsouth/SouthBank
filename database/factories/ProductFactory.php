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
            'name'=>$this->faker->unique()->name(),
            'thumbnail'=>$this->faker->imageUrl(),
            'price'=>$this->faker->randomFloat(12,10000,100000),
            'qty'=>$this->faker->numberBetween(5,100),
            'unit'=>$this->faker->word(),
            'description'=>$this->faker->realText(),
            'status'=>$this->faker->randomElement([0,1]),
            'category_id'=>$this->faker->numberBetween(1,100), // or method random_int(1,100)
        ];
    }
}
