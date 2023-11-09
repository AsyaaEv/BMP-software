<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::pluck('name')->toArray();
        $category = Category::pluck('name_category')->toArray();
        return [
            'judul' => fake()->words(6),
            'highlight' => fake()->words(13),
            'isi' =>  fake()->paragraphs(4),
            'uploader' => fake()->randomElement($user),
            'category' => fake()->randomElement($category),
        ];
    }
}
