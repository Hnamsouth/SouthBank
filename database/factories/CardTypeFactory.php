<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CardTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $TYPE=['DEBIT','CREDIT'];
    public function definition()
    {
        return [
            'name'=>"CardType Name".$this->faker->colorName(),
            'type'=>$this->TYPE[random_int(0,1)],
            'credit_card_type_id',
            'debit_card_type_id'
        ];
    }
}
