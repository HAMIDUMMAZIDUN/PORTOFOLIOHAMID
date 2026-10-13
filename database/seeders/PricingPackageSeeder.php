<?php

namespace Database\Seeders;

use App\Models\PricingPackage;
use Illuminate\Database\Seeder;

class PricingPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PricingPackage::truncate();
        $packages = [
            [
                'name' => 'Hemat',
                'category' => 'Profil & Landing Page',
                'price' => 'Rp 500.000',
                'renewal_price' => 'Rp 150.000 / tahun',
                'features' => "1 Halaman\nDomain .my.id (1 Thn)\nHosting 500MB (1 Thn)\nDesain Standar\nRevisi 1x\nResponsive Design",
                'wa_text' => 'Halo HA Creative, saya ingin memesan Paket Hemat.',
                'is_popular' => false,
            ],
            [
                'name' => 'UMKM',
                'category' => 'Profil & Landing Page',
                'price' => 'Rp 1.000.000',
                'renewal_price' => 'Rp 350.000 / tahun',
                'features' => "Up to 5 Halaman\nDomain .com / .my.id (1 Thn)\nHosting 1GB (1 Thn)\nDesain Premium\nRevisi 2x\nWhatsApp Chat Widget",
                'wa_text' => 'Halo HA Creative, saya ingin memesan Paket UMKM.',
                'is_popular' => false,
            ],
            [
                'name' => 'Website Untung',
                'category' => 'Profil & Landing Page',
                'price' => 'Rp 1.500.000',
                'renewal_price' => 'Rp 400.000 / tahun',
                'features' => "Up to 10 Halaman\nDomain .com (1 Thn)\nHosting 2GB (1 Thn)\nDesain Custom Modern\nRevisi 3x\nIntegrasi Google Maps\nChat Widget WhatsApp\nFast Loading Speed",
                'wa_text' => 'Halo HA Creative, saya ingin memesan Paket Website Untung.',
                'is_popular' => true,
            ],
            [
                'name' => 'Bisnis',
                'category' => 'Profil & Landing Page',
                'price' => 'Rp 2.000.000',
                'renewal_price' => 'Rp 500.000 / tahun',
                'features' => "Halaman Unlimited\nDomain .com (1 Thn)\nHosting 3GB (1 Thn)\nPremium Design UI/UX\nRevisi 5x\nSEO Optimization\nStatistik Pengunjung (Analytics)",
                'wa_text' => 'Halo HA Creative, saya ingin memesan Paket Bisnis.',
                'is_popular' => false,
            ],
            [
                'name' => 'Bisnis Plus',
                'category' => 'Profil & Landing Page',
                'price' => 'Rp 2.500.000',
                'renewal_price' => 'Rp 600.000 / tahun',
                'features' => "Halaman Unlimited\nDomain .com (1 Thn)\nHosting 5GB (1 Thn)\nCustom Premium Design\nRevisi Sepuasnya (2 Minggu)\nSEO Setup & Analytics\nKecepatan Tinggi (Speed Optimization)",
                'wa_text' => 'Halo HA Creative, saya ingin memesan Paket Bisnis Plus.',
                'is_popular' => false,
            ],
            [
                'name' => 'Bisnis High',
                'category' => 'Profil & Landing Page',
                'price' => 'Rp 3.500.000',
                'renewal_price' => 'Rp 800.000 / tahun',
                'features' => "Halaman Unlimited\nDomain .com (1 Thn)\nHosting 10GB / Cloud (1 Thn)\nCustom Premium Design\nRevisi Sepuasnya (1 Bulan)\nFull SEO & Speed Tuning\nKeamanan SSL Premium\nFree Maintenance 3 Bulan",
                'wa_text' => 'Halo HA Creative, saya ingin memesan Paket Bisnis High.',
                'is_popular' => false,
            ],
            [
                'name' => 'Toko WA',
                'category' => 'Toko Online',
                'price' => 'Rp 1.500.000',
                'renewal_price' => 'Rp 450.000 / tahun',
                'features' => "Katalog Produk\nDomain .com (1 Thn)\nHosting 2GB (1 Thn)\nKeranjang Belanja ke WA\nRevisi 3x\nPanduan Upload Produk",
                'wa_text' => 'Halo HA Creative, saya ingin memesan Paket Toko WA.',
                'is_popular' => false,
            ],
            [
                'name' => 'Toko Bisnis',
                'category' => 'Toko Online',
                'price' => 'Rp 2.500.000',
                'renewal_price' => 'Rp 600.000 / tahun',
                'features' => "Katalog & Checkout Otomatis\nDomain .com (1 Thn)\nHosting 5GB (1 Thn)\nIntegrasi Hitung Ongkir Otomatis\nRevisi 5x\nPayment Gateway (Midtrans) Ready\nPanduan Lengkap",
                'wa_text' => 'Halo HA Creative, saya ingin memesan Paket Toko Bisnis.',
                'is_popular' => true,
            ],
            [
                'name' => 'Toko High',
                'category' => 'Toko Online',
                'price' => 'Rp 4.000.000',
                'renewal_price' => 'Rp 1.000.000 / tahun',
                'features' => "Toko Online Enterprise\nDomain .com (1 Thn)\nHosting 10GB / VPS (1 Thn)\nIntegrasi Payment & Ongkir Otomatis\nRevisi Sepuasnya\nCustom Web Panel\nFree Maintenance 3 Bulan\nLaporan Bulanan",
                'wa_text' => 'Halo HA Creative, saya ingin memesan Paket Toko High.',
                'is_popular' => false,
            ],
            [
                'name' => 'Custom',
                'category' => 'Custom',
                'price' => 'Mulai Rp 5.000.000',
                'renewal_price' => 'Sesuai Kebutuhan Server',
                'features' => "Sesuai Request Fitur\nDomain Bebas\nServer Cloud / VPS\nDesain Custom Figma\nTim Developer Khusus\nFitur Apapun (Sistem Informasi, Portal, dll)",
                'wa_text' => 'Halo HA Creative, saya ingin berkonsultasi mengenai Paket Custom.',
                'is_popular' => false,
            ],
            [
                'name' => 'Identity Branding',
                'category' => 'Desain & Sosmed',
                'price' => 'Rp 300.000',
                'renewal_price' => 'Sekali Bayar',
                'features' => "3 Alternatif Konsep Logo\nPalet Warna & Visual Assets\nFile Master Vector (AI/PDF)\nRevisi Maksimal 3x",
                'wa_text' => 'Halo HA Creative, saya tertarik dengan Paket Desain Identity Branding.',
                'is_popular' => false,
            ],
            [
                'name' => 'UI/UX Design Studio',
                'category' => 'Desain & Sosmed',
                'price' => 'Rp 1.500.000',
                'renewal_price' => 'Sekali Bayar',
                'features' => "Hingga 8 Halaman Screen\nWireframe & User Flow\nPrototype Interaktif Figma\nDesign System (Asset Library)",
                'wa_text' => 'Halo HA Creative, saya tertarik dengan Paket UI/UX Design Studio.',
                'is_popular' => false,
            ],
            [
                'name' => 'Social Media Management',
                'category' => 'Desain & Sosmed',
                'price' => 'Rp 800.000',
                'renewal_price' => 'Per Bulan (Instagram/TikTok)',
                'features' => "12 Konten Bulanan (Feed/Reels)\nCopywriting Caption & Hashtag\nPenyusunan Kalender Konten bulanan\nDesain Visual High-Quality",
                'wa_text' => 'Halo HA Creative, saya tertarik dengan Paket Social Media Management.',
                'is_popular' => true,
            ],
        ];

        foreach ($packages as $pkg) {
            PricingPackage::create($pkg);
        }
    }
}
