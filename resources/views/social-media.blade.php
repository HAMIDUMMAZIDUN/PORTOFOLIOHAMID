@extends('layouts.public')

@section('title', 'Sosial Media Management')

@section('content')
    <!-- Hero Header (Mini Hero Dark - Yoggui Style) -->
    <section class="hero-dark relative isolate pt-32 pb-20 px-6 rounded-b-[2.5rem] sm:rounded-b-[3.5rem] text-white text-center overflow-hidden">
        <div class="max-w-3xl mx-auto relative z-10">
            <span class="eyebrow mb-4">Branding & Konten</span>
            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">
                Pengelolaan & <span class="text-gradient">Desain Media Sosial</span>
            </h1>
            <p class="text-white/70 font-light text-sm sm:text-base leading-relaxed max-w-2xl mx-auto mb-8">
                Bantu akun Instagram dan media sosial bisnis Anda tetap aktif, rapi, dan konsisten memikat calon pembeli tanpa menyita waktu operasional Anda.
            </p>
            <a href="https://wa.me/6281214019947?text=Halo%20Hamid,%20saya%20ingin%20konsultasi%20Jasa%20Sosial%20Media%20Management" target="_blank"
               class="cta-btn">
                <span>Konsultasi Strategi Sosmed</span>
                <span class="cta-btn-icon"><i data-lucide="arrow-right" class="cta-btn-arrow"></i></span>
            </a>
        </div>
    </section>

    <!-- Services Detail (Bento Grid) -->
    <section class="py-24 px-6 bg-slate-50 dark:bg-[#020617] border-b border-slate-200/60 dark:border-white/5">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <p class="eyebrow mb-2">Cakupan Layanan</p>
                <h2 class="section-title text-slate-900 dark:text-white">Apa Saja yang <span class="text-gradient">Kami Kerjakan?</span></h2>
                <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm font-light">
                    Mulai dari riset ide konten, perancangan materi visual kreatif, hingga penulisan caption yang komunikatif.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @forelse($services as $service)
                    @php
                        $href = $service->cta_link;
                        if ($href && Route::has($href)) {
                            $href = route($href);
                        } else {
                            $href = $href ?: '#';
                        }
                    @endphp
                    <div class="p-8 rounded-3xl bg-white dark:bg-[#0b1120] border border-slate-200/80 dark:border-white/10 shadow-sm flex flex-col justify-between hover:shadow-lg transition group">
                        <div>
                            <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-white/5 border border-brand-100 dark:border-white/10 flex items-center justify-center text-brand-600 dark:text-sky-300 mb-6 group-hover:scale-110 transition duration-300">
                                @if($service->icon === 'code')
                                    <i data-lucide="code-2" class="w-6 h-6"></i>
                                @elseif($service->icon === 'palette')
                                    <i data-lucide="palette" class="w-6 h-6"></i>
                                @elseif($service->icon === 'calendar')
                                    <i data-lucide="calendar" class="w-6 h-6"></i>
                                @elseif($service->icon === 'film')
                                    <i data-lucide="video" class="w-6 h-6"></i>
                                @elseif($service->icon === 'chart')
                                    <i data-lucide="bar-chart-3" class="w-6 h-6"></i>
                                @elseif($service->icon === 'camera')
                                    <i data-lucide="camera" class="w-6 h-6"></i>
                                @else
                                    <i data-lucide="instagram" class="w-6 h-6"></i>
                                @endif
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">{{ $service->title }}</h3>
                            <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 leading-relaxed font-light">
                                {{ $service->description }}
                            </p>
                        </div>

                        <div class="pt-6 mt-6 border-t border-slate-100 dark:border-white/5">
                            <a href="https://wa.me/6281214019947?text=Halo%20Hamid,%20saya%20ingin%20tanya%20layanan%20{{ urlencode($service->title) }}" target="_blank"
                               class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-600 dark:text-sky-300 hover:underline">
                                <span>Tanyakan Layanan Ini</span>
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <!-- Fallback default cards -->
                    <div class="p-8 rounded-3xl bg-white dark:bg-[#0b1120] border border-slate-200/80 dark:border-white/10 shadow-sm">
                        <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-white/5 flex items-center justify-center text-brand-600 dark:text-sky-300 mb-6">
                            <i data-lucide="palette" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Feed & Story Design</h3>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 leading-relaxed font-light">
                            Desain feed Instagram bertema serasi, profesional, dan eye-catching untuk produk Anda.
                        </p>
                    </div>
                    <div class="p-8 rounded-3xl bg-white dark:bg-[#0b1120] border border-slate-200/80 dark:border-white/10 shadow-sm">
                        <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-white/5 flex items-center justify-center text-brand-600 dark:text-sky-300 mb-6">
                            <i data-lucide="calendar" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Content Planning & Copywriting</h3>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 leading-relaxed font-light">
                            Penyusunan kalender konten bulanan lengkap dengan caption persuasif dan hashtag terarah.
                        </p>
                    </div>
                    <div class="p-8 rounded-3xl bg-white dark:bg-[#0b1120] border border-slate-200/80 dark:border-white/10 shadow-sm">
                        <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-white/5 flex items-center justify-center text-brand-600 dark:text-sky-300 mb-6">
                            <i data-lucide="video" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Reels & TikTok Editing</h3>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 leading-relaxed font-light">
                            Video pendek vertikal dengan ritme dinamis dan teks penjelas untuk menjangkau penonton baru.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
