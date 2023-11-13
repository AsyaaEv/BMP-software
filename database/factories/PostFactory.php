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
        $user = User::pluck('username')->toArray();
        $category = Category::pluck('kode_category')->toArray();
        return [
            'judul' => fake()->sentence(),
            'excerpt' => fake()->sentence(),
            'slug' => fake()->slug(7),
            'isi' =>  fake()->paragraph(4),
            'uploader' => fake()->randomElement($user),
            'category' => fake()->randomElement($category),
        ];
    }
}
