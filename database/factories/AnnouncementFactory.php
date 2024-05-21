<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "admin_id" => fake()->numberBetween(1,2),
            "dept" => fake()->realText(10),
            "posted_at" => fake()->dateTimeBetween("-10 days"),
            "description" => fake()->realText(200),
            "title" => fake()->realText(10),
            "priority" => fake()->randomElement(['low','medium','high']),
            "file" => fake()->image(),
        ];
    }
}
