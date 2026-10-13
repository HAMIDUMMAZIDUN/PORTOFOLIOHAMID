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
        BlogPost::truncate();
        $posts = [
            [
                'title' => 'Mengapa Website Profil Sangat Penting untuk Kredibilitas UMKM Saat Ini',
                'category' => 'Tips Website',
                'image' => null,
                'content' => 'Banyak calon pelanggan yang memeriksa website sebelum memutuskan membeli produk atau memakai jasa. Memiliki website profil yang rapi memberikan kesan profesional, memudahkan pelanggan mengecek portofolio dan legalitas, serta membuka peluang kerja sama yang lebih besar bagi bisnis Anda.',
                'read_time' => '4 Menit Baca',
            ],
            [
                'title' => 'Cara Mudah Optimasi Gambar Agar Website Tetap Cepat Tanpa Mengurangi Kualitas',
                'category' => 'Optimasi Web',
                'image' => null,
                'content' => 'Gambar berukuran besar sering menjadi penyebab utama website lambat dibuka di HP. Pelajari cara memilih format modern seperti WebP, mengatur dimensi gambar yang pas, dan memanfaatkan kompresi otomatis agar halaman web ringan diakses oleh calon pembeli.',
                'read_time' => '5 Menit Baca',
            ],
            [
                'title' => 'Tips Mengatur Kalender Konten Instagram agar Konsisten Tanpa Kehabisan Ide',
                'category' => 'Media Sosial',
                'image' => null,
                'content' => 'Menyiapkan materi postingan setiap hari sering kali melelahkan dan menyita waktu operasional. Dengan membagi konten ke dalam pilar edukasi, promosi, dan testimoni, Anda bisa merencanakan jadwal satu bulan ke depan dengan jauh lebih tenang dan teratur.',
                'read_time' => '4 Menit Baca',
            ],
            [
                'title' => 'Anatomi Landing Page yang Efektif Mengubah Pengunjung Menjadi Pembeli',
                'category' => 'Desain & Konversi',
                'image' => null,
                'content' => 'Landing page yang baik bukan hanya tentang visual yang indah, tetapi bagaimana alur informasi disusun dari atas ke bawah. Mulai dari judul penawaran yang to-the-point, keunggulan produk, ulasan pelanggan, hingga tombol WhatsApp yang mudah dijangkau.',
                'read_time' => '6 Menit Baca',
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
