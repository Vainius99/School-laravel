<?php

namespace Database\Factories;

use App\Models\AttendanceGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AttendanceGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F']),
            'description' => $this->faker->sentence(5),
            'difficulty' => $this->faker->randomElement(['Very Easy', 'Easy', 'Medium', 'Hard', 'Very Hard']),
            'school_id' => $this->faker->randomDigit(),
        ];
    }
}
