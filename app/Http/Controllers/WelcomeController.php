<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WelcomeController extends Controller
{
    // Nama fungsi diubah dari showHomePage menjadi "home" agar cocok dengan route
    public function home() 
    {
        $galleries = [];
        $imagesPath = public_path('images'); // Path ke folder public/images

        // Mengambil semua folder di dalam public/images
        $projectFolders = glob($imagesPath . '/*', GLOB_ONLYDIR);

        foreach ($projectFolders as $folderPath) {
            $folderName = basename($folderPath);
            $title = Str::of($folderName)->replace('-', ' ')->title();
            $imageFiles = glob($folderPath . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);

            $cleanedImagePaths = [];
            foreach ($imageFiles as $imageFile) {
                // Membersihkan path agar bisa digunakan oleh fungsi asset()
                $cleanedImagePaths[] = Str::after($imageFile, public_path());
            }

            $galleries[] = [
                'key' => Str::slug($folderName),
                'title' => $title,
                'images' => $cleanedImagePaths
            ];
        }

        // Mengirimkan variabel $galleries ke view
        return view('welcome', [
            'galleries' => $galleries
        ]);
    }
}