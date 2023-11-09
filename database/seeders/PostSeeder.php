<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Post::create([
            'judul' => 'lorem ipsum dolor sit amet',
            'highlight' => 'lorem ipsum dolor sit amet set akum',
            'isi' => 'coba sja',
            'uploader' => 'hrdsdms765@gmail.com',
            'category' => 'web'
        ]);
    }
}
