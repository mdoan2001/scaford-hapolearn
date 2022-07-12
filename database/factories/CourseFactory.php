<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\Course;
use DateTime;

class CourseFactory extends Factory
{
    protected $model = Course::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'image' => $this->faker->imageUrl($width = 200, $height = 300, '', true, 'Faker'),
            'description' => $this->faker->text(255),
            'price' => $this->faker->numberBetween(0, 2000000),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ];
    }
}
