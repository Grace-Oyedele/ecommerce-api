<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $seller=seller::has('products')->get()->random();
        $buyer=user::all()->except($seller->id)->random();

        return [
            'quantity'=>$faker->numberBetween(1,3),
            'buyer_id'=>$buyer->id,
            'product_id'=>$seller->products->random()->id,
        ];
    }
}
