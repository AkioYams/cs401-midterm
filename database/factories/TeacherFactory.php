<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'department' => $this->faker->randomElement(['Math', 'Science', 'Programming', 'English']),
            'birthday' => $this->faker->date('Y-m-d', '1980-01-01'),
            'specialization' => $this->faker->randomElement(['Math', 'Science', 'Programming', 'English']),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
