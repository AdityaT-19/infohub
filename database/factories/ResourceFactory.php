<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $list = [
            "name" => $this->faker->name,
            "branch" => $this->faker->name,
            "semester" => $this->faker->numberBetween(1,8),
            "subject" => $this->faker->name,
            "is_teacher" => $this->faker->boolean,
            "file" => $this->faker->image,
        ];

        if($list["is_teacher"]){
            $list['teacher_id'] = $this->faker->numberBetween(1,2);
            $list['student_id'] = null;
        }else{
            $list['student_id'] = $this->faker->numberBetween(1,2);
            $list['teacher_id'] = null;
        }
        return $list;
    }
}
