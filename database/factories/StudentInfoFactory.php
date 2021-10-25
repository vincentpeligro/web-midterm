<?php

namespace Database\Factories;

use App\Models\StudentInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentInfo::class;

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
        'age' => $this->faker->randomDigitNotNull,
        'number' => $this->faker->randomDigitNotNull,
        'course' => $this->faker->word,
        'year' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
