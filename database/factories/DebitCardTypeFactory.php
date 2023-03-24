<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DebitCardTypeFactory extends Factory
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
            'name'=>"Debit Card ".$this->faker->colorName(),
            'img'=>$this->faker->imageUrl(320,240,null,null,'Credit Card Type'),
            'description'=>$this->faker->address(),
            'special_feature'=>$this->faker->name(),
        ];
    }
}
