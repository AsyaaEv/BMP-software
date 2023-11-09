<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhammad Rifal Prasetyo',
            'email' => 'hrdsdms765@gmail.com',
            'password' => hash('sha2', 'rifalbogeng123')
        ]);
        User::create([
            'name' => 'Anggun Rasya Evaldo',
            'email' => 'asyaaeval@gmail.com',
            'password' => hash('sha2', 'asyabogeng123')
        ]);
        User::create([
            'name' => 'Diandra Rullyaditya',
            'email' => 'hexcon117@gmail.com',
            'password' => hash('sha2', 'rullybogeng123')
        ]);
    }
}
