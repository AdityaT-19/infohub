<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "tid" => fake()->text(15),
            "name" => fake()->name(),
            "branch" => fake()->text(5),
            "phone" => fake()->numerify("##########"),
            "email" => fake()->unique()->safeEmail(),
            "password" => static::$password ??= Hash::make('password'),
            "image" => fake()->image(),
            'remember_token' => Str::random(10)
        ];
    }
}
