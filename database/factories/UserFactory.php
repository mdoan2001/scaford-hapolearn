<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use DateTime;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_name' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'role' => $this->faker->numberBetween(0, 1),
            'full_name' => $this->faker->name(),
            'birthday' => $this->faker->date('Y-m-d'),
            'telephone' => $this->faker->phoneNumber(),
            'about' => $this->faker->text(200),
            'remember_token' => Str::random(10),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
