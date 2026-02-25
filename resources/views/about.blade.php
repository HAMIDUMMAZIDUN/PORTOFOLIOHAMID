<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya | Hamid Abdul Aziz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="w-full bg-white border-b border-gray-200">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-blue-900">Hamid<span class="text-orange-500">.Dev</span></a>
            <a href="{{ url('/') }}" class="text-sm font-medium text-gray-500 hover:text-blue-900 transition">← Kembali ke Beranda</a>
        </div>
    </nav>

    <header class="bg-white py-16 border-b border-gray-100">
        <div class="container mx-auto px-6 max-w-4xl text-center">
            <div class="w-32 h-32 bg-gray-200 rounded-full mx-auto mb-6 flex items-center justify-center overflow-hidden border-4 border-white shadow-lg">
                <img src="{{ asset('hamid.jpg') }}" alt="Hamid Abdul Aziz" class="w-full h-full object-cover">
            </div>
            
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Hamid Abdul Aziz</h1>
            <p class="text-xl text-gray-500 mb-6">Junior IT Support & Creative QA Tester</p>
            
            <p class="leading-relaxed text-gray-600 mb-8 max-w-2xl mx-auto">
                Saya adalah mahasiswa tingkat akhir yang memiliki hasrat besar dalam pengembangan teknologi web dan dokumentasi visual. 
                Memiliki pengalaman nyata dalam memimpin proyek backend dan manajemen kualitas aplikasi (QA), serta kreativitas dalam fotografi acara.
            </p>
            
            <div class="flex justify-center gap-4">
                <a href="https://wa.me/6281214019947" class="px-6 py-2 bg-blue-900 text-white rounded-lg font-semibold hover:bg-blue-800 transition shadow-lg shadow-blue-900/20">Hubungi Saya</a>
                <a href="{{ asset('cv-hamid.pdf') }}" download="CV_Hamid_Abdul_Aziz_IT_Creative.pdf" class="px-6 py-2 border border-gray-300 text-gray-700 bg-white rounded-lg font-semibold hover:bg-gray-50 hover:text-blue-600 hover:border-blue-300 transition flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    <span>Download CV</span>
                </a>
            </div>
        </div>
    </header>

    <section class="py-16">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-2xl font-bold mb-10 text-center">Perjalanan Karir</h2>
            
            <div class="border-l-4 border-blue-100 ml-4 space-y-12">
                
                <div class="relative pl-8">
                    <div class="absolute -left-3 top-0 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <span class="text-xs font-bold text-blue-600 tracking-wide">AGUSTUS - SEPTEMBER 2025</span>
                        <h3 class="text-xl font-bold mt-1">Project Manager & Backend Developer</h3>
                        <p class="text-gray-500 text-sm mb-4">PT DIGI TEKO INDONESIA, Summarecon Bandung</p>
                        <ul class="list-disc list-inside text-gray-600 space-y-2 text-sm">
                            <li>Memimpin tim dalam pengembangan sistem backend menggunakan Laravel.</li>
                            <li>Melakukan manajemen database MySQL dan integrasi API.</li>
                            <li>Bertanggung jawab atas timeline proyek dan koordinasi tim.</li>
                        </ul>
                    </div>
                </div>

                <div class="relative pl-8">
                    <div class="absolute -left-3 top-0 w-6 h-6 bg-orange-500 rounded-full border-4 border-white shadow"></div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <span class="text-xs font-bold text-orange-500 tracking-wide">2025 - SEKARANG</span>
                        <h3 class="text-xl font-bold mt-1">Freelance Photographer & Videographer</h3>
                        <p class="text-gray-500 text-sm mb-4">Self-Employed</p>
                        <ul class="list-disc list-inside text-gray-600 space-y-2 text-sm">
                            <li>Mendokumentasikan acara pernikahan (Ex: Wedding Salsa & Sidik, Jan 2026 | ricky & Elsa, Des 2025)</li>
                            <li>Memproduksi konten video pendek untuk media sosial klien.</li>
                            <li>Editing foto dan video menggunakan Adobe Lightroom & Premiere.</li>
                        </ul>
                    </div>
                </div>

                <div class="relative pl-8">
                    <div class="absolute -left-3 top-0 w-6 h-6 bg-gray-400 rounded-full border-4 border-white shadow"></div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <span class="text-xs font-bold text-gray-500 tracking-wide">SEKARANG</span>
                        <h3 class="text-xl font-bold mt-1">Mahasiswa Tingkat Akhir</h3>
                        <p class="text-gray-500 text-sm mb-4">Sedang Menyusun Skripsi</p>
                        <p class="text-gray-600 text-sm">Fokus pada pengembangan aplikasi web/mobile dan implementasi Quality Assurance.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 bg-white border-t border-gray-100">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-2xl font-bold mb-8 text-center">Keahlian Teknis</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-4 bg-gray-50 rounded-lg">
                    <div class="text-3xl mb-2 flex justify-center text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                    </div>
                    <h3 class="font-semibold">Laravel (PHP)</h3>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <div class="text-3xl mb-2 flex justify-center text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="font-semibold">QA Testing</h3>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <div class="text-3xl mb-2 flex justify-center text-cyan-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18.5L7 13.5l1.5-1.5L12 15.5l8-8 1.5 1.5L12 18.5zM12 11.5L7 6.5l1.5-1.5L12 8.5l3.5-3.5 1.5 1.5L12 11.5z" /></svg>
                    </div>
                    <h3 class="font-semibold">Flutter</h3>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <div class="text-3xl mb-2 flex justify-center text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </div>
                    <h3 class="font-semibold">Photography</h3>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <div class="text-3xl mb-2 flex justify-center text-purple-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.723v6.554a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                    </div>
                    <h3 class="font-semibold">Video Editing</h3>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <div class="text-3xl mb-2 flex justify-center text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>
                    </div>
                    <h3 class="font-semibold">MySQL</h3>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <div class="text-3xl mb-2 flex justify-center text-teal-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" /></svg>
                    </div>
                    <h3 class="font-semibold">Networking</h3>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <div class="text-3xl mb-2 flex justify-center text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                    </div>
                    <h3 class="font-semibold">Git / Github</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50 border-t border-gray-100">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-2xl font-bold mb-10 text-center">Karya Terbaru</h2>

            <div class="grid md:grid-cols-3 gap-8">

                {{-- Card: Undangan Digital --}}
                <a href="https://undanganbybiru.pameuntasan.com/" target="_blank" class="group relative overflow-hidden rounded-xl bg-gray-900 aspect-video block shadow-lg">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 flex items-center justify-center">
                        <div class="text-center px-6">
                            <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-4 border border-white/20">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <p class="text-blue-200 text-sm font-medium">undanganbybiru.pameuntasan.com</p>
                        </div>
                    </div>

                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <span class="text-blue-400 text-xs font-bold tracking-widest uppercase mb-1">Web Development</span>
                        <h3 class="text-white text-xl font-bold">E-Undangan Digital "Biru"</h3>
                        <p class="text-gray-300 text-sm mt-1 mb-3">Platform undangan pernikahan digital interaktif</p>
                        <span class="inline-flex items-center text-white text-sm font-semibold gap-2">
                            Kunjungi Website 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </span>
                    </div>
                </a>

                {{-- Card: Backend System PT DIGI TEKO --}}
                <a href="https://absensiptdigi.pameuntasan.com/" target="_blank" class="group relative overflow-hidden rounded-xl bg-gray-900 aspect-video block shadow-lg">
                    <img src="{{ asset('landpage-pt-digi.jpg') }}" alt="Backend System PT DIGI TEKO" class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-80 group-hover:opacity-100">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <span class="text-blue-400 text-xs font-bold tracking-widest uppercase mb-1">Web Development</span>
                        <h3 class="text-white text-xl font-bold">Backend System PT DIGI TEKO</h3>
                        <p class="text-gray-300 text-sm mt-1 mb-3">Project Management & Absensi System</p>
                        <span class="inline-flex items-center text-white text-sm font-semibold gap-2">
                            Kunjungi Website 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </span>
                    </div>
                </a>

                {{-- Card: Instagram --}}
                <a href="https://instagram.com/galerihamidabdulaziz_" target="_blank" class="group relative overflow-hidden rounded-xl bg-gray-900 aspect-video block shadow-lg">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-600 via-pink-500 to-orange-400 flex items-center justify-center">
                        <div class="text-center px-6">
                            <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-4 border border-white/20">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </div>
                            <p class="text-pink-100 text-sm font-medium">@galerihamidabdulaziz_</p>
                        </div>
                    </div>

                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <span class="text-pink-400 text-xs font-bold tracking-widest uppercase mb-1">Photography & Videography</span>
                        <h3 class="text-white text-xl font-bold">Galeri Instagram</h3>
                        <p class="text-gray-300 text-sm mt-1 mb-3">Koleksi foto & video pernikahan, event, dan konten kreatif</p>
                        <span class="inline-flex items-center text-white text-sm font-semibold gap-2">
                            Lihat di Instagram
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </span>
                    </div>
                </a>

            </div>

            <div class="text-center mt-12">
                <a href="{{ url('/') }}#portfolio" class="inline-flex items-center text-blue-900 font-semibold hover:underline">
                    Lihat Semua Karya di Beranda <span class="ml-2">→</span>
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white py-8 text-center">
        <p class="text-gray-400 text-sm">© 2026 Hamid Abdul Aziz. All rights reserved.</p>
    </footer>

</body>
</html>