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
<<<<<<< HEAD
            'judul' => fake()->word(),
            'highlight' => fake()->word(),
            'isi' =>  fake()->word(),
=======
            'judul' => fake()->sentence(),
            'highlight' => fake()->sentence(),
            'isi' =>  fake()->paragraph(4),
>>>>>>> 608e26cc587487be1a9d918af6eaf5c860b09d27
            'uploader' => fake()->randomElement($user),
            'category' => fake()->randomElement($category),
        ];
    }
}
