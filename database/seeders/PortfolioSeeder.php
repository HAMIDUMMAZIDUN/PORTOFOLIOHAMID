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
            'title' => 'Portal LSP Manajemen Pendidikan Islam',
            'category' => 'Website',
            'image' => 'portfolios/lsp-mpi.jpg',
            'link' => 'https://lspmpi.com/',
            'description' => 'Sistem informasi dan portal resmi Lembaga Sertifikasi Profesi Manajemen Pendidikan Islam (LSP MPI) mencakup fitur registrasi, uji kompetensi, dan direktori sertifikasi terakreditasi.',
            'media_type' => 'link',
        ]);

        Portfolio::create([
            'title' => 'Eduva Space - Manajemen Kos & Hunian Mahasiswa',
            'category' => 'Website',
            'image' => 'portfolios/eduva-space-kos.jpg',
            'link' => 'https://eduvaspace.com/',
            'description' => 'Platform manajemen properti dan hunian kos mahasiswa terintegrasi dengan pemetaan kamar, penagihan sewa otomatis, serta dashboard monitoring multi-peran.',
            'media_type' => 'link',
        ]);

        Portfolio::create([
            'title' => 'Backend System PT DIGI TEKO',
            'category' => 'Website',
            'image' => 'portfolios/pt-digi-tekno.jpg',
            'link' => 'https://absensiptdigidemoweb.vercel.app/',
            'description' => 'Sistem absensi, manajemen projek, dan dashboard real-time berbasis IoT dan Laravel untuk efisiensi operasional internal PT Digi Tekno Indonesia.',
            'media_type' => 'link',
        ]);

        Portfolio::create([
            'title' => 'E-Undangan Digital "Biru"',
            'category' => 'Website',
            'image' => 'portfolios/JvuKTxpqxyCVMm9efgVYlR1TaRGqwzEWzSSBfn2d.png',
            'link' => 'https://bybiru.my.id/',
            'description' => 'Platform undangan pernikahan digital interaktif yang dapat dikustomisasi secara instan dengan desain elegan dan audio latar.',
            'media_type' => 'image',
        ]);

        Portfolio::create([
            'title' => 'Desain Undangan Pernikahan Salsa & Ricky',
            'category' => 'Desain',
            'image' => 'portfolios/undangan-salsa-ricky.jpg',
            'link' => null,
            'description' => 'Desain visual dan layout undangan pernikahan Salsa & Ricky dengan sentuhan adat elegan, tipografi premium, dan ornamen eksklusif.',
            'media_type' => 'image',
        ]);
    }
}
