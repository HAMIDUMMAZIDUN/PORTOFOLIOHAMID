<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Performance Max 2026: 7 Cara Hemat Budget Iklan dan Naikkan Konversi',
                'category' => 'Google Ads',
                'image' => null,
                'content' => "Optimalkan anggaran pemasaran Google Ads Anda menggunakan kampanye Performance Max secara cerdas dengan memilah audiens secara tepat sasaran dan hemat budget. Pelajari cara menentukan target audiens yang spesifik, mengevaluasi kinerja aset kreatif (copywriting & visual), dan memanfaatkan AI bawaan Google Ads untuk menghasilkan konversi maksimal.",
                'read_time' => '5 Menit Baca',
            ],
            [
                'title' => 'Email Marketing UMKM: 7 Langkah Ampuh Naikkan Omzet 2026',
                'category' => 'Email Marketing',
                'image' => null,
                'content' => "Bagaimana pelaku usaha mikro kecil dan menengah (UMKM) dapat memanfaatkan strategi pesan email terjadwal demi memicu loyalitas pembeli dan meningkatkan omzet penjualan. Mulai dengan membuat list subscriber yang organik, merancang template email yang ramah seluler, hingga menganalisis rasio buka (open rate) dan rasio klik (CTR).",
                'read_time' => '4 Menit Baca',
            ],
            [
                'title' => 'SEO Gambar 2026: 7 Cara Ampuh Naikkan Traffic Website Bisnismu',
                'category' => 'SEO Optimization',
                'image' => null,
                'content' => "Tingkatkan peringkat pencarian visual website Anda dengan menerapkan optimasi alt-text gambar, kompresi aset gambar, dan penamaan file gambar yang ramah kata kunci. SEO gambar bukan hanya soal format modern (seperti WebP/AVIF), tetapi juga bagaimana mesin pencari mengidentifikasi konteks visual gambar untuk pencarian yang relevan.",
                'read_time' => '6 Menit Baca',
            ],
            [
                'title' => 'Browser AI 2026: 7 Cara Siapkan Bisnismu Sekarang',
                'category' => 'Kecerdasan Buatan',
                'image' => null,
                'content' => "Integrasikan dan sesuaikan konten web bisnis Anda agar kompatibel dengan teknologi mesin pencari berbasis AI yang tersemat secara native pada browser modern saat ini. Mulai dari menerapkan struktur skema data terstruktur (schema markup), optimasi pencarian suara (voice search), hingga mematangkan konten informatif berbasis keahlian asli (E-E-A-T).",
                'read_time' => '5 Menit Baca',
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
