<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'program' => $this->faker->randomElement(['BSIT', 'BSCS', 'BSEd', 'BSBA']),
            'enrollment_year' => $this->faker->numberBetween(2018, 2024),
            'birthday' => $this->faker->date('Y-m-d', '2005-01-01'),
            'course' => $this->faker->randomElement(['BSIT', 'BSCS', 'BSEd', 'BSBA']), // ✅ course matches DB column
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
