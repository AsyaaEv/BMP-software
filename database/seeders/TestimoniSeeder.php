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
        Testimoni::create(
            [
                'name_consumer' => 'Hani Armananta Ningsih',
                'image_consumer' => 'testimonies-images/profile.png',
                'stars' => 5,
                'he_say' => 'aku sangat puas dengan pelayanan !Bogeng,  sangat professional, cepat tanggap, dan mudah berkonsultasi'
            ]
        );
        Testimoni::create(
            [
                'name_consumer' => 'Abas Khoirul Umam',
                'image_consumer' => 'testimonies-images/profile.png',
                'stars' => 4,
                'he_say' => 'Pelayanan Mantap Bosqueee'
            ]
        );
        Testimoni::create(
            [
                'name_consumer' => 'Lutfia Nurul Azizah',
                'image_consumer' => 'testimonies-images/profile.png',
                'stars' => 4,
                'he_say' => 'Baru saja saya pesan website usaha saya, ternyata gak sampai deadline sudah jadi dan siap publish'
            ]
        );
    }
}
