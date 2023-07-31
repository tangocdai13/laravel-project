<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name,
            'slug' => fake()->unique()->randomDigit(),
            'parent' => 1,
            'created_by' => 1,
            'content' => fake()->paragraph,
            'meta_title' => fake()->title,
            'meta_desc' => fake()->paragraph,
            'meta_keyword' => 'meta_keyword 1',
        ];
    }
}
