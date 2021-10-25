<?php

namespace Database\Factories;

use App\Models\PassengerStat;
use Illuminate\Database\Eloquent\Factories\Factory;

class PassengerStatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PassengerStat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'lastname' => $this->faker->word,
        'address' => $this->faker->word,
        'number' => $this->faker->randomDigitNotNull,
        'age' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
