<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Testimoni::create([
            'name_consumer_testimony' => 'Arkan Jalaludin',
            'message_consumer_testimony' => 'Aku bangga menjadi siswa SMK'
        ]);
        Testimoni::create([
            'name_consumer_testimony' => 'Mahrus Mabrur',
            'message_consumer_testimony' => 'Aku bangga menjadi siswa SMK'
        ]);
        Testimoni::create([
            'name_consumer_testimony' => 'Ahmad Khoirunas',
            'message_consumer_testimony' => 'Aku bangga menjadi siswa SMK'
        ]);
    }
}
