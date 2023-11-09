<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name_category' => 'Web',
            'kode_category' => 'C1'
        ]);
        Category::create([
            'name_category' => 'Desain',
            'kode_category' => 'C2'
        ]);
    }
}
