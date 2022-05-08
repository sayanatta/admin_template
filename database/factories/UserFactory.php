<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'avatar' => '/admin/img/avatar6.png',
            'name' => $this->faker->name(),
            'email' => 'admin@gmail.com',
            'phone' => $this->faker->phoneNumber(),
            'email_verified_at' => now(),
            'password' => bcrypt(123456),
            'user_type' => 1,
            'status' => 1,
            'remember_token' => Str::random(10),
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
