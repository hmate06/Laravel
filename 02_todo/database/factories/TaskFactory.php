<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->boolean(70)
                ? $this->faker->paragraph() : null,
            'due_date' => $this->faker->dateTimeBetween('now', '+2 months'),
            'is_done' => $this->faker->boolean(30),
        ];
    }
}
