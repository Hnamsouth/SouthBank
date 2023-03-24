<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CreditCardTypeFactory extends Factory
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
            'name'=>"Credit Card ".$this->faker->colorName(),
            'img'=>$this->faker->imageUrl(320,240,null,null,'Credit Card Type'),
            'limit'=>$this->faker->randomFloat(null,10,100),
            'description'=>$this->faker->name(),
            'special_feature'=>$this->faker->city(),
            'annual_fees'=>$this->faker->randomFloat(null,10,100),
            'interest_rate'=>$this->faker->randomFloat(null,1,10),
        ];
    }
}
