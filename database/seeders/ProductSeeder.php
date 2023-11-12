<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $username = User::pluck('username')->toArray();
        // 
        Product::create([
            'title' => 'Jurnalistik Redirect Web',
            'excerpt' => 'lorem ipsum dolor sitamet',
            'slug' => 'lorem-ipsum-dolor-sit',
            'price' => 230000,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, laborum ad temporibus adipisci earum veritatis quas vel ab minima porro voluptate quae illum officia doloremque numquam reprehenderit molestiae corporis! Porro, quas facilis.',
            'uploader' => fake()->randomElement($username)
        ]);
    }
}
