<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; // PENTING: Tambahkan ini untuk menggunakan 'File'

class WelcomeController extends Controller
{
    /**
     * Menampilkan halaman utama (welcome) dan mengirimkan
     * data galeri gambar ke view.
     */
    public function index()
    {
        // --- LOGIKA PENGAMBILAN GAMBAR DIMASUKKAN DI SINI ---

        // 1. Tentukan path dasar ke folder gambar di dalam 'public'
        $basePath = 'images/';

        // 2. Definisikan kategori dan nama folder yang sesuai
        $categories = [
            'baju'  => 'desain baju',
            'feed'  => 'feed instagram',
            'tugas' => 'mastertugas',
        ];

        $galleries = [];

        // 3. Loop setiap kategori untuk membaca file di dalamnya
        foreach ($categories as $key => $folder) {
            $path = public_path($basePath . $folder);
            
            // Cek apakah folder ada sebelum mencoba membaca
            $files = File::exists($path) ? File::files($path) : [];
            
            $images = [];
            foreach ($files as $file) {
                // Buat path relatif yang akan digunakan di view (cth: 'images/desain baju/file.jpg')
                $images[] = $basePath . $folder . '/' . $file->getFilename();
            }
            $galleries[$key] = $images;
        }

        // 4. Kirim data variabel $galleries ke view 'welcome'
        return view('welcome', ['galleries' => $galleries]);
    }
}
