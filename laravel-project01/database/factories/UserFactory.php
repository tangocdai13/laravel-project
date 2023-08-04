<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->e164PhoneNumber,
            'email' => fake()->unique()->freeEmail(),
            'gender' => fake()->numberBetween(1, 2),
            'family_id' => fake()->numberBetween(1, 90),
            'password' => bcrypt('123456'),
            'email_verified_at' => now(),
            'type' => fake()->numberBetween(1, 3),
            'deleted_at' => fake()->dateTime,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
