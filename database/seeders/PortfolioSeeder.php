<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan tabel kosong sebelum seeding
        Portfolio::truncate();

        Portfolio::create([
            'title' => 'E-Undangan Digital "Biru"',
            'category' => 'Website',
            'image' => 'portfolios/scanundangan.png',
            'link' => 'https://bybiru.my.id/',
            'description' => 'Platform undangan pernikahan digital interaktif yang dapat dikustomisasi secara instan dengan desain elegan dan audio latar.',
        ]);

        Portfolio::create([
            'title' => 'Backend System PT DIGI TEKO',
            'category' => 'Website',
            'image' => 'portfolios/landpage-pt-digi.jpg',
            'link' => 'https://absensiptdigidemoweb.vercel.app/',
            'description' => 'Sistem absensi, manajemen projek, dan dashboard real-time berbasis Laravel untuk efisiensi operasional internal perusahaan IT.',
        ]);

        Portfolio::create([
            'title' => 'Desain Undangan Pernikahan Salsa & Sidik',
            'category' => 'Desain',
            'image' => 'portfolios/wedding-salsa-sidik.jpg',
            'link' => null,
            'description' => 'Desain visual undangan pernikahan cetak bertema floral modern rustic dengan tipografi premium dan palet warna hangat.',
        ]);
    }
}
