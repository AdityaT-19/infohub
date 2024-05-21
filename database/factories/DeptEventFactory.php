<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeptEvent>
 */
class DeptEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence,
            "description" => $this->faker->realText,
            "venue" => $this->faker->sentence,
            "dateTime" => $this->faker->dateTimeBetween('-10 days','+10 days'),
            "image" => $this->faker->image,
            "dept" => $this->faker->sentence,
        ];
    }
}
