<?php

namespace Database\Factories;

use App\Models\HealthTracker;
use Illuminate\Database\Eloquent\Factories\Factory;

class HealthTrackerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HealthTracker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'weight' => $this->faker->word,
        'blood_pressure' => $this->faker->word,
        'diagnosis' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
