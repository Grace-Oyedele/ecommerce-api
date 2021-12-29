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
            'name'=>$faker->word,
            'description'=>$faker->paragraph(1),
            'quantity'=>$faker->numberBetween(1,10),
            'status'=>$faker->randomElement([Product::AVAILABLE_PRODUCT, PRODUCT::UNAVAILABLE_PRODUCT]),
            'image'=>$faker->randomElement([]),
            'seller_id'=>User::all()->random()->id,
        ];
    }
}
