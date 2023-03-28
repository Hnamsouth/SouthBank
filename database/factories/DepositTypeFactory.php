<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepositTypeFactory extends Factory
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
            'name'=>"DepositType ".$this->faker->colorName(),
            'min_term'=>1,
            'max_term'=>36,
            'min_amount'=>array_rand([100000,1000000,2000000]),
            'withdraw_before_maturity'=>random_int(0,1),
            'increase_principal'=>random_int(0,1),
            'img'=>$this->faker->imageUrl(320,230,'deposit type',true,'deposit account type')
        ];
    }
}
