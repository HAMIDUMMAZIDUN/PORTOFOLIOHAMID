@extends('layouts.public')


@section('content')
<!-- Hero Section -->
<section id="hero" class="relative py-24 md:py-32 px-6 overflow-hidden">
    <div class="max-w-5xl mx-auto text-center relative z-10">
        <!-- Subtle Badge -->
        <span class="inline-flex items-center px-4 py-1.5 rounded-full border border-slate-200 dark:border-slate-800 text-slate-500 dark:text-slate-400 text-[11px] font-semibold uppercase tracking-wider mb-8 bg-white dark:bg-[#0f1422] shadow-sm">
            Desain & Pengembangan Website Premium
        </span>

        <!-- Headline -->
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-premium-navy dark:text-white tracking-tight leading-[1.1] mb-8">
            Wujudkan Visi Digital <br>
            <span class="text-slate-400 dark:text-slate-500 font-light">Anda Bersama Kami.</span>
        </h1>

        <!-- Sub-headline -->
        <p class="text-base md:text-lg text-slate-500 dark:text-slate-400 mb-12 max-w-2xl mx-auto leading-relaxed font-light font-sans">
            Tingkatkan citra & kepercayaan bisnismu dengan website desain profesional premium, performa cepat, SEO friendly, dan fitur lengkap aktif 24 jam dengan jangkauan tanpa batas.
        </p>

        <!-- Call to Actions -->
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ route('portfolio') }}" class="w-full sm:w-auto px-7 py-3.5 bg-premium-navy dark:bg-emerald-600 hover:bg-slate-800 dark:hover:bg-emerald-500 text-white rounded-lg text-xs font-bold uppercase tracking-wider shadow-sm transition duration-200 text-center">
                Lihat Portofolio
            </a>
            <a href="#contact" class="w-full sm:w-auto px-7 py-3.5 border border-slate-300 dark:border-slate-700 hover:border-premium-navy dark:hover:border-white text-slate-700 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white rounded-lg text-xs font-bold uppercase tracking-wider transition duration-200 text-center">
                Konsultasi Gratis
            </a>
        </div>
    </div>
</section>

<!-- Trust Features Section (Keunggulan Kami) -->
<section class="py-16 bg-white dark:bg-[#0b0f19] border-t border-b border-slate-200/60 dark:border-slate-800/80">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8 text-center">
            <!-- feature 1 -->
            <div class="p-6">
                <div class="w-10 h-10 bg-slate-100 dark:bg-slate-800/60 text-premium-navy dark:text-white rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-premium-navy dark:text-white mb-2">Tim Profesional</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Dikerjakan oleh tim developer & desainer berpengalaman.</p>
            </div>
            <!-- feature 2 -->
            <div class="p-6">
                <div class="w-10 h-10 bg-slate-100 dark:bg-slate-800/60 text-premium-navy dark:text-white rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-premium-navy dark:text-white mb-2">Anti Lemot & Cepat</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Optimasi struktur kode & kompresi aset gambar maksimal.</p>
            </div>
            <!-- feature 3 -->
            <div class="p-6">
                <div class="w-10 h-10 bg-slate-100 dark:bg-slate-800/60 text-premium-navy dark:text-white rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-premium-navy dark:text-white mb-2">Free Maintenance</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Dukungan pemeliharaan sistem gratis selama aktif.</p>
            </div>
            <!-- feature 4 -->
            <div class="p-6">
                <div class="w-10 h-10 bg-slate-100 dark:bg-slate-800/60 text-premium-navy dark:text-white rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                    </svg>
                </div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-premium-navy dark:text-white mb-2">SEO Friendly</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Membantu website bisnis Anda lebih mudah ditemukan di Google.</p>
            </div>
            <!-- feature 5 -->
            <div class="p-6">
                <div class="w-10 h-10 bg-slate-100 dark:bg-slate-800/60 text-premium-navy dark:text-white rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-premium-navy dark:text-white mb-2">Video Tutorial</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Modul video penggunaan untuk kelola konten mandiri.</p>
            </div>
        </div>
    </div>
</section>

<!-- Layanan Kami (Services Overview) -->
<section id="services" class="py-24 bg-white dark:bg-[#0b0f19]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-20">
            <span class="text-premium-navy dark:text-slate-300 text-xs font-bold uppercase tracking-widest block mb-3">Layanan Kami</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-premium-navy dark:text-white">Keahlian Utama Kami</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-4 leading-relaxed font-light text-sm">
                Fokus pada estetika visual berkelas dan performa kode yang optimal untuk melahirkan produk digital terbaik.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">
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
            <div class="p-10 rounded-2xl border border-slate-150 dark:border-slate-800 bg-[#fcfbf9] dark:bg-[#0f1422] hover:shadow-lg hover:border-slate-300 dark:hover:border-slate-700 transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-lg bg-slate-900/5 dark:bg-slate-800 text-premium-navy dark:text-white flex items-center justify-center mb-8 group-hover:scale-105 transition-transform duration-200">
                        @if($service->icon === 'code')
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        @elseif($service->icon === 'palette')
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        @elseif($service->icon === 'calendar')
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        @elseif($service->icon === 'film')
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4" />
                        </svg>
                        @elseif($service->icon === 'chart')
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 002 2h2a2 2 0 002-2z" />
                        </svg>
                        @elseif($service->icon === 'camera')
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        @else
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-premium-navy dark:text-white mb-4">{{ $service->title }}</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-6 font-light">
                        {{ $service->description }}
                    </p>
                </div>
                @if($service->cta_text)
                <a href="{{ $href }}" class="inline-flex items-center text-xs font-bold uppercase tracking-wider text-premium-navy dark:text-slate-200 hover:underline mt-4">
                    <span>{{ $service->cta_text }}</span>
                    <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                @endif
            </div>
            @empty
            <div class="col-span-2 text-center py-12 text-slate-400 font-light">
                Belum ada data layanan yang ditambahkan.
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Portofolio Highlights (Dynamic Data) -->
<section id="portfolio" class="py-24 bg-slate-50 dark:bg-[#0e1320] border-t border-b border-slate-200/60 dark:border-slate-850"
    x-data="{ activeCategory: 'Semua', lightboxOpen: false, lightboxMediaType: '', lightboxSrc: '', lightboxTitle: '' }">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <span class="text-premium-navy dark:text-slate-300 text-xs font-bold uppercase tracking-widest block mb-3">Karya Pilihan</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-premium-navy dark:text-white">Portofolio Terbaru</h2>
            </div>

            <!-- Category Filter Tabs -->
            <div class="flex items-center space-x-1 bg-slate-200/50 dark:bg-slate-800/60 p-1 rounded-xl">
                <button @click="activeCategory = 'Semua'"
                    :class="activeCategory === 'Semua' ? 'bg-white dark:bg-[#0b0f19] text-premium-navy dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-premium-navy dark:hover:text-white'"
                    class="px-5 py-2 text-xs font-bold rounded-lg transition duration-150">
                    Semua
                </button>
                <button @click="activeCategory = 'Website'"
                    :class="activeCategory === 'Website' ? 'bg-white dark:bg-[#0b0f19] text-premium-navy dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-premium-navy dark:hover:text-white'"
                    class="px-5 py-2 text-xs font-bold rounded-lg transition duration-150">
                    Website
                </button>
                <button @click="activeCategory = 'Desain'"
                    :class="activeCategory === 'Desain' ? 'bg-white dark:bg-[#0b0f19] text-premium-navy dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-premium-navy dark:hover:text-white'"
                    class="px-5 py-2 text-xs font-bold rounded-lg transition duration-150">
                    Desain
                </button>
            </div>
        </div>

        <!-- Dynamic Grid -->
        @if($portfolios->isEmpty())
        <div class="text-center py-20 bg-white dark:bg-[#0f1422] rounded-2xl border border-slate-200/60 dark:border-slate-800 max-w-md mx-auto shadow-sm">
            <svg class="mx-auto h-12 w-12 text-slate-300 dark:text-slate-700 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <h3 class="text-sm font-semibold text-slate-800 dark:text-slate-200">Portofolio Belum Tersedia</h3>
            <p class="text-xs text-slate-400 dark:text-slate-500 mt-1">Gunakan panel admin untuk mengunggah beberapa portofolio.</p>
        </div>
        @else
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($portfolios as $item)
            <div x-show="activeCategory === 'Semua' || activeCategory === '{{ $item->category }}'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                class="bg-white dark:bg-[#0f1422] border border-slate-200/50 dark:border-slate-800 shadow-sm overflow-hidden flex flex-col hover:shadow-md dark:hover:border-slate-700 transition-all duration-300 group">

                <!-- Image / Video Container -->
                <div class="relative overflow-hidden aspect-[4/3] bg-slate-900 border-b border-slate-100 dark:border-slate-800 cursor-pointer"
                    @if($item->media_type === 'video')
                    @click="lightboxMediaType = 'video'; lightboxSrc = '{{ $item->video_file ? asset('storage/' . $item->video_file) : ($item->video_url ?? '') }}'; lightboxTitle = '{{ $item->title }}'; lightboxOpen = true"
                    @elseif($item->media_type === 'link')
                    @click="window.open('{{ $item->link }}', '_blank')"
                    @else
                    @click="lightboxMediaType = 'image'; lightboxSrc = '{{ asset('storage/' . $item->image) }}'; lightboxTitle = '{{ $item->title }}'; lightboxOpen = true"
                    @endif>

                    @if($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                        class="w-full h-full object-cover group-hover:scale-[1.02] transition-transform duration-500 opacity-90 group-hover:opacity-100">
                    @else
                    <!-- Fallback dark block if video only -->
                    <div class="w-full h-full bg-slate-900 flex items-center justify-center text-slate-500">
                        <span class="text-xs uppercase tracking-widest font-bold">Media Video</span>
                    </div>
                    @endif

                    <!-- Play button overlay if media_type = video -->
                    @if($item->media_type === 'video')
                    <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/40 transition-colors duration-200">
                        <div class="w-14 h-14 bg-white/90 dark:bg-slate-800/90 hover:bg-white text-premium-navy dark:text-white rounded-full flex items-center justify-center shadow-lg transition-transform duration-200 transform group-hover:scale-105">
                            <svg class="w-6 h-6 fill-current translate-x-0.5" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                    @endif

                    <!-- Category & Media Type Tag Overlay -->
                    <div class="absolute top-4 left-4 flex items-center space-x-1.5">
                        <span class="bg-premium-navy dark:bg-indigo-950/80 text-white text-[9px] font-bold uppercase tracking-wider px-2.5 py-1 rounded shadow-sm">
                            {{ $item->category }}
                        </span>
                        <span class="bg-white/95 dark:bg-slate-900 text-slate-800 dark:text-slate-200 text-[9px] font-bold uppercase tracking-wider px-2.5 py-1 rounded shadow-sm border border-slate-200 dark:border-slate-850 capitalize">
                            {{ $item->media_type }}
                        </span>
                    </div>
                </div>

                <!-- Content Details -->
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-premium-navy dark:text-white mb-2 line-clamp-1">
                            {{ $item->title }}
                        </h3>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed mb-6 line-clamp-2 font-light font-sans">
                            {{ $item->description }}
                        </p>
                    </div>

                    <!-- CTA Link logic -->
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-800/60 flex items-center justify-between">
                        @if($item->media_type === 'video')
                        <button @click="lightboxMediaType = 'video'; lightboxSrc = '{{ $item->video_file ? asset('storage/' . $item->video_file) : ($item->video_url ?? '') }}'; lightboxTitle = '{{ $item->title }}'; lightboxOpen = true"
                            class="inline-flex items-center text-xs font-bold uppercase tracking-wider text-premium-emerald dark:text-emerald-400 hover:text-emerald-700 dark:hover:text-emerald-300 transition-colors duration-150">
                            <span>Putar Video</span>
                            <svg class="w-3.5 h-3.5 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                        @elseif($item->media_type === 'link' || ($item->category === 'Website' && $item->link))
                        <a href="{{ $item->link }}" target="_blank"
                            class="inline-flex items-center text-xs font-bold uppercase tracking-wider text-premium-navy dark:text-slate-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-150">
                            <span>Kunjungi Link</span>
                            <svg class="w-3.5 h-3.5 ml-1.5 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                        @else
                        <button @click="lightboxMediaType = 'image'; lightboxSrc = '{{ asset('storage/' . $item->image) }}'; lightboxTitle = '{{ $item->title }}'; lightboxOpen = true"
                            class="inline-flex items-center text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-350 hover:text-premium-navy dark:hover:text-white transition-colors duration-150">
                            <span>Lihat Gambar</span>
                            <svg class="w-3.5 h-3.5 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </button>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center justify-center px-6 py-3 border border-slate-300 dark:border-slate-700 hover:border-premium-navy dark:hover:border-white text-slate-700 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white text-xs font-bold uppercase tracking-wider rounded-lg transition duration-200">
                Lihat Semua Portofolio
            </a>
        </div>
        @endif
    </div>

    <!-- Lightbox Modal Container -->
    <div x-show="lightboxOpen" class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/90 backdrop-blur-md"
        x-transition style="display: none;" @keydown.escape.window="lightboxOpen = false">

        <!-- Close Button -->
        <button @click="lightboxOpen = false" class="absolute top-6 right-6 text-white/70 hover:text-white focus:outline-none z-10">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Modal Body -->
        <div class="bg-slate-950 rounded-2xl overflow-hidden max-w-4xl w-full border border-slate-800 shadow-2xl flex flex-col justify-between"
            @click.away="lightboxOpen = false">

            <!-- Media Player -->
            <div class="aspect-video bg-black flex items-center justify-center relative overflow-hidden">

                <!-- Youtube/Web Embed Iframe -->
                <template x-if="lightboxOpen && lightboxMediaType === 'video' && (lightboxSrc.includes('http') && !lightboxSrc.includes('.mp4') && !lightboxSrc.includes('.mov'))">
                    <iframe class="w-full h-full" :src="lightboxSrc" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </template>

                <!-- Native HTML5 video player -->
                <template x-if="lightboxOpen && lightboxMediaType === 'video' && (lightboxSrc.includes('.mp4') || lightboxSrc.includes('.mov') || !lightboxSrc.includes('http'))">
                    <video class="w-full h-full object-contain" controls autoplay>
                        <source :src="lightboxSrc" type="video/mp4">
                        Browser Anda tidak mendukung pemutaran video.
                    </video>
                </template>

                <!-- Image Display -->
                <template x-if="lightboxOpen && lightboxMediaType === 'image'">
                    <img :src="lightboxSrc" class="max-w-full max-h-full object-contain" :alt="lightboxTitle">
                </template>
            </div>

            <!-- Title & Meta -->
            <div class="p-6 bg-slate-900 border-t border-slate-800 text-white flex justify-between items-center">
                <h4 class="text-sm font-bold tracking-tight" x-text="lightboxTitle"></h4>
                <button @click="lightboxOpen = false" class="text-xs text-slate-400 hover:text-white uppercase tracking-wider font-semibold">Tutup</button>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section (Cara Order) -->
<section id="how-it-works" class="py-24 bg-white dark:bg-[#0b0f19]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-20">
            <span class="text-premium-navy dark:text-slate-300 text-xs font-bold uppercase tracking-widest block mb-3">Cara Pemesanan</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-premium-navy dark:text-white">Langkah Mudah Memesan Layanan</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-4 leading-relaxed font-light text-sm">
                Ikuti 4 langkah sederhana berikut hingga website/desain Anda siap diterbitkan secara global.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-6xl mx-auto relative">
            <!-- Step 1 -->
            <div class="text-center relative">
                <div class="w-12 h-12 bg-premium-navy dark:bg-indigo-900/60 text-white dark:text-indigo-200 text-sm font-bold rounded-full flex items-center justify-center mx-auto mb-6">
                    01
                </div>
                <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-2">Konsultasi Ide</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Diskusikan id & fitur website melalui chat WhatsApp.</p>
            </div>
            <!-- Step 2 -->
            <div class="text-center relative">
                <div class="w-12 h-12 bg-premium-navy dark:bg-indigo-900/60 text-white dark:text-indigo-200 text-sm font-bold rounded-full flex items-center justify-center mx-auto mb-6">
                    02
                </div>
                <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-2">Pilih Paket</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Tentukan paket harga yang paling sesuai dengan kebutuhan bisnis.</p>
            </div>
            <!-- Step 3 -->
            <div class="text-center relative">
                <div class="w-12 h-12 bg-premium-navy dark:bg-indigo-900/60 text-white dark:text-indigo-200 text-sm font-bold rounded-full flex items-center justify-center mx-auto mb-6">
                    03
                </div>
                <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-2">Kirim Bahan</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Kirimkan materi logo, teks, dan foto produk ke tim kami.</p>
            </div>
            <!-- Step 4 -->
            <div class="text-center relative">
                <div class="w-12 h-12 bg-premium-navy dark:bg-indigo-900/60 text-white dark:text-indigo-200 text-sm font-bold rounded-full flex items-center justify-center mx-auto mb-6">
                    04
                </div>
                <h4 class="text-sm font-bold text-premium-navy dark:text-white mb-2">Proses Pengerjaan</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Kami kerjakan projek & lakukan penyesuaian revisi sesuai kebutuhan.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section Accordion -->
<section id="faq" class="py-24 bg-slate-50 dark:bg-[#0e1320] border-t border-b border-slate-200/60 dark:border-slate-850" x-data="{ activeFaq: null }">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-premium-navy dark:text-slate-300 text-xs font-bold uppercase tracking-widest block mb-3">FAQ</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-premium-navy dark:text-white">Pertanyaan Umum</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-4 leading-relaxed font-light text-sm">
                Temukan jawaban atas pertanyaan paling umum tentang jasa pembuatan website & branding di bawah ini.
            </p>
        </div>

        <div class="space-y-4 max-w-3xl mx-auto">
            <!-- FAQ Item 1 -->
            <div class="bg-white dark:bg-[#0f1422] rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm transition">
                <button @click="activeFaq = activeFaq === 1 ? null : 1"
                    class="w-full px-6 py-5 text-left font-bold text-premium-navy dark:text-white flex justify-between items-center text-sm focus:outline-none">
                    <span>Bagaimana cara memesan layanan pembuatan website?</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="activeFaq === 1 ? 'transform rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="activeFaq === 1" x-collapse class="px-6 pb-5 text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light border-t border-slate-100 dark:border-slate-800/80 pt-3">
                    Caranya sangat mudah. Cukup klik tombol konsultasi WhatsApp, sampaikan kebutuhan website Anda, pilih paket harga, kirimkan konten (teks/gambar), lakukan pembayaran, dan kami akan memproses pengerjaan serta revisi hingga website Anda siap diterbitkan.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white dark:bg-[#0f1422] rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm transition">
                <button @click="activeFaq = activeFaq === 2 ? null : 2"
                    class="w-full px-6 py-5 text-left font-bold text-premium-navy dark:text-white flex justify-between items-center text-sm focus:outline-none">
                    <span>Apakah ada garansi & pemeliharaan (maintenance) gratis?</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="activeFaq === 2 ? 'transform rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="activeFaq === 2" x-collapse class="px-6 pb-5 text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light border-t border-slate-100 dark:border-slate-800/80 pt-3">
                    Ya. Kami memberikan layanan pemeliharaan (maintenance) secara GRATIS selama domain dan hosting website Anda aktif. Dukungan mencakup perbaikan bug, pemantauan server, dan pembaruan sistem berkala.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white dark:bg-[#0f1422] rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm transition">
                <button @click="activeFaq = activeFaq === 3 ? null : 3"
                    class="w-full px-6 py-5 text-left font-bold text-premium-navy dark:text-white flex justify-between items-center text-sm focus:outline-none">
                    <span>Apa manfaat memiliki website bagi branding bisnis saya?</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="activeFaq === 3 ? 'transform rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="activeFaq === 3" x-collapse class="px-6 pb-5 text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light border-t border-slate-100 dark:border-slate-800/80 pt-3">
                    Website dapat memperkuat kredibilitas brand Anda, memberikan kesan profesional di mata pelanggan, mempermudah akses informasi 24 jam tanpa batas geografis, serta menjadi pusat pemasaran digital (Google Ads / SEO).
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white dark:bg-[#0f1422] rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm transition">
                <button @click="activeFaq = activeFaq === 4 ? null : 4"
                    class="w-full px-6 py-5 text-left font-bold text-premium-navy dark:text-white flex justify-between items-center text-sm focus:outline-none">
                    <span>Berapa lama proses pengerjaan pembuatan website?</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="activeFaq === 4 ? 'transform rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="activeFaq === 4" x-collapse class="px-6 pb-5 text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light border-t border-slate-100 dark:border-slate-800/80 pt-3">
                    Durasi pengerjaan bervariasi bergantung pada tingkat kerumitan. Untuk Paket Landing Page / Hemat biasanya selesai dalam 3-5 hari kerja. Sedangkan untuk paket bisnis kustom / toko online membutuhkan waktu sekitar 7-14 hari kerja setelah bahan lengkap diterima.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action & WhatsApp Form -->
<section id="contact" class="py-24 bg-white dark:bg-[#0b0f19] relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <h2 class="text-3xl md:text-5xl font-extrabold text-premium-navy dark:text-white mb-6 tracking-tight">
            Siap Memulai Proyek Anda?
        </h2>
        <p class="text-slate-500 dark:text-slate-400 mb-12 max-w-xl mx-auto font-light leading-relaxed">
            Hubungi kami sekarang untuk mendapatkan estimasi penawaran dan jadwal konsultasi awal gratis.
        </p>

        <!-- Centered WhatsApp Contact Widget Form -->
        <div class="max-w-md mx-auto p-8 rounded-2xl bg-[#fcfbf9] dark:bg-[#0f1422] border border-slate-200/80 dark:border-slate-800 shadow-sm text-left"
            x-data="{ name: '', service: 'Website', message: '', get waUrl() { return 'https://wa.me/6281214019947?text=' + encodeURIComponent('Halo HA Creative,\n\nNama: ' + this.name + '\nLayanan: ' + this.service + '\nPesan: ' + this.message) } }">
            <form @submit.prevent="window.open(waUrl, '_blank')">
                <div class="mb-5">
                    <label for="client_name" class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">Nama Lengkap</label>
                    <input type="text" id="client_name" x-model="name" required
                        class="w-full bg-white dark:bg-[#0b0f19] border border-slate-300 dark:border-slate-800 rounded-lg px-4 py-2.5 text-sm text-slate-800 dark:text-white focus:outline-none focus:border-premium-navy dark:focus:border-emerald-500 transition duration-150"
                        placeholder="Nama atau Instansi">
                </div>

                <div class="mb-5">
                    <label for="client_service" class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">Layanan yang Dibutuhkan</label>
                    <select id="client_service" x-model="service" required
                        class="w-full bg-white dark:bg-[#0b0f19] border border-slate-300 dark:border-slate-800 rounded-lg px-4 py-2.5 text-sm text-slate-800 dark:text-white focus:outline-none focus:border-premium-navy dark:focus:border-emerald-500 transition duration-150">
                        <option value="Website">Jasa Pembuatan Website</option>
                        <option value="Desain">Jasa Pembuatan Desain</option>
                        <option value="Website & Desain">Website + Desain Bundle</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="client_message" class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">Pesan Singkat</label>
                    <textarea id="client_message" x-model="message" rows="3" required
                        class="w-full bg-white dark:bg-[#0b0f19] border border-slate-300 dark:border-slate-800 rounded-lg px-4 py-2.5 text-sm text-slate-800 dark:text-white focus:outline-none focus:border-premium-navy dark:focus:border-emerald-500 transition duration-150"
                        placeholder="Detail fitur, referensi website, atau tujuan projek..."></textarea>
                </div>

                <button type="submit"
                    class="w-full inline-flex items-center justify-center space-x-2 px-6 py-3 bg-[#25d366] hover:bg-[#20ba5a] text-white font-bold rounded-lg shadow-sm transition duration-200 cursor-pointer text-sm">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-8.68-2.031-.967-.272-.099-.47-.149-.669.198-.198.346-.769.967-.943 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                    </svg>
                    <span>Konsultasi via WhatsApp</span>
                </button>
            </form>
        </div>
    </div>
</section>
@endsection