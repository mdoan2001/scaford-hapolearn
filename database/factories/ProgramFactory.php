<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;

class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lesson_id' => $this->faker->randomElement(Lesson::pluck('id')),
            'name' => $this->faker->name(),
            'link' => $this->faker->url(),
            'type' => $this->faker->numberBetween(1, 3),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
        ];
    }
}
