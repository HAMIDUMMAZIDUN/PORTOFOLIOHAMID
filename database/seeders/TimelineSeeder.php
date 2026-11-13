<?php

namespace Database\Seeders;

use App\Models\Timeline;
use Illuminate\Database\Seeder;

class TimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Timeline::truncate();
        $timelines = [
            [
                'year' => '2024',
                'title' => 'Awal Mula & Projek Pertama',
                'subtitle' => 'Mengerjakan Pembuatan Website & Desain Klien Lokal',
                'content' => 'Berawal dari proyek lepas mengerjakan website profil dan identitas visual untuk pelaku UMKM di Bandung. Fokus utama kami adalah menghadirkan website yang fungsional, rapi, dan terjangkau bagi pemilik usaha.',
                'order' => 1,
            ],
            [
                'year' => '2025',
                'title' => 'Ekspansi Layanan Digital',
                'subtitle' => 'Integrasi Layanan Website & Media Sosial',
                'content' => 'Merespons kebutuhan klien yang ingin tampilan visualnya konsisten, kami menyatukan layanan pembuatan website, desain grafis, dan pengelolaan media sosial dalam satu alur kerja yang teratur.',
                'order' => 2,
            ],
            [
                'year' => '2026',
                'title' => 'Pertumbuhan & Kepercayaan Klien',
                'subtitle' => 'Melayani Puluhan Mitra Bisnis di Indonesia',
                'content' => 'Kini kami telah dipercaya oleh puluhan pelaku usaha dari berbagai sektor bisnis. Kami terus menjaga komitmen pengerjaan tepat waktu, pendampingan ramah, dan hasil kerja berkualitas tinggi.',
                'order' => 3,
            ],
        ];

        foreach ($timelines as $timeline) {
            Timeline::create($timeline);
        }
    }
}
