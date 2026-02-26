<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamid Abdul Aziz | Web Developer & IT Creative</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .scroll-smooth { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 scroll-smooth">

    <nav class="fixed w-full bg-white/90 backdrop-blur-sm shadow-sm z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-blue-900">Portofolio<span class="text-orange-500">Hamid</span></a>
            <div class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="{{ url('/tentang-saya') }}" class="hover:text-orange-500 transition">Tentang Saya</a>
                <a href="#services" class="hover:text-orange-500 transition">Layanan</a>
                <a href="#portfolio" class="hover:text-orange-500 transition">Portofolio</a>
                <a href="https://wa.me/6281214019947?text=Halo%20Hamid,%20saya%20tertarik%20dengan%20jasa%20Anda" target="_blank" class="px-8 py-4 bg-green-500 rounded-lg font-bold hover:bg-green-400 transition flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-8.68-2.031-.967-.272-.099-.47-.149-.669.198-.198.346-.769.967-.943 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                    <span>Chat WhatsApp</span>
                </a>
            </div>
        </div>
    </nav>

    <section class="pt-32 pb-20 px-6 bg-gradient-to-br from-blue-50 to-white">
        <div class="container mx-auto text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-orange-100 text-orange-600 text-xs font-bold tracking-wide mb-4">OPEN FOR PROJECTS</span>
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                Web Developer &<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-orange-500">Creative Visual Storyteller</span>
            </h1>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Halo, saya <b>Hamid Abdul Aziz</b>. Web Developer & Junior IT Support yang juga berpengalaman sebagai QA Tester dan Fotografer/Videografer profesional.
            </p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="#contact" class="px-8 py-3 bg-blue-900 text-white rounded-lg font-semibold hover:bg-blue-800 transition shadow-lg shadow-blue-900/20">Ayo Diskusi</a>
                <a href="{{ url('/tentang-saya') }}" class="px-8 py-3 bg-white text-gray-700 border border-gray-200 rounded-lg font-semibold hover:bg-gray-50 transition">Lihat Karya</a>
                <a href="#portfolio" class="px-8 py-3 bg-orange-500 text-white rounded-lg font-semibold hover:bg-orange-400 transition shadow-lg shadow-orange-500/20">Portofolio Web</a>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <div class="h-64 w-64 bg-gray-200 rounded-2xl mx-auto md:mx-0 overflow-hidden shadow-xl border-4 border-white transform hover:scale-105 transition duration-300">
                        <img src="{{ asset('hamid.jpg') }}" alt="Hamid Abdul Aziz" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold mb-4">Web Developer & Lebih dari Sekedar Kode</h2>
                    <p class="text-gray-600 mb-6">
                        Saya adalah <b>Web Developer</b> dengan pengalaman nyata membangun aplikasi web menggunakan <b>Laravel (PHP)</b>, HTML, CSS, dan JavaScript. Selain itu, saya pernah menjabat sebagai <b>Backend Developer & Project Manager</b> di <b>PT DIGI TEKO INDONESIA</b>, serta aktif sebagai fotografer/videografer profesional untuk event pernikahan.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 bg-gray-50 rounded-lg border-l-4 border-blue-600">
                            <h3 class="font-bold text-gray-900">Web Dev Stack</h3>
                            <p class="text-sm text-gray-500 mt-1">Laravel, PHP, HTML/CSS/JS, MySQL, Git, Flutter, QA Testing</p>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-lg border-l-4 border-orange-500">
                            <h3 class="font-bold text-gray-900">Creative Tools</h3>
                            <p class="text-sm text-gray-500 mt-1">Lightroom, Capcut, Canva, Photography & Videography</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Solusi Hybrid Untuk Anda</h2>
                <p class="text-gray-600">Pilih layanan yang sesuai dengan kebutuhan bisnis atau proyek Anda.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition border border-gray-100">
                    <div class="w-12 h-12 text-blue-600 rounded-lg flex items-center justify-center text-2xl mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Web Development & IT Support</h3>
                    <p class="text-gray-500 mb-4 text-sm">Pembuatan website profil, maintenance sistem sekolah/UMKM, hingga instalasi jaringan & hardware.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition border border-gray-100 relative overflow-hidden">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white text-xs px-2 py-1 rounded-bl-lg">Special Skill</div>
                    <div class="w-12 h-12 text-green-600 rounded-lg flex items-center justify-center text-2xl mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">QA & Bug Testing</h3>
                    <p class="text-gray-500 mb-4 text-sm">Testing aplikasi web/mobile (Manual/Blackbox) untuk memastikan software berjalan lancar sebelum rilis.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition border border-gray-100">
                    <div class="w-12 h-12 text-orange-600 rounded-lg flex items-center justify-center text-2xl mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Creative Photo & Video</h3>
                    <p class="text-gray-500 mb-4 text-sm">Dokumentasi Wedding, foto produk UMKM, hingga konten video pendek (Reels/TikTok) untuk promosi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== PORTFOLIO SECTION ====== -->
    <section id="portfolio" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <span class="inline-block py-1 px-3 rounded-full bg-blue-100 text-blue-700 text-xs font-bold tracking-wide mb-3">KARYA NYATA</span>
                <h2 class="text-3xl font-bold mb-4">Portofolio Web Development</h2>
                <p class="text-gray-500 max-w-xl mx-auto">Proyek-proyek web yang telah saya bangun dan deploy secara nyata, mulai dari sistem absensi hingga platform undangan digital.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <!-- Project 1: E-Undangan -->
                <a href="https://undanganbybiru.pameuntasan.com/" target="_blank" class="group block bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 flex items-center justify-center relative overflow-hidden">
                        <img src="{{ asset('scanundangan.png') }}" alt="E-Undangan Digital Biru" class="absolute inset-0 w-full h-full object-cover opacity-70 group-hover:opacity-90 group-hover:scale-110 transition-all duration-500">
                        <span class="relative z-10 bg-white/20 backdrop-blur text-white text-xs font-bold px-3 py-1 rounded-full border border-white/30">LIVE WEBSITE</span>
                    </div>
                    <div class="p-6">
                        <span class="text-blue-600 text-xs font-bold tracking-widest uppercase">Web Development</span>
                        <h3 class="text-lg font-bold mt-1 mb-2 text-gray-900">E-Undangan Digital "Biru"</h3>
                        <p class="text-gray-500 text-sm mb-4">Platform undangan pernikahan digital interaktif yang dapat dikustomisasi.</p>
                        <span class="inline-flex items-center text-blue-600 text-sm font-semibold gap-1 group-hover:gap-2 transition-all">
                            Kunjungi Website
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                        </span>
                    </div>
                </a>

                <!-- Project 2: Backend PT DIGI TEKO -->
                <a href="https://absensiptdigi.pameuntasan.com/" target="_blank" class="group block bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:-translate-y-1">
                    <div class="h-48 bg-gray-200 relative overflow-hidden">
                        <img src="{{ asset('landpage-pt-digi.jpg') }}" alt="Backend System PT DIGI TEKO" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-500">
                        <span class="absolute top-3 right-3 z-10 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">LIVE WEBSITE</span>
                    </div>
                    <div class="p-6">
                        <span class="text-green-600 text-xs font-bold tracking-widest uppercase">Laravel Backend</span>
                        <h3 class="text-lg font-bold mt-1 mb-2 text-gray-900">Backend System PT DIGI TEKO</h3>
                        <p class="text-gray-500 text-sm mb-4">Sistem absensi, project management & dashboard berbasis Laravel untuk perusahaan IT.</p>
                        <span class="inline-flex items-center text-green-600 text-sm font-semibold gap-1 group-hover:gap-2 transition-all">
                            Kunjungi Website
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                        </span>
                    </div>
                </a>

                <!-- Project 3: Portofolio ini sendiri -->
                <div class="group block bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-br from-gray-800 to-blue-900 flex items-center justify-center relative overflow-hidden">
                        <div class="text-center">
                            <div class="text-5xl font-black text-white/20 select-none">Hamid<span class="text-orange-400">.Dev</span></div>
                        </div>
                        <span class="absolute top-3 right-3 bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">PROJECT INI</span>
                    </div>
                    <div class="p-6">
                        <span class="text-orange-500 text-xs font-bold tracking-widest uppercase">Laravel + Tailwind</span>
                        <h3 class="text-lg font-bold mt-1 mb-2 text-gray-900">Website Portofolio Ini</h3>
                        <p class="text-gray-500 text-sm mb-4">Portofolio pribadi yang dibangun dengan Laravel framework & Tailwind CSS, deployed di hosting.</p>
                        <span class="inline-flex items-center text-orange-500 text-sm font-semibold gap-1">
                            Sedang Anda Baca
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </span>
                    </div>
                </div>

            </div>

            <div class="text-center mt-10">
                <a href="{{ url('/tentang-saya') }}" class="inline-flex items-center gap-2 text-blue-900 font-semibold hover:underline">
                    Lihat Semua Karya → 
                </a>
            </div>
        </div>
    </section>

    <section id="contact" class="py-20 bg-blue-900 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">Siap Memulai Project?</h2>
            <p class="text-blue-200 mb-8 max-w-lg mx-auto">
                Apakah Anda butuh sistem IT yang handal atau dokumentasi visual yang estetik? Hubungi saya untuk konsultasi gratis.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="https://wa.me/6281214019947?text=Halo%20Hamid,%20saya%20tertarik%20dengan%20jasa%20Anda" target="_blank" class="px-8 py-4 bg-green-500 rounded-lg font-bold hover:bg-green-400 transition flex items-center justify-center gap-2">
                    <span>Chat WhatsApp</span>
                </a>
                <a href="mailto:hamidabdulaziz36@gmail.com" class="px-8 py-4 bg-transparent border border-white rounded-lg font-bold hover:bg-white/10 transition">
                    Kirim Email
                </a>
            </div>
            <p class="mt-12 text-blue-400 text-sm">
                © 2026 Hamid Abdul Aziz. Built with Laravel & Tailwind.
            </p>
        </div>
    </section>

</body>
</html>