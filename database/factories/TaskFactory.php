<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class TaskFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => fake()->title(),
            'description' => fake()->text(),
            'due_date' => fake()->dateTimeBetween('now', '+1 year')->format('Y-m-d H:i:s'),
            'priority' => fake()->randomElement(['low', 'medium', 'high']),
            'status' => fake()->randomElement(['pending', 'completed']),
        ];
    }
}
