<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use DateTime;

class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this->faker->numberBetween(0, 10),
            'name' => $this->faker->name(),
            'image' => $this->faker->imageUrl($width = 200, $height = 300, '', true, 'Faker'),
            'time' => $this->faker->dateTime()->format('H:i:s'),
            'description' => $this->faker->text(255),
            'requirement' => $this->faker->text(255),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ];
    }
}
