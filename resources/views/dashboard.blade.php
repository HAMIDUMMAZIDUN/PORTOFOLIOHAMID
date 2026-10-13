<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 dark:text-white tracking-tight">
                {{ __('Dashboard Konten') }}
            </h2>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-250 dark:bg-emerald-950/30 dark:text-emerald-400 dark:border-emerald-900 animate-pulse">
                <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full mr-2"></span>
                Sistem Aktif
            </span>
        </div>
    </x-slot>

    <div class="py-8 bg-slate-50/50 dark:bg-[#0b0f19] min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Welcome Admin Card -->
            <div class="rounded-2xl bg-white dark:bg-[#0f1422] border border-slate-200/60 dark:border-slate-800/80 shadow-sm mb-10 p-8 md:p-10 border-l-4 border-l-indigo-500 dark:border-l-indigo-500">
                <div class="max-w-3xl">
                    <span class="text-xs font-bold uppercase tracking-widest text-indigo-500 dark:text-indigo-400 mb-2 block">Panel Pengelola Konten</span>
                    <h3 class="text-2xl md:text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white">Selamat Datang, <span class="text-indigo-500 dark:text-indigo-400 font-light">{{ Auth::user()->name }}</span></h3>
                    <p class="text-slate-500 dark:text-slate-400 font-light mt-3 text-sm md:text-base leading-relaxed">
                        Kelola portofolio projek, daftar paket harga, artikel blog, dan layanan website HA Creative. Perubahan yang Anda simpan akan langsung diperbarui di halaman depan.
                    </p>
                </div>
            </div>

            <!-- Stats Grid & System Info Pane -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Stats Cards -->
                <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Portfolio Summary Card -->
                    <div class="bg-white dark:bg-[#0f1422] rounded-2xl border border-slate-200/60 dark:border-slate-800/80 p-6 shadow-sm flex flex-col justify-between hover:shadow-md hover:border-slate-300 dark:hover:border-slate-700 transition duration-350 group">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="p-3 rounded-xl bg-indigo-50 dark:bg-indigo-950/30 text-indigo-650 dark:text-indigo-400 group-hover:scale-105 transition-transform duration-200">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <span class="text-4xl font-extrabold tracking-tight text-slate-800 dark:text-white">{{ $portfolioCount }}</span>
                            </div>
                            <h4 class="text-base font-bold text-slate-800 dark:text-slate-100">Portofolio Projek</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-2 font-light leading-relaxed">
                                Daftar website, karya desain grafis, dan video yang ditampilkan ke calon klien.
                            </p>
                        </div>
                        <a href="{{ route('admin.portfolios.index') }}" class="block text-center py-2.5 mt-6 bg-slate-900 hover:bg-indigo-700 text-white text-xs font-semibold rounded-xl shadow-sm transition duration-150">
                            Kelola Portofolio
                        </a>
                    </div>

                    <!-- Pricing Summary Card -->
                    <div class="bg-white dark:bg-[#0f1422] rounded-2xl border border-slate-200/60 dark:border-slate-800/80 p-6 shadow-sm flex flex-col justify-between hover:shadow-md hover:border-slate-300 dark:hover:border-slate-700 transition duration-350 group">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="p-3 rounded-xl bg-emerald-50 dark:bg-emerald-950/30 text-emerald-650 dark:text-emerald-400 group-hover:scale-105 transition-transform duration-200">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <span class="text-4xl font-extrabold tracking-tight text-slate-800 dark:text-white">{{ $packageCount }}</span>
                            </div>
                            <h4 class="text-base font-bold text-slate-800 dark:text-slate-100">Paket Harga</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-2 font-light leading-relaxed">
                                Atur nama paket, daftar fitur, dan harga pembuatan website atau layanan desain.
                            </p>
                        </div>
                        <a href="{{ route('admin.packages.index') }}" class="block text-center py-2.5 mt-6 bg-slate-900 hover:bg-emerald-700 text-white text-xs font-semibold rounded-xl shadow-sm transition duration-150">
                            Kelola Paket Harga
                        </a>
                    </div>

                    <!-- Blog Summary Card -->
                    <div class="bg-white dark:bg-[#0f1422] rounded-2xl border border-slate-200/60 dark:border-slate-800/80 p-6 shadow-sm flex flex-col justify-between hover:shadow-md hover:border-slate-300 dark:hover:border-slate-700 transition duration-350 group">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="p-3 rounded-xl bg-rose-50 dark:bg-rose-950/30 text-rose-650 dark:text-rose-400 group-hover:scale-105 transition-transform duration-200">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 4a2 2 0 00-2-2m2 2a2 2 0 11-2 2m2-2v10a2 2 0 01-2-2m-2-2l-4-4m-2 2l2-2m-2 2H3"></path>
                                    </svg>
                                </div>
                                <span class="text-4xl font-extrabold tracking-tight text-slate-800 dark:text-white">{{ $postCount }}</span>
                            </div>
                            <h4 class="text-base font-bold text-slate-800 dark:text-slate-100">Artikel Blog & Panduan</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-2 font-light leading-relaxed">
                                Tulis dan publikasikan panduan serta tips praktis seputar website untuk pembaca.
                            </p>
                        </div>
                        <a href="{{ route('admin.posts.index') }}" class="block text-center py-2.5 mt-6 bg-slate-900 hover:bg-rose-700 text-white text-xs font-semibold rounded-xl shadow-sm transition duration-150">
                            Kelola Artikel Blog
                        </a>
                    </div>

                    <!-- Services Summary Card -->
                    <div class="bg-white dark:bg-[#0f1422] rounded-2xl border border-slate-200/60 dark:border-slate-800/80 p-6 shadow-sm flex flex-col justify-between hover:shadow-md hover:border-slate-300 dark:hover:border-slate-700 transition duration-350 group">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="p-3 rounded-xl bg-blue-50 dark:bg-blue-950/30 text-blue-650 dark:text-blue-400 group-hover:scale-105 transition-transform duration-200">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <span class="text-4xl font-extrabold tracking-tight text-slate-800 dark:text-white">{{ $serviceCount }}</span>
                            </div>
                            <h4 class="text-base font-bold text-slate-800 dark:text-slate-100">Layanan Utama</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-2 font-light leading-relaxed">
                                Kelola kartu layanan di beranda serta bidang keahlian di halaman Tentang Kami.
                            </p>
                        </div>
                        <a href="{{ route('admin.services.index') }}" class="block text-center py-2.5 mt-6 bg-slate-900 hover:bg-blue-700 text-white text-xs font-semibold rounded-xl shadow-sm transition duration-150">
                            Kelola Layanan
                        </a>
                    </div>
                </div>

                <!-- Right Sidebar Guideline Info Panel -->
                <div class="space-y-6">
                    <!-- Timeline Summary Panel -->
                    <div class="bg-white dark:bg-[#0f1422] rounded-2xl border border-slate-200/60 dark:border-slate-800/80 p-6 shadow-sm flex flex-col justify-between hover:shadow-md transition duration-350">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-sm font-bold text-slate-800 dark:text-slate-100 uppercase tracking-wider">Milestone Studio</h4>
                            <span class="text-xl font-black text-slate-800 dark:text-white">{{ $timelineCount }} Periode</span>
                        </div>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-light leading-relaxed">
                            Tahapan perjalanan dan perkembangan HA Creative yang tampil di halaman Tentang Kami.
                        </p>
                        <a href="{{ route('admin.timelines.index') }}" class="block text-center py-2.5 mt-6 border border-slate-200 dark:border-slate-800 hover:border-indigo-600 dark:hover:border-indigo-500 text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 text-xs font-semibold rounded-xl transition duration-150">
                            Kelola Milestone
                        </a>
                    </div>

                    <!-- Quick Guideline Panel -->
                    <div class="bg-gradient-to-br from-indigo-900 to-slate-900 text-white rounded-2xl p-6 shadow-sm border border-slate-850">
                        <h4 class="text-sm font-bold uppercase tracking-wider mb-4 text-indigo-300">Tips Pengelolaan Konten</h4>
                        <ul class="space-y-3.5 text-xs text-slate-300 font-light">
                            <li class="flex items-start">
                                <span class="text-emerald-400 mr-2 font-bold">•</span>
                                <span><strong>Gambar Portofolio:</strong> Gunakan rasio 16:9 atau 4:3 (JPG/PNG/WebP, maks 2MB) agar tampilan feed tetap rapi.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-emerald-400 mr-2 font-bold">•</span>
                                <span><strong>Nomor WhatsApp:</strong> Awali dengan format internasional 62 (contoh: 62812xxxx) untuk tautan chat otomatis.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-emerald-400 mr-2 font-bold">•</span>
                                <span><strong>Kategori:</strong> Pastikan memilih kategori yang tepat agar proyek masuk ke tab filter halaman depan.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
