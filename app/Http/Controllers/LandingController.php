<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Data Portofolio Statis (Tanpa Database)
     */
    public static function getStaticPortfolios()
    {
        return collect([
            (object)[
                'id' => 5,
                'title' => 'Portal LSP Manajemen Pendidikan Islam',
                'category' => 'Website',
                'image' => 'portfolios/lsp-mpi.jpg',
                'link' => 'https://lspmpi.com/',
                'description' => 'Sistem informasi dan portal resmi Lembaga Sertifikasi Profesi Manajemen Pendidikan Islam (LSP MPI) mencakup fitur registrasi, uji kompetensi, dan direktori sertifikasi terakreditasi.',
                'media_type' => 'link',
                'video_file' => null,
                'video_url' => null,
            ],
            (object)[
                'id' => 4,
                'title' => 'Eduva Space - Manajemen Kos & Hunian Mahasiswa',
                'category' => 'Website',
                'image' => 'portfolios/eduva-space-kos.jpg',
                'link' => 'https://eduvaspace.com/',
                'description' => 'Platform manajemen properti dan hunian mahasiswa terintegrasi (end-to-end) dengan pemetaan kamar, tagihan sewa otomatis, portal monitoring multi-peran, dan modul e-learning.',
                'media_type' => 'link',
                'video_file' => null,
                'video_url' => null,
            ],
            (object)[
                'id' => 3,
                'title' => 'Desain Undangan Pernikahan Salsa & Ricky',
                'category' => 'Desain',
                'image' => 'portfolios/undangan-salsa-ricky.jpg',
                'link' => null,
                'description' => 'Desain grafis dan layout visual elegan untuk undangan pernikahan eksklusif dengan tema adat bernuansa modern.',
                'media_type' => 'image',
                'video_file' => null,
                'video_url' => null,
            ],
            (object)[
                'id' => 2,
                'title' => 'Backend System PT DIGI TEKO',
                'category' => 'Website',
                'image' => 'portfolios/pt-digi-tekno.jpg',
                'link' => 'https://absensiptdigidemoweb.vercel.app/',
                'description' => 'Sistem Presensi Digital Berbasis IoT (ESP32/Arduino & RFID) yang terintegrasi secara real-time dengan web dashboard backend untuk otomatisasi pencatatan dan rekapitulasi kehadiran karyawan.',
                'media_type' => 'link',
                'video_file' => null,
                'video_url' => null,
            ],
            (object)[
                'id' => 1,
                'title' => 'E-Undangan Digital "Biru"',
                'category' => 'Website',
                'image' => 'portfolios/JvuKTxpqxyCVMm9efgVYlR1TaRGqwzEWzSSBfn2d.png',
                'link' => 'https://bybiru.my.id/',
                'description' => 'Platform undangan digital interaktif dan responsif berbagai perangkat dengan integrasi RSVP, navigasi maps, dan galeri interaktif.',
                'media_type' => 'link',
                'video_file' => null,
                'video_url' => null,
            ],
        ]);
    }

    /**
     * Display the public landing page (100% static, no DB).
     */
    public function index()
    {
        $portfolios = self::getStaticPortfolios();
        return view('welcome', compact('portfolios'));
    }
}
