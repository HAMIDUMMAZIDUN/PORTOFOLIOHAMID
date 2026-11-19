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
                        Kelola portofolio projek dan riwayat pengalaman karier Anda.
                    </p>
                </div>
            </div>

            <!-- Stats Grid & Management Pane -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <!-- Portfolio Summary Card -->
                <div class="bg-white dark:bg-[#0f1422] rounded-3xl border border-slate-200/60 dark:border-slate-800/80 p-8 shadow-sm flex flex-col justify-between hover:shadow-md hover:border-indigo-400 dark:hover:border-indigo-500 transition duration-300 group">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="p-3.5 rounded-2xl bg-indigo-50 dark:bg-indigo-950/40 text-indigo-600 dark:text-indigo-400 group-hover:scale-110 transition-transform duration-200">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-5xl font-black tracking-tight text-slate-800 dark:text-white">{{ $portfolioCount }}</span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white">Portofolio Projek</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-2 font-light leading-relaxed">
                            Kelola daftar karya website, aplikasi, dan desain grafis yang ditampilkan di galeri utama.
                        </p>
                    </div>
                    <a href="{{ route('admin.portfolios.index') }}" class="block text-center py-3.5 mt-8 bg-slate-900 hover:bg-indigo-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-sm transition duration-150">
                        Buka Manajemen Portofolio &rarr;
                    </a>
                </div>

                <!-- Timeline / Experience Summary Card -->
                <div class="bg-white dark:bg-[#0f1422] rounded-3xl border border-slate-200/60 dark:border-slate-800/80 p-8 shadow-sm flex flex-col justify-between hover:shadow-md hover:border-sky-400 dark:hover:border-sky-500 transition duration-300 group">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="p-3.5 rounded-2xl bg-sky-50 dark:bg-sky-950/40 text-sky-600 dark:text-sky-400 group-hover:scale-110 transition-transform duration-200">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-5xl font-black tracking-tight text-slate-800 dark:text-white">{{ $timelineCount }}</span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white">Riwayat & Pengalaman Karier</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-2 font-light leading-relaxed">
                            Atur tahapan perjalanan profesional, milestone, dan deskripsi keahlian yang tampil di halaman Tentang Saya.
                        </p>
                    </div>
                    <a href="{{ route('admin.timelines.index') }}" class="block text-center py-3.5 mt-8 bg-slate-900 hover:bg-sky-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-sm transition duration-150">
                        Buka Manajemen Riwayat &rarr;
                    </a>
                </div>
            </div>

            <!-- Tips Panel -->
            <div class="bg-white dark:bg-[#0f1422] rounded-3xl border border-slate-200/60 dark:border-slate-800/80 p-8 shadow-sm">
                <p class="text-xs font-bold uppercase tracking-widest text-emerald-500 mb-4">Tips Pengelolaan Konten</p>
                <ul class="space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
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
</x-app-layout>
