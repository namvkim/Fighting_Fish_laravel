<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'pass' => $this->faker->numberBetween($min = 100000, $max = 999999),
            'email' => $this->faker->unique()->freeEmail,
            'phone' => $this->faker->e164PhoneNumber,
            'birthDay' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'address' => $this->faker->address,
            'created_at' => $this->faker->dateTime($max = 'now', $timezone = 'UTC'),
            'updated_at' => $this->faker->dateTime($max = 'now', $timezone = 'UTC'),
        ];
    }
}
