<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            // Category: Layanan (Landing Page)
            [
                'category' => 'Layanan',
                'title' => 'Jasa Pembuatan Website',
                'icon' => 'code',
                'description' => 'Mulai dari landing page profil perusahaan, platform katalog produk, hingga sistem dashboard operasional custom yang cepat, ramah SEO, dan responsif di semua perangkat.',
                'cta_text' => 'Pesan Website & Lihat Paket',
                'cta_link' => 'pricing',
                'order' => 1,
            ],
            [
                'category' => 'Layanan',
                'title' => 'Jasa Desain Grafis & UI/UX',
                'icon' => 'palette',
                'description' => 'Desain antarmuka (UI/UX) aplikasi web/mobile menggunakan Figma, rancangan identitas brand (logo & visual guidelines), serta desain media sosial yang premium dan profesional.',
                'cta_text' => 'Lihat Paket Sosmed & Desain',
                'cta_link' => 'social-media',
                'order' => 2,
            ],

            // Category: Sosmed (Social Media Page)
            [
                'category' => 'Sosmed',
                'title' => 'Pengelolaan Harian & Kalender',
                'icon' => 'calendar',
                'description' => 'Pengelolaan harian untuk akun media sosial utama (Instagram, TikTok, dan Facebook). Menyusun riset hashtag, merapikan bio, serta menjadwalkan konten bulanan secara berkala.',
                'cta_text' => 'Konsultasi Sekarang',
                'cta_link' => 'https://wa.me/6281214019947?text=Halo%20HA%20Creative,%2520saya%2520ingin%2520konsultasi%2520Jasa%2520Pengelolaan%2520Akun%2520Sosmed',
                'order' => 1,
            ],
            [
                'category' => 'Sosmed',
                'title' => 'Desain Konten & Video',
                'icon' => 'film',
                'description' => 'Produksi visual konten premium berupa infografis, banner promosi, reels/video pendek TikTok, dan copywriting kreatif yang disesuaikan dengan tren terkini demi memicu interaksi.',
                'cta_text' => 'Konsultasi Sekarang',
                'cta_link' => 'https://wa.me/6281214019947?text=Halo%20HA%20Creative,%2520saya%2520ingin%2520konsultasi%2520Desain%252520Konten%2520dan%2520Video',
                'order' => 2,
            ],
            [
                'category' => 'Sosmed',
                'title' => 'Analisis & Performa Iklan',
                'icon' => 'chart',
                'description' => 'Pengelolaan iklan (Meta Ads & TikTok Ads) dengan penargetan audiens yang efisien untuk melipatgandakan omzet, lengkap dengan laporan data performa perkembangan akun yang transparan.',
                'cta_text' => 'Konsultasi Sekarang',
                'cta_link' => 'https://wa.me/6281214019947?text=Halo%20HA%20Creative,%2520saya%2520ingin%2520konsultasi%2520Iklan%2520dan%2520Laporan%2520Analitis',
                'order' => 3,
            ],

            // Category: Pilar (About Page Pillars)
            [
                'category' => 'Pilar',
                'title' => 'Jasa Web Development',
                'icon' => 'code',
                'description' => 'Pembuatan website profile bisnis, landing page conversion-oriented, portal e-learning, hingga e-commerce berfitur kustom dan SEO-friendly.',
                'cta_text' => null,
                'cta_link' => null,
                'order' => 1,
            ],
            [
                'category' => 'Pilar',
                'title' => 'Wedding Photography',
                'icon' => 'camera',
                'description' => 'Dokumentasi foto dan video wedding & pre-wedding profesional berskala sinematik, menangkap emosi nyata di setiap momen sakral Anda.',
                'cta_text' => null,
                'cta_link' => null,
                'order' => 2,
            ],
            [
                'category' => 'Pilar',
                'title' => 'Sosial Media Spesialis',
                'icon' => 'chat',
                'description' => 'Pengelolaan konten branding akun Instagram/TikTok, optimasi interaksi audiens, strategi caption terstruktur, dan analisis report berkala.',
                'cta_text' => null,
                'cta_link' => null,
                'order' => 3,
            ],
            [
                'category' => 'Pilar',
                'title' => 'Desain Grafis & UI/UX',
                'icon' => 'palette',
                'description' => 'Penyusunan identitas visual brand (logo guidlines), wireframing aplikasi, desain interface Figma interaktif, dan materi promosi cetak/digital.',
                'cta_text' => null,
                'cta_link' => null,
                'order' => 4,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
