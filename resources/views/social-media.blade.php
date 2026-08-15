@extends('layouts.public')

@section('title', 'Jasa Sosial Media Management Premium | HA Creative')

@section('content')
    <!-- Hero Header -->
    <section class="py-24 bg-white dark:bg-[#0b0f19] border-b border-slate-200/60 dark:border-slate-800 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <span class="text-premium-emerald text-xs font-bold uppercase tracking-widest block mb-4">Creative Services</span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-premium-navy dark:text-white tracking-tight mb-6">
                Jasa Sosial Media Management
            </h1>
            <p class="text-slate-500 dark:text-slate-400 font-light text-sm md:text-lg leading-relaxed max-w-2xl mx-auto mb-10">
                HA Creative siap membantu bisnis Anda tumbuh lebih cepat, lebih dikenal, dan dikelola secara profesional dengan konten sosial media yang efektif, kreatif, dan impactful.
            </p>
            <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20ingin%20konsultasi%20Jasa%20Sosial%20Media%20Management" target="_blank"
               class="inline-flex items-center justify-center px-7 py-3.5 bg-premium-navy dark:bg-emerald-600 hover:bg-slate-800 dark:hover:bg-emerald-500 text-white text-xs font-bold uppercase tracking-wider rounded-lg shadow-sm transition duration-200">
                Konsultasi Sekarang
            </a>
        </div>
    </section>

    <!-- Services Detail -->
    <section class="py-24 px-6 bg-slate-50 dark:bg-[#0e1320]">
        <div class="max-w-6xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-slate-400 dark:text-slate-550 text-xs font-bold uppercase tracking-wider block mb-2">Layanan Kami</span>
                <h2 class="text-3xl font-extrabold text-premium-navy dark:text-white">Di Mana Kreativitas Bertemu Strategi</h2>
                <p class="text-slate-500 dark:text-slate-400 mt-3 font-light text-xs md:text-sm">
                    Kami memadukan desain visual berkelas dengan perencanaan taktis untuk mendominasi pasar digital.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- item 1 -->
                <div class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-10 h-10 bg-slate-100 dark:bg-slate-800 text-premium-navy dark:text-white rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-premium-navy dark:text-white mb-3">Pengelolaan Harian & Kalender</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light font-sans mb-6">
                            Pengelolaan harian untuk akun media sosial utama (Instagram, TikTok, dan Facebook). Menyusun riset hashtag, merapikan bio, serta menjadwalkan konten bulanan secara berkala.
                        </p>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20ingin%20konsultasi%20Jasa%20Pengelolaan%20Akun%20Sosmed" target="_blank"
                       class="text-xs font-bold text-premium-navy dark:text-slate-350 hover:underline">Konsultasi Sekarang &rarr;</a>
                </div>

                <!-- item 2 -->
                <div class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-10 h-10 bg-slate-100 dark:bg-slate-800 text-premium-navy dark:text-white rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-premium-navy dark:text-white mb-3">Desain Konten & Video</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light font-sans mb-6">
                            Produksi visual konten premium berupa infografis, banner promosi, reels/video pendek TikTok, dan copywriting kreatif yang disesuaikan dengan tren terkini demi memicu interaksi.
                        </p>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20ingin%20konsultasi%20Desain%20Konten%20dan%20Video" target="_blank"
                       class="text-xs font-bold text-premium-navy dark:text-slate-350 hover:underline">Konsultasi Sekarang &rarr;</a>
                </div>

                <!-- item 3 -->
                <div class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-10 h-10 bg-slate-100 dark:bg-slate-800 text-premium-navy dark:text-white rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 002 2h2a2 2 0 002-2z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-premium-navy dark:text-white mb-3">Analisis & Performa Iklan</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light font-sans mb-6">
                            Pengelolaan iklan (Meta Ads & TikTok Ads) dengan penargetan audiens yang efisien untuk melipatgandakan omzet, lengkap dengan laporan data performa perkembangan akun yang transparan.
                        </p>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20ingin%20konsultasi%20Iklan%20dan%20Laporan%20Analitis" target="_blank"
                       class="text-xs font-bold text-premium-navy dark:text-slate-350 hover:underline">Konsultasi Sekarang &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-24 px-6 bg-white dark:bg-[#0b0f19] border-b border-slate-200/60 dark:border-slate-800/80">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-premium-emerald text-xs font-bold uppercase tracking-widest block mb-4">Mengapa Kami</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-premium-navy dark:text-white tracking-tight mb-6 leading-tight">
                    Desain yang baik berawal dari latihan. Desain hebat berawal dari jiwa.
                </h2>
                <p class="text-slate-500 dark:text-slate-400 font-light text-xs md:text-sm leading-relaxed mb-8">
                    Kami bukan hanya sekadar mengunggah gambar dan menulis caption. Dengan metodologi riset audiens dan pendekatan kreatif berbasis data-driven, setiap elemen dirancang khusus agar brand Anda diingat, dihormati, dan menghasilkan penjualan yang berkelanjutan.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-2">Desain Rapi & Elegan</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-light">Visual bernilai estetika tinggi, memperkuat persepsi kemewahan bisnis.</p>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-2">Tim Ahli Strategis</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-light">Kami mengerti cara kerja algoritma, hashtag, dan tren terkini.</p>
                    </div>
                </div>
            </div>
            <div class="bg-slate-50 dark:bg-[#0e1320] border border-slate-200/70 dark:border-slate-800 p-8 rounded-2xl space-y-6">
                <!-- feature 1 -->
                <div class="flex items-start space-x-4">
                    <div class="w-8 h-8 rounded-full bg-premium-navy/5 dark:bg-slate-800 text-premium-navy dark:text-slate-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-1">Professional & Clean Design</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-light">Setiap aset visual dibuat custom menggunakan guideline warna yang konsisten.</p>
                    </div>
                </div>
                <!-- feature 2 -->
                <div class="flex items-start space-x-4">
                    <div class="w-8 h-8 rounded-full bg-premium-navy/5 dark:bg-slate-800 text-premium-navy dark:text-slate-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-1">Creative Solution & Fresh Idea</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-light">Solusi out-of-the-box untuk memecahkan kebosanan feed media sosial Anda.</p>
                    </div>
                </div>
                <!-- feature 3 -->
                <div class="flex items-start space-x-4">
                    <div class="w-8 h-8 rounded-full bg-premium-navy/5 dark:bg-slate-800 text-premium-navy dark:text-slate-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-1">Analytic & Reporting</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-light">Evaluasi berkala bulanan mengenai jangkauan, interaksi, dan tingkat konversi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client / Brand List (Mock Portfolio) -->
    <section class="py-24 px-6 bg-slate-50 dark:bg-[#0e1320]">
        <div class="max-w-6xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-slate-400 dark:text-slate-500 text-xs font-bold uppercase tracking-wider block mb-2">Klien Kreatif</span>
                <h2 class="text-3xl font-extrabold text-premium-navy dark:text-white">Brand yang Mempercayai Kami</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 items-center text-center">
                <div class="p-6 bg-white dark:bg-[#0f1422] rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                    <p class="font-bold text-slate-700 dark:text-slate-300 text-sm">Repsol Indonesia</p>
                    <span class="text-[10px] text-slate-450 dark:text-slate-500">Social Media Campaign</span>
                </div>
                <div class="p-6 bg-white dark:bg-[#0f1422] rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                    <p class="font-bold text-slate-700 dark:text-slate-300 text-sm">Toppap App</p>
                    <span class="text-[10px] text-slate-450 dark:text-slate-500">Branding & Management</span>
                </div>
                <div class="p-6 bg-white dark:bg-[#0f1422] rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                    <p class="font-bold text-slate-700 dark:text-slate-300 text-sm">Dkapster</p>
                    <span class="text-[10px] text-slate-450 dark:text-slate-500">Instagram Engagement</span>
                </div>
                <div class="p-6 bg-white dark:bg-[#0f1422] rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                    <p class="font-bold text-slate-700 dark:text-slate-300 text-sm">Goldiceps</p>
                    <span class="text-[10px] text-slate-450 dark:text-slate-500">Creative Production</span>
                </div>
                <div class="p-6 bg-white dark:bg-[#0f1422] rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                    <p class="font-bold text-slate-700 dark:text-slate-300 text-sm">Hi-Cook</p>
                    <span class="text-[10px] text-slate-450 dark:text-slate-500">Feed & Ads Management</span>
                </div>
            </div>
        </div>
    </section>
@endsection
