@extends('layouts.public')

@section('title', 'Blog')

@section('content')
    <!-- Page Header -->
    <section class="py-20 bg-white dark:bg-[#0b0f19] border-b border-slate-200/60 dark:border-slate-800/80 text-center px-6">
        <div class="max-w-3xl mx-auto">
            <span class="text-premium-emerald text-xs font-bold uppercase tracking-widest block mb-3">Blog & Insights</span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-premium-navy dark:text-white tracking-tight mb-4">Wawasan Digital untuk Bisnis Anda</h1>
            <p class="text-slate-500 dark:text-slate-400 font-light text-sm md:text-base leading-relaxed">
                Temukan tips teraktual seputar pengembangan website, strategi iklan berbayar (Ads), optimasi mesin pencari (SEO), dan tren digital marketing terpopuler.
            </p>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="py-20 px-6 bg-slate-50 dark:bg-[#0e1320]">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-10">
                <!-- Blog Item 1 -->
                <div class="bg-white dark:bg-[#0f1422] rounded-2xl border border-slate-200/60 dark:border-slate-800 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition group">
                    <div class="p-8">
                        <div class="flex items-center space-x-3 text-[10px] font-bold text-premium-emerald uppercase tracking-wider mb-4">
                            <span>Google Ads</span>
                            <span class="w-1.5 h-1.5 bg-slate-300 dark:bg-slate-700 rounded-full"></span>
                            <span class="text-slate-400 dark:text-slate-500">14 Agustus 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-premium-navy dark:text-white mb-4 group-hover:text-premium-emerald dark:group-hover:text-emerald-450 transition duration-150 leading-snug">
                            Performance Max 2026: 7 Cara Hemat Budget Iklan dan Naikkan Konversi
                        </h3>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed font-light font-sans mb-6">
                            Optimalkan anggaran pemasaran Google Ads Anda menggunakan kampanye Performance Max secara cerdas dengan memilah audiens secara tepat sasaran dan hemat budget.
                        </p>
                    </div>
                    <div class="px-8 pb-8 pt-4 border-t border-slate-100 dark:border-slate-800/80 flex justify-between items-center">
                        <span class="text-[11px] text-slate-400 dark:text-slate-550 font-medium">5 Menit Baca</span>
                        <a href="#" class="text-xs font-bold text-premium-navy dark:text-slate-300 hover:underline">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Blog Item 2 -->
                <div class="bg-white dark:bg-[#0f1422] rounded-2xl border border-slate-200/60 dark:border-slate-800 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition group">
                    <div class="p-8">
                        <div class="flex items-center space-x-3 text-[10px] font-bold text-premium-emerald uppercase tracking-wider mb-4">
                            <span>Email Marketing</span>
                            <span class="w-1.5 h-1.5 bg-slate-300 dark:bg-slate-700 rounded-full"></span>
                            <span class="text-slate-400 dark:text-slate-500">12 Agustus 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-premium-navy dark:text-white mb-4 group-hover:text-premium-emerald dark:group-hover:text-emerald-450 transition duration-150 leading-snug">
                            Email Marketing UMKM: 7 Langkah Ampuh Naikkan Omzet 2026
                        </h3>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed font-light font-sans mb-6">
                            Bagaimana pelaku usaha mikro kecil dan menengah (UMKM) dapat memanfaatkan strategi pesan email terjadwal demi memicu loyalitas pembeli dan meningkatkan omzet penjualan.
                        </p>
                    </div>
                    <div class="px-8 pb-8 pt-4 border-t border-slate-100 dark:border-slate-800/80 flex justify-between items-center">
                        <span class="text-[11px] text-slate-400 dark:text-slate-550 font-medium">4 Menit Baca</span>
                        <a href="#" class="text-xs font-bold text-premium-navy dark:text-slate-300 hover:underline">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Blog Item 3 -->
                <div class="bg-white dark:bg-[#0f1422] rounded-2xl border border-slate-200/60 dark:border-slate-800 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition group">
                    <div class="p-8">
                        <div class="flex items-center space-x-3 text-[10px] font-bold text-premium-emerald uppercase tracking-wider mb-4">
                            <span>SEO Optimization</span>
                            <span class="w-1.5 h-1.5 bg-slate-300 dark:bg-slate-700 rounded-full"></span>
                            <span class="text-slate-400 dark:text-slate-500">08 Agustus 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-premium-navy dark:text-white mb-4 group-hover:text-premium-emerald dark:group-hover:text-emerald-450 transition duration-150 leading-snug">
                            SEO Gambar 2026: 7 Cara Ampuh Naikkan Traffic Website Bisnismu
                        </h3>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed font-light font-sans mb-6">
                            Tingkatkan peringkat pencarian visual website Anda dengan menerapkan optimasi alt-text gambar, kompresi aset gambar, dan penamaan file gambar yang ramah kata kunci.
                        </p>
                    </div>
                    <div class="px-8 pb-8 pt-4 border-t border-slate-100 dark:border-slate-800/80 flex justify-between items-center">
                        <span class="text-[11px] text-slate-400 dark:text-slate-550 font-medium">6 Menit Baca</span>
                        <a href="#" class="text-xs font-bold text-premium-navy dark:text-slate-300 hover:underline">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Blog Item 4 -->
                <div class="bg-white dark:bg-[#0f1422] rounded-2xl border border-slate-200/60 dark:border-slate-800 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition group">
                    <div class="p-8">
                        <div class="flex items-center space-x-3 text-[10px] font-bold text-premium-emerald uppercase tracking-wider mb-4">
                            <span>Kecerdasan Buatan</span>
                            <span class="w-1.5 h-1.5 bg-slate-300 dark:bg-slate-700 rounded-full"></span>
                            <span class="text-slate-400 dark:text-slate-500">05 Agustus 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-premium-navy dark:text-white mb-4 group-hover:text-premium-emerald dark:group-hover:text-emerald-450 transition duration-150 leading-snug">
                            Browser AI 2026: 7 Cara Siapkan Bisnismu Sekarang
                        </h3>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed font-light font-sans mb-6">
                            Integrasikan dan sesuaikan konten web bisnis Anda agar kompatibel dengan teknologi mesin pencari berbasis AI yang tersemat secara native pada browser modern saat ini.
                        </p>
                    </div>
                    <div class="px-8 pb-8 pt-4 border-t border-slate-100 dark:border-slate-800/80 flex justify-between items-center">
                        <span class="text-[11px] text-slate-400 dark:text-slate-550 font-medium">5 Menit Baca</span>
                        <a href="#" class="text-xs font-bold text-premium-navy dark:text-slate-300 hover:underline">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
