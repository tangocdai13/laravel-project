<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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
            'slug' => fake()->unique()->numberBetween(11, 20),
            'link' => fake()->url,
            'price' => fake()->randomNumber(2),
            'created_by' => fake()->randomDigit(),
            'category_id' => fake()->randomDigit(),
            'lessions' => fake()->randomDigit(),
            'view_count' => fake()->randomDigit(),
            'benefits' => json_encode(fake()->paragraph),
            'fqa' => json_encode(fake()->paragraph),
            'is_feature' => 1,
            'is_online' => fake()->unique()->randomDigit(),
            'description' => fake()->paragraph,
            'content' => fake()->paragraph,
            'meta_title' => fake()->title,
            'meta_desc' => fake()->paragraph,
            'meta_keyword' => 'meta_keyword 1'
        ];
    }
}
