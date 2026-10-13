@extends('layouts.public')

@section('title', 'Sosmed')

@section('content')
    <!-- Hero Header -->
    <section class="py-24 bg-white dark:bg-[#0b0f19] border-b border-slate-200/60 dark:border-slate-800 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <span class="text-premium-emerald text-xs font-bold uppercase tracking-widest block mb-4">Layanan Media Sosial</span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-premium-navy dark:text-white tracking-tight mb-6">
                Jasa Pengelolaan & Desain Media Sosial
            </h1>
            <p class="text-slate-500 dark:text-slate-400 font-light text-sm md:text-lg leading-relaxed max-w-2xl mx-auto mb-10">
                Bantu akun Instagram dan media sosial bisnis Anda tetap aktif, rapi, dan konsisten memikat calon pembeli tanpa menguras waktu operasional harian Anda.
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
                <span class="text-slate-400 dark:text-slate-550 text-xs font-bold uppercase tracking-wider block mb-2">Layanan Konten</span>
                <h2 class="text-3xl font-extrabold text-premium-navy dark:text-white">Apa Saja yang Kami Kerjakan?</h2>
                <p class="text-slate-500 dark:text-slate-400 mt-3 font-light text-xs md:text-sm">
                    Mulai dari riset ide konten, pembuatan materi visual, hingga penulisan caption yang komunikatif.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @forelse($services as $service)
                    @php
                        $href = $service->cta_link;
                        if ($href) {
                            if (Route::has($href)) {
                                $href = route($href);
                            }
                        } else {
                            $href = '#';
                        }
                    @endphp
                    <div class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <div class="w-10 h-10 bg-slate-100 dark:bg-slate-800 text-premium-navy dark:text-white rounded-lg flex items-center justify-center mb-6">
                                @if($service->icon === 'code')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                                @elseif($service->icon === 'palette')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                @elseif($service->icon === 'calendar')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                @elseif($service->icon === 'film')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4"/></svg>
                                @elseif($service->icon === 'chart')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 002 2h2a2 2 0 002-2z"/></svg>
                                @elseif($service->icon === 'camera')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                @else
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012 2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                                @endif
                            </div>
                            <h3 class="text-lg font-bold text-premium-navy dark:text-white mb-3">{{ $service->title }}</h3>
                            <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light font-sans mb-6">
                                {{ $service->description }}
                            </p>
                        </div>
                        @if($service->cta_text)
                            <a href="{{ $href }}" target="_blank"
                               class="text-xs font-bold text-premium-navy dark:text-slate-350 hover:underline">{{ $service->cta_text }} &rarr;</a>
                        @endif
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12 text-slate-400 font-light">
                        Belum ada layanan sosial media yang ditambahkan.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-24 px-6 bg-white dark:bg-[#0b0f19] border-b border-slate-200/60 dark:border-slate-800/80">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-premium-emerald text-xs font-bold uppercase tracking-widest block mb-4">Kenapa Memilih Kami</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-premium-navy dark:text-white tracking-tight mb-6 leading-tight">
                    Konten Terencana, Visual Konsisten, dan Bebas Pusing.
                </h2>
                <p class="text-slate-500 dark:text-slate-400 font-light text-xs md:text-sm leading-relaxed mb-8">
                    Mengelola media sosial sendiri sering kali terkendala waktu dan kehabisan ide. Kami hadir menjadi partner konten Anda agar feed terlihat profesional, pesan produk tersampaikan jelas, dan Anda tetap bisa fokus melayani pembeli.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-2">Desain Khas Brand</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-light">Visual rapi yang selaras dengan warna dan karakter produk Anda.</p>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-2">Caption Komunikatif</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-light">Gaya bahasa yang natural dan mengajak audiens untuk berinteraksi.</p>
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
                        <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-1">Jadwal Posting Teratur</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-light">Kalender konten bulanan yang terjadwal rapi tanpa bolong-bolong.</p>
                    </div>
                </div>
                <!-- feature 2 -->
                <div class="flex items-start space-x-4">
                    <div class="w-8 h-8 rounded-full bg-premium-navy/5 dark:bg-slate-800 text-premium-navy dark:text-slate-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-1">Format Konten Beragam</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-light">Kombinasi feed tunggal, carousel edukasi, dan video pendek (Reels/TikTok).</p>
                    </div>
                </div>
                <!-- feature 3 -->
                <div class="flex items-start space-x-4">
                    <div class="w-8 h-8 rounded-full bg-premium-navy/5 dark:bg-slate-800 text-premium-navy dark:text-slate-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-1">Laporan Perkembangan</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-light">Evaluasi bulanan untuk melihat pertumbuhan akun dan konten terbaik.</p>
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
