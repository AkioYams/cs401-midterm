<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'user_name' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->safeEmail(), // add email if your table has it
            'password' => bcrypt('password'),
            'registration_date' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
