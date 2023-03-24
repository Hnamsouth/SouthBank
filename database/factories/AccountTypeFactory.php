<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccountTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $acc_type=['account_type_1','account_type_2','account_type_3','account_type_4'];

    public function definition()
    {
        return [
            //
            'name'=>"Account Name ".$this->faker->colorName(),
            'name_dev'=>$this->acc_type[random_int(0,3)],
            'img'=>$this->faker->imageUrl(320,240),
            'special_offer'=>$this->faker->address(),
            'target_customers'=>$this->faker->colorName(),
        ];
    }
}
