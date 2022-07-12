<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use App\Models\CourseUser;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseUserFactory extends Factory
{
    protected $model = CourseUser::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement(User::pluck('id')),
            'course_id' => $this->faker->randomElement(Course::pluck('id')),
            'registration_date' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ];
    }
}
