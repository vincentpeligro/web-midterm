<?php

namespace Database\Factories;

use App\Models\PetShop;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetShopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PetShop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'store_name' => $this->faker->word,
        'store_owner' => $this->faker->word,
        'pets' => $this->faker->word,
        'breed' => $this->faker->word,
        'price' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
