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
        $timelines = [
            [
                'year' => 'Tahun 2025',
                'title' => 'Inisiasi & Perumusan Ide',
                'subtitle' => 'Pengusulan Model Kolaborasi Agensi',
                'content' => 'Gagasan awal lahir dari kebutuhan pasar akan pengerjaan digital satu pintu yang mulus. Para founder yang memiliki latar belakang berbeda (developer, desainer, fotografer) merancang struktur kerja kolaboratif agar dapat melayani kebutuhan klien secara efisien dan berkualitas tanpa batasan koordinasi pihak ketiga.',
                'order' => 1,
            ],
            [
                'year' => 'Tahun 2026',
                'title' => 'Resmi Terbentuk & Ekspansi Layanan',
                'subtitle' => 'Grand Launching HA Creative Agency',
                'content' => 'Melalui perancangan matang setahun ke belakang, agensi resmi didirikan dan diluncurkan. Kami mengintegrasikan empat divisi inti kami dalam satu sistem operasi profesional untuk melayani puluhan UMKM dan pasangan pernikahan di seluruh Indonesia.',
                'order' => 2,
            ],
        ];

        foreach ($timelines as $timeline) {
            Timeline::create($timeline);
        }
    }
}
