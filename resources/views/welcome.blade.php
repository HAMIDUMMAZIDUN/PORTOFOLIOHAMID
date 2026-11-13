@extends('layouts.public')

@section('title', 'Web Developer & Desain Grafis Bandung')

@section('content')
<!-- =========================================================================
     1. HERO SECTION (Yoggui Dark Aesthetic with Figma Selection & Floating Cursors)
     ========================================================================= -->
<header class="hero-dark relative isolate flex min-h-[calc(100svh-4rem)] flex-col justify-between overflow-hidden rounded-b-[2.5rem] text-white sm:rounded-b-[4rem] pt-24 pb-12 px-6">

    <!-- Floating Collaborator Cursors (Figma Style) -->
    <div class="cta-cursor hero-cursor-1 hidden lg:flex" style="top: 24%; right: 28%;" aria-hidden="true">
        <i data-lucide="mouse-pointer-2" class="w-6 h-6 text-sky-300 drop-shadow" fill="currentColor"></i>
        <span class="bg-sky-500">Web Developer</span>
    </div>
    <div class="cta-cursor hero-cursor-2 hidden lg:flex" style="bottom: 38%; right: 12%;" aria-hidden="true">
        <i data-lucide="mouse-pointer-2" class="w-6 h-6 text-fuchsia-300 drop-shadow" fill="currentColor"></i>
        <span class="bg-fuchsia-500">Client / UMKM</span>
    </div>
    <div class="cta-cursor hero-cursor-3 hidden lg:flex" style="top: 18%; left: 58%;" aria-hidden="true">
        <i data-lucide="mouse-pointer-2" class="w-6 h-6 text-violet-300 drop-shadow" fill="currentColor"></i>
        <span class="bg-violet-500">UI/UX Designer</span>
    </div>

    <!-- Main Hero Content Container -->
    <div class="max-w-7xl mx-auto w-full flex-1 flex flex-col justify-center py-8">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Copy & Figma Frame -->
            <div class="lg:col-span-8 z-10">
                
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-5 py-2 text-xs sm:text-sm font-semibold ring-1 ring-white/30 backdrop-blur mb-6">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-300 animate-pulse"></span>
                    <span>Web Developer & UI/UX Specialist Bandung</span>
                </div>

                <!-- Figma Selection Bounding Box around Name & Title -->
                <div class="hero-selection mb-8">
                    <!-- Top Layer Label -->
                    <span class="hero-layer" aria-hidden="true">
                        <i data-lucide="type" class="w-3.5 h-3.5"></i>
                        Heading / Hamid
                    </span>

                    <!-- 4 Corner Handles -->
                    <span class="hero-handle -top-1.5 -left-1.5"></span>
                    <span class="hero-handle -top-1.5 -right-1.5"></span>
                    <span class="hero-handle -bottom-1.5 -left-1.5"></span>
                    <span class="hero-handle -right-1.5 -bottom-1.5"></span>

                    <!-- Main Headline with Typewriter -->
                    <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight leading-[1.05] text-white">
                        <span class="block text-lg sm:text-xl font-semibold text-white/70 tracking-normal mb-2">
                            Hai, Saya
                        </span>
                        HAMIDUN<br>
                        <span class="text-sky-300 whitespace-nowrap">
                            <span id="typewriter-text">WEB DEVELOPER</span><span class="hero-caret"></span>
                        </span>
                    </h1>

                    <!-- Bottom Dimension Pill -->
                    <span class="hero-size" aria-hidden="true">Hug &times; Hug</span>
                </div>

                <!-- Philosophy Line -->
                <p class="text-2xl sm:text-3xl font-bold font-display text-white mb-4 leading-snug">
                    Website yang baik terasa cepat, rapi, dan meyakinkan.
                </p>

                <!-- Sub-headline Description -->
                <p class="text-base sm:text-lg text-white/70 max-w-2xl font-light leading-relaxed mb-10">
                    Membantu pelaku usaha, brand, dan kreator membangun website siap pakai yang optimal di HP, cepat diakses, terindeks Google, dan mudah dikelola.
                </p>

                <!-- Call to Actions -->
                <div class="flex flex-wrap items-center gap-4">
                    <a href="#contact" class="cta-btn">
                        <span>Konsultasi Gratis</span>
                        <span class="cta-btn-icon" aria-hidden="true">
                            <i data-lucide="arrow-right" class="cta-btn-arrow"></i>
                        </span>
                    </a>
                    <a href="{{ route('portfolio') }}" 
                       class="inline-flex items-center gap-2 rounded-full px-7 py-3.5 text-sm font-bold text-white bg-white/10 hover:bg-white/15 ring-1 ring-white/20 transition backdrop-blur">
                        <span>Lihat Portofolio</span>
                        <i data-lucide="external-link" class="w-4 h-4 text-sky-300"></i>
                    </a>
                </div>
            </div>

            <!-- Right Column: Profile Visual Card -->
            <div class="lg:col-span-4 flex justify-center lg:justify-end z-10">
                <div class="relative w-64 sm:w-72 aspect-[3/4] rounded-3xl overflow-hidden ring-1 ring-white/20 bg-slate-900 shadow-2xl group">
                    <img src="{{ asset('hamid.jpg') }}" alt="Hamid - Web Developer" 
                         class="w-full h-full object-cover grayscale contrast-110 group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700"
                         onerror="this.src='{{ asset('support_agent_avatar.png') }}'">
                    
                    <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-transparent p-6 pt-16 text-white">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-sky-300 block mb-1">Tersedia untuk Projek</span>
                        <p class="text-lg font-bold">Hamid Abdul Aziz</p>
                        <p class="text-xs text-white/70">Fullstack Web & Desain Grafis</p>
                    </div>

                    <div class="absolute top-4 right-4 flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-950/70 border border-white/10 backdrop-blur text-[10px] font-semibold text-emerald-400">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        Online
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Hero Stats Row (#01, #02, #03, #04 - Yoggui Style) -->
    <div class="max-w-7xl mx-auto w-full pt-8 border-t border-white/10">
        <ul class="grid grid-cols-2 md:grid-cols-4 gap-6 text-left">
            <li class="flex flex-col">
                <span class="text-xs font-mono font-bold text-sky-300 mb-1">#01 PENGALAMAN</span>
                <span class="text-2xl sm:text-3xl font-extrabold text-white">5+ Tahun</span>
                <span class="text-xs text-white/60 font-light mt-0.5">Membangun website & sistem web</span>
            </li>
            <li class="flex flex-col">
                <span class="text-xs font-mono font-bold text-sky-300 mb-1">#02 PORTOFOLIO</span>
                <span class="text-2xl sm:text-3xl font-extrabold text-white">50+ Projek</span>
                <span class="text-xs text-white/60 font-light mt-0.5">Selesai & aktif beroperasi online</span>
            </li>
            <li class="flex flex-col">
                <span class="text-xs font-mono font-bold text-sky-300 mb-1">#03 PERFORMA</span>
                <span class="text-2xl sm:text-3xl font-extrabold text-white">100% Responsif</span>
                <span class="text-xs text-white/60 font-light mt-0.5">Cepat & optimal di semua layar HP</span>
            </li>
            <li class="flex flex-col">
                <span class="text-xs font-mono font-bold text-sky-300 mb-1">#04 DUKUNGAN</span>
                <span class="text-2xl sm:text-3xl font-extrabold text-white">Garansi Sistem</span>
                <span class="text-xs text-white/60 font-light mt-0.5">Bantuan perbaikan & panduan pakai</span>
            </li>
        </ul>
    </div>

</header>

<!-- =========================================================================
     2. CLIENT TRUST TICKER (Infinite Marquee - Yoggui Style)
     ========================================================================= -->
<section aria-label="Client Trust" class="py-12 bg-white dark:bg-[#020617] border-b border-slate-200/60 dark:border-white/5 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 mb-6 text-center">
        <p class="text-xs font-bold tracking-widest text-slate-400 dark:text-slate-500 uppercase">
            Dipercaya untuk Berbagai Solusi Digital & Website Bisnis
        </p>
    </div>

    <div class="marquee py-2">
        <div class="marquee-track">
            <!-- Brand Badges in Marquee -->
            <div class="flex items-center gap-3 px-5 py-2 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200/80 dark:border-white/10 text-slate-700 dark:text-slate-300 font-bold text-sm tracking-wide">
                <i data-lucide="briefcase" class="w-4 h-4 text-brand-600 dark:text-sky-400"></i>
                <span>PT Digi Inovasi</span>
            </div>
            <div class="flex items-center gap-3 px-5 py-2 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200/80 dark:border-white/10 text-slate-700 dark:text-slate-300 font-bold text-sm tracking-wide">
                <i data-lucide="store" class="w-4 h-4 text-brand-600 dark:text-sky-400"></i>
                <span>UMKM Bandung Juara</span>
            </div>
            <div class="flex items-center gap-3 px-5 py-2 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200/80 dark:border-white/10 text-slate-700 dark:text-slate-300 font-bold text-sm tracking-wide">
                <i data-lucide="heart-handshake" class="w-4 h-4 text-brand-600 dark:text-sky-400"></i>
                <span>Wedding Creative</span>
            </div>
            <div class="flex items-center gap-3 px-5 py-2 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200/80 dark:border-white/10 text-slate-700 dark:text-slate-300 font-bold text-sm tracking-wide">
                <i data-lucide="building" class="w-4 h-4 text-brand-600 dark:text-sky-400"></i>
                <span>Kahuripan Studio</span>
            </div>
            <div class="flex items-center gap-3 px-5 py-2 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200/80 dark:border-white/10 text-slate-700 dark:text-slate-300 font-bold text-sm tracking-wide">
                <i data-lucide="sparkles" class="w-4 h-4 text-brand-600 dark:text-sky-400"></i>
                <span>Salsa & Sidik Project</span>
            </div>
            <div class="flex items-center gap-3 px-5 py-2 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200/80 dark:border-white/10 text-slate-700 dark:text-slate-300 font-bold text-sm tracking-wide">
                <i data-lucide="globe" class="w-4 h-4 text-brand-600 dark:text-sky-400"></i>
                <span>Company Profile Pro</span>
            </div>
            <!-- Repeated for seamless marquee scroll -->
            <div class="flex items-center gap-3 px-5 py-2 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200/80 dark:border-white/10 text-slate-700 dark:text-slate-300 font-bold text-sm tracking-wide">
                <i data-lucide="briefcase" class="w-4 h-4 text-brand-600 dark:text-sky-400"></i>
                <span>PT Digi Inovasi</span>
            </div>
            <div class="flex items-center gap-3 px-5 py-2 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200/80 dark:border-white/10 text-slate-700 dark:text-slate-300 font-bold text-sm tracking-wide">
                <i data-lucide="store" class="w-4 h-4 text-brand-600 dark:text-sky-400"></i>
                <span>UMKM Bandung Juara</span>
            </div>
            <div class="flex items-center gap-3 px-5 py-2 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200/80 dark:border-white/10 text-slate-700 dark:text-slate-300 font-bold text-sm tracking-wide">
                <i data-lucide="heart-handshake" class="w-4 h-4 text-brand-600 dark:text-sky-400"></i>
                <span>Wedding Creative</span>
            </div>
            <div class="flex items-center gap-3 px-5 py-2 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200/80 dark:border-white/10 text-slate-700 dark:text-slate-300 font-bold text-sm tracking-wide">
                <i data-lucide="building" class="w-4 h-4 text-brand-600 dark:text-sky-400"></i>
                <span>Kahuripan Studio</span>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     3. KEAHLIAN & SPESIALISASI (Yoggui #skills Style)
     ========================================================================= -->
<section id="skills" class="py-24 bg-slate-50 dark:bg-[#020617] border-b border-slate-200/60 dark:border-white/5">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <p class="eyebrow mb-2">Keahlian</p>
                <h2 class="section-title text-slate-900 dark:text-white">
                    Yang Saya <span class="text-gradient">Kerjakan</span>
                </h2>
            </div>
            <p class="text-slate-500 dark:text-slate-400 max-w-md font-light text-sm leading-relaxed">
                Dari arsitektur kode hingga perancangan antarmuka visual: bidang keahlian dan fokus utama saya dalam membangun produk digital.
            </p>
        </div>

        <!-- Skills List (sk-list Yoggui Style) -->
        <div class="grid lg:grid-cols-2 gap-4 mb-16">
            <div class="sk-row group">
                <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-white/5 border border-brand-100 dark:border-white/10 flex items-center justify-center text-brand-600 dark:text-sky-300 flex-shrink-0 group-hover:scale-110 transition duration-300">
                    <i data-lucide="code-2" class="w-6 h-6"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-sky-300 transition-colors">
                        Fullstack Web Development
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed">
                        Membangun website dan aplikasi web performa tinggi menggunakan Laravel, PHP modern, dan integrasi API yang aman.
                    </p>
                </div>
                <span class="sk-num">01</span>
            </div>

            <div class="sk-row group">
                <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-white/5 border border-brand-100 dark:border-white/10 flex items-center justify-center text-brand-600 dark:text-sky-300 flex-shrink-0 group-hover:scale-110 transition duration-300">
                    <i data-lucide="layout-dashboard" class="w-6 h-6"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-sky-300 transition-colors">
                        UI/UX & Responsive Design
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed">
                        Merancang pengalaman antarmuka yang estetis, mudah dipahami pengguna, dan nyaman dibuka dari semua ukuran layar HP.
                    </p>
                </div>
                <span class="sk-num">02</span>
            </div>

            <div class="sk-row group">
                <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-white/5 border border-brand-100 dark:border-white/10 flex items-center justify-center text-brand-600 dark:text-sky-300 flex-shrink-0 group-hover:scale-110 transition duration-300">
                    <i data-lucide="component" class="w-6 h-6"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-sky-300 transition-colors">
                        Design System & Components
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed">
                        Standardisasi token warna, tipografi, dan komponen modular Tailwind CSS agar website konsisten dan mudah dikembangkan.
                    </p>
                </div>
                <span class="sk-num">03</span>
            </div>

            <div class="sk-row group">
                <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-white/5 border border-brand-100 dark:border-white/10 flex items-center justify-center text-brand-600 dark:text-sky-300 flex-shrink-0 group-hover:scale-110 transition duration-300">
                    <i data-lucide="database" class="w-6 h-6"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-sky-300 transition-colors">
                        Database & Backend Architecture
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed">
                        Desain skema database MySQL terstruktur, kueri cepat, serta proteksi keamanan data aplikasi.
                    </p>
                </div>
                <span class="sk-num">04</span>
            </div>

            <div class="sk-row group">
                <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-white/5 border border-brand-100 dark:border-white/10 flex items-center justify-center text-brand-600 dark:text-sky-300 flex-shrink-0 group-hover:scale-110 transition duration-300">
                    <i data-lucide="zap" class="w-6 h-6"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-sky-300 transition-colors">
                        Performance & SEO Tuning
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed">
                        Optimasi kecepatan aset, skrip efisien, dan penerapan metadata Google agar website ramah mesin pencari.
                    </p>
                </div>
                <span class="sk-num">05</span>
            </div>

            <div class="sk-row group">
                <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-white/5 border border-brand-100 dark:border-white/10 flex items-center justify-center text-brand-600 dark:text-sky-300 flex-shrink-0 group-hover:scale-110 transition duration-300">
                    <i data-lucide="shield-check" class="w-6 h-6"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-sky-300 transition-colors">
                        Custom Dashboard & CMS
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed">
                        Panel kelola data yang bersih dan mudah digunakan sendiri untuk mengunggah portofolio, artikel, atau produk.
                    </p>
                </div>
                <span class="sk-num">06</span>
            </div>
        </div>

        <!-- Tech Stack & Tools Showcase (Yoggui Style) -->
        <div class="rounded-3xl p-8 bg-white dark:bg-[#0b1120] border border-slate-200/80 dark:border-white/10 shadow-sm">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
                <div>
                    <span class="text-xs font-mono font-bold text-sky-400 uppercase tracking-widest block mb-1">Teknologi & Toolstack</span>
                    <h4 class="text-xl font-bold text-slate-900 dark:text-white">Standar Modern & Handal</h4>
                </div>
                <div class="flex flex-wrap items-center justify-center sm:justify-end gap-2.5">
                    <span class="px-3.5 py-1.5 rounded-full bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-xs font-semibold text-slate-700 dark:text-slate-300">Laravel</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-xs font-semibold text-slate-700 dark:text-slate-300">PHP 8.x</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-xs font-semibold text-slate-700 dark:text-slate-300">Tailwind CSS</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-xs font-semibold text-slate-700 dark:text-slate-300">Alpine.js</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-xs font-semibold text-slate-700 dark:text-slate-300">MySQL</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-xs font-semibold text-slate-700 dark:text-slate-300">Figma</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-xs font-semibold text-slate-700 dark:text-slate-300">WordPress</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-xs font-semibold text-slate-700 dark:text-slate-300">Git</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- =========================================================================
     4. PORTOFOLIO SECTION (Yoggui Project Card Grid with Hover Overlay)
     ========================================================================= -->
<section id="portfolio" class="py-24 bg-white dark:bg-[#020617] border-b border-slate-200/60 dark:border-white/5"
         x-data="{ activeCategory: 'Semua', lightboxOpen: false, lightboxMediaType: '', lightboxSrc: '', lightboxTitle: '' }">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div>
                <p class="eyebrow mb-2">Portofolio</p>
                <h2 class="section-title text-slate-900 dark:text-white">
                    <span class="text-gradient">Karya</span> yang Telah Dibangun
                </h2>
            </div>

            <!-- Sleek Category Filter Switcher -->
            <div class="flex items-center space-x-1 bg-slate-100 dark:bg-white/5 p-1.5 rounded-2xl border border-slate-200/80 dark:border-white/10">
                <button @click="activeCategory = 'Semua'"
                    :class="activeCategory === 'Semua' ? 'bg-white dark:bg-white/15 text-slate-900 dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'"
                    class="px-5 py-2 text-xs font-bold rounded-xl transition duration-150">
                    Semua
                </button>
                <button @click="activeCategory = 'Website'"
                    :class="activeCategory === 'Website' ? 'bg-white dark:bg-white/15 text-slate-900 dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'"
                    class="px-5 py-2 text-xs font-bold rounded-xl transition duration-150">
                    Website
                </button>
                <button @click="activeCategory = 'Desain'"
                    :class="activeCategory === 'Desain' ? 'bg-white dark:bg-white/15 text-slate-900 dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'"
                    class="px-5 py-2 text-xs font-bold rounded-xl transition duration-150">
                    Desain
                </button>
            </div>
        </div>

        @if($portfolios->isEmpty())
        <div class="text-center py-20 bg-slate-50 dark:bg-white/5 rounded-3xl border border-slate-200 dark:border-white/10 max-w-md mx-auto">
            <i data-lucide="folder-code" class="w-12 h-12 mx-auto text-slate-400 mb-4"></i>
            <h3 class="text-base font-bold text-slate-800 dark:text-slate-200">Portofolio Belum Diunggah</h3>
            <p class="text-xs text-slate-400 mt-1">Gunakan panel admin untuk menambahkan portofolio baru.</p>
        </div>
        @else
        <!-- Modern Grid with Yoggui .project-card layout -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($portfolios as $item)
            <div x-show="activeCategory === 'Semua' || activeCategory === '{{ $item->category }}'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 class="project-card group cursor-pointer"
                 @if($item->media_type === 'video')
                 @click="lightboxMediaType = 'video'; lightboxSrc = '{{ $item->video_file ? asset('storage/' . $item->video_file) : ($item->video_url ?? '') }}'; lightboxTitle = '{{ $item->title }}'; lightboxOpen = true"
                 @elseif($item->media_type === 'link' && $item->link)
                 @click="window.open('{{ $item->link }}', '_blank')"
                 @else
                 @click="lightboxMediaType = 'image'; lightboxSrc = '{{ asset('storage/' . $item->image) }}'; lightboxTitle = '{{ $item->title }}'; lightboxOpen = true"
                 @endif>

                <!-- Project Thumbnail Image -->
                @if($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" loading="lazy">
                @else
                    <div class="w-full h-full bg-slate-900 flex items-center justify-center text-slate-500">
                        <span class="text-xs font-bold uppercase tracking-wider">Preview Media</span>
                    </div>
                @endif

                <!-- Category Tag Top Left -->
                <div class="absolute top-4 left-4 z-10 flex items-center gap-1.5">
                    <span class="px-3 py-1 rounded-full text-[10px] font-bold tracking-wide uppercase bg-slate-950/80 text-white backdrop-blur border border-white/10">
                        {{ $item->category }}
                    </span>
                    @if($item->media_type === 'video')
                    <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase bg-brand-600 text-white flex items-center gap-1">
                        <i data-lucide="play" class="w-3 h-3 fill-current"></i> Video
                    </span>
                    @endif
                </div>

                <!-- Hover Gradient Overlay (Yoggui Style) -->
                <div class="project-overlay flex flex-col justify-end">
                    <h3 class="text-xl font-bold text-white mb-1.5 group-hover:text-sky-300 transition-colors">
                        {{ $item->title }}
                    </h3>
                    <p class="text-xs text-white/75 line-clamp-2 leading-relaxed mb-4 font-light">
                        {{ $item->description }}
                    </p>
                    <div class="flex items-center gap-2 text-xs font-bold text-white">
                        <span class="px-4 py-2 rounded-full bg-white text-slate-900 flex items-center gap-1.5 group-hover:scale-105 transition-transform">
                            <span>Lihat Detail</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </span>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('portfolio') }}" 
               class="inline-flex items-center gap-2 px-8 py-4 rounded-full border border-slate-300 dark:border-white/15 text-slate-800 dark:text-white hover:bg-slate-100 dark:hover:bg-white/10 font-bold text-xs uppercase tracking-wider transition">
                <span>Eksplor Semua Portofolio</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>
        @endif

    </div>

    <!-- Lightbox Modal -->
    <div x-show="lightboxOpen" class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/90 backdrop-blur-md"
        x-transition style="display: none;" @keydown.escape.window="lightboxOpen = false">
        
        <button @click="lightboxOpen = false" class="absolute top-6 right-6 text-white/70 hover:text-white z-10 p-2">
            <i data-lucide="x" class="w-8 h-8"></i>
        </button>

        <div class="bg-slate-950 rounded-3xl overflow-hidden max-w-4xl w-full border border-white/10 shadow-2xl flex flex-col"
            @click.away="lightboxOpen = false">
            
            <div class="aspect-video bg-black flex items-center justify-center relative overflow-hidden">
                <template x-if="lightboxOpen && lightboxMediaType === 'video' && (lightboxSrc.includes('http') && !lightboxSrc.includes('.mp4') && !lightboxSrc.includes('.mov'))">
                    <iframe class="w-full h-full" :src="lightboxSrc" frameborder="0" allowfullscreen></iframe>
                </template>

                <template x-if="lightboxOpen && lightboxMediaType === 'video' && (lightboxSrc.includes('.mp4') || lightboxSrc.includes('.mov') || !lightboxSrc.includes('http'))">
                    <video class="w-full h-full object-contain" controls autoplay>
                        <source :src="lightboxSrc" type="video/mp4">
                    </video>
                </template>

                <template x-if="lightboxOpen && lightboxMediaType === 'image'">
                    <img :src="lightboxSrc" class="max-w-full max-h-full object-contain" :alt="lightboxTitle">
                </template>
            </div>

            <div class="p-6 bg-slate-900 border-t border-white/10 text-white flex justify-between items-center">
                <h4 class="text-base font-bold" x-text="lightboxTitle"></h4>
                <button @click="lightboxOpen = false" class="text-xs text-slate-400 hover:text-white uppercase tracking-wider font-semibold">Tutup</button>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     5. PROCESS / ALUR PENGERJAAN SECTION (Clean Steps)
     ========================================================================= -->
<section id="process" class="py-24 bg-slate-50 dark:bg-[#020617] border-b border-slate-200/60 dark:border-white/5">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <p class="eyebrow mb-2">Alur Kolaborasi</p>
            <h2 class="section-title text-slate-900 dark:text-white">Proses <span class="text-gradient">Transparan</span></h2>
            <p class="text-slate-500 dark:text-slate-400 mt-3 font-light text-sm">
                4 langkah mudah dari konsultasi awal hingga website Anda live dan siap menghasilkan penjualan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="p-8 rounded-3xl bg-white dark:bg-[#0b1120] border border-slate-200/80 dark:border-white/10 shadow-sm relative group hover:border-brand-500 transition duration-300">
                <span class="text-3xl font-mono font-extrabold text-sky-400 dark:text-sky-400 mb-4 block">01</span>
                <h4 class="text-base font-bold text-slate-900 dark:text-white mb-2">Diskusi Kebutuhan</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Sampaikan referensi, tujuan bisnis, dan fitur yang ingin Anda miliki melalui WhatsApp.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white dark:bg-[#0b1120] border border-slate-200/80 dark:border-white/10 shadow-sm relative group hover:border-brand-500 transition duration-300">
                <span class="text-3xl font-mono font-extrabold text-sky-400 dark:text-sky-400 mb-4 block">02</span>
                <h4 class="text-base font-bold text-slate-900 dark:text-white mb-2">Perencanaan & Solusi</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Menyusun konsep antarmuka, pemilihan teknologi yang tepat, dan estimasi waktu pengerjaan.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white dark:bg-[#0b1120] border border-slate-200/80 dark:border-white/10 shadow-sm relative group hover:border-brand-500 transition duration-300">
                <span class="text-3xl font-mono font-extrabold text-sky-400 dark:text-sky-400 mb-4 block">03</span>
                <h4 class="text-base font-bold text-slate-900 dark:text-white mb-2">Penyusunan Materi</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Kirim logo, teks profil, atau foto produk. Saya bantu rapikan bila belum tersedia.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white dark:bg-[#0b1120] border border-slate-200/80 dark:border-white/10 shadow-sm relative group hover:border-brand-500 transition duration-300">
                <span class="text-3xl font-mono font-extrabold text-sky-400 dark:text-sky-400 mb-4 block">04</span>
                <h4 class="text-base font-bold text-slate-900 dark:text-white mb-2">Pengerjaan & Peluncuran</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light">Website dikembangkan, direview bersama, revisi masukan, lalu resmi dipublikasikan live.</p>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     6. FAQ ACCORDION SECTION
     ========================================================================= -->
<section id="faq" class="py-24 bg-white dark:bg-[#020617] border-b border-slate-200/60 dark:border-white/5" x-data="{ activeFaq: 1 }">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-16">
            <p class="eyebrow mb-2">FAQ</p>
            <h2 class="section-title text-slate-900 dark:text-white">Pertanyaan <span class="text-gradient">Umum</span></h2>
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm font-light">Informasi penting seputar proses, biaya, dan perawatan website.</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="rounded-2xl border border-slate-200/80 dark:border-white/10 bg-slate-50/50 dark:bg-[#0b1120] overflow-hidden transition">
                <button @click="activeFaq = activeFaq === 1 ? null : 1"
                    class="w-full px-6 py-5 text-left font-bold text-slate-900 dark:text-white flex justify-between items-center text-sm focus:outline-none">
                    <span>Bagaimana cara mulai memesan jasa website?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 transition-transform duration-200" :class="activeFaq === 1 ? 'rotate-180 text-brand-600' : ''"></i>
                </button>
                <div x-show="activeFaq === 1" x-collapse class="px-6 pb-5 text-xs sm:text-sm text-slate-500 dark:text-slate-400 leading-relaxed font-light border-t border-slate-100 dark:border-white/5 pt-3">
                    Cukup klik tombol WhatsApp atau isi formulir di bawah. Ceritakan ide atau kebutuhan Anda, dan saya akan memberikan masukan arsitektur solusi serta estimasi timeline pengerjaan.
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="rounded-2xl border border-slate-200/80 dark:border-white/10 bg-slate-50/50 dark:bg-[#0b1120] overflow-hidden transition">
                <button @click="activeFaq = activeFaq === 2 ? null : 2"
                    class="w-full px-6 py-5 text-left font-bold text-slate-900 dark:text-white flex justify-between items-center text-sm focus:outline-none">
                    <span>Berapa lama estimasi waktu pembuatan website?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 transition-transform duration-200" :class="activeFaq === 2 ? 'rotate-180 text-brand-600' : ''"></i>
                </button>
                <div x-show="activeFaq === 2" x-collapse class="px-6 pb-5 text-xs sm:text-sm text-slate-500 dark:text-slate-400 leading-relaxed font-light border-t border-slate-100 dark:border-white/5 pt-3">
                    Untuk landing page atau website profil rata-rata selesai dalam 3–5 hari kerja. Untuk sistem web atau aplikasi kustom disesuaikan dengan kompleksitas fitur yang disepakati.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="rounded-2xl border border-slate-200/80 dark:border-white/10 bg-slate-50/50 dark:bg-[#0b1120] overflow-hidden transition">
                <button @click="activeFaq = activeFaq === 3 ? null : 3"
                    class="w-full px-6 py-5 text-left font-bold text-slate-900 dark:text-white flex justify-between items-center text-sm focus:outline-none">
                    <span>Apakah ada garansi jika website mengalami error?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 transition-transform duration-200" :class="activeFaq === 3 ? 'rotate-180 text-brand-600' : ''"></i>
                </button>
                <div x-show="activeFaq === 3" x-collapse class="px-6 pb-5 text-xs sm:text-sm text-slate-500 dark:text-slate-400 leading-relaxed font-light border-t border-slate-100 dark:border-white/5 pt-3">
                    Ya, saya menyediakan bantuan teknis dan perbaikan error gratis untuk memastikan sistem dan website Anda selalu beroperasi lancar.
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="rounded-2xl border border-slate-200/80 dark:border-white/10 bg-slate-50/50 dark:bg-[#0b1120] overflow-hidden transition">
                <button @click="activeFaq = activeFaq === 4 ? null : 4"
                    class="w-full px-6 py-5 text-left font-bold text-slate-900 dark:text-white flex justify-between items-center text-sm focus:outline-none">
                    <span>Apakah saya bisa memperbarui isi konten website sendiri?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 transition-transform duration-200" :class="activeFaq === 4 ? 'rotate-180 text-brand-600' : ''"></i>
                </button>
                <div x-show="activeFaq === 4" x-collapse class="px-6 pb-5 text-xs sm:text-sm text-slate-500 dark:text-slate-400 leading-relaxed font-light border-t border-slate-100 dark:border-white/5 pt-3">
                    Bisa! Setiap website saya sediakan dashboard admin yang intuitif dan mudah dioperasikan dari HP atau laptop tanpa perlu paham coding. Saya sertakan juga video tutorialnya.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     7. SHOWSTOPPER CONTACT SECTION (Yoggui .cta-card with Glowing Background & Figma Box)
     ========================================================================= -->
<section id="contact" class="py-24 bg-slate-50 dark:bg-[#020617]">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="cta-card">
            <!-- Radiant Background Glow Spots (Yoggui Style) -->
            <div class="cta-glow cta-glow-1"></div>
            <div class="cta-glow cta-glow-2"></div>
            <div class="cta-glow cta-glow-3"></div>

            <div class="grid lg:grid-cols-12 gap-12 items-center relative z-10">
                
                <!-- Left Column: Copy with Figma Selection Box -->
                <div class="lg:col-span-7">
                    
                    <div class="cta-selection mb-6">
                        <span class="cta-handle -top-1.5 -left-1.5"></span>
                        <span class="cta-handle -top-1.5 -right-1.5"></span>
                        <span class="cta-handle -bottom-1.5 -left-1.5"></span>
                        <span class="cta-handle -right-1.5 -bottom-1.5"></span>

                        <h2 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-[1.1]">
                            Mari Bangun Website yang
                            <span class="bg-gradient-to-r from-sky-300 via-violet-300 to-fuchsia-300 bg-clip-text text-transparent">
                                Berdampak
                            </span>
                        </h2>
                    </div>

                    <p class="text-base sm:text-lg text-white/75 font-light leading-relaxed max-w-xl mb-8">
                        Punya ide projek, usaha baru, atau ingin merombak website lama Anda agar tampil modern dan meyakinkan? Ceritakan kebutuhan Anda, gratis tanpa komitmen.
                    </p>

                    <div class="flex flex-wrap items-center gap-4">
                        <a href="https://wa.me/6281214019947?text=Halo%20Hamid,%20saya%20ingin%20konsultasi%20mengenai%20projek%20website" target="_blank"
                           class="cta-btn">
                            <span>Konsultasi via WhatsApp</span>
                            <span class="cta-btn-icon" aria-hidden="true">
                                <i data-lucide="arrow-right" class="cta-btn-arrow"></i>
                            </span>
                        </a>

                        <a href="mailto:hamidabdulaziz36@gmail.com" 
                           class="inline-flex items-center gap-2 rounded-full px-6 py-3.5 text-sm font-semibold text-white ring-1 ring-white/20 hover:bg-white/10 transition">
                            <i data-lucide="mail" class="w-4 h-4 text-sky-300"></i>
                            <span>hamidabdulaziz36@gmail.com</span>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Interactive WhatsApp Fast-Form Card -->
                <div class="lg:col-span-5">
                    <div class="rounded-3xl p-6 sm:p-8 bg-[#0b1120]/80 border border-white/10 backdrop-blur-xl shadow-2xl text-white"
                         x-data="{ name: '', service: 'Pembuatan Website Baru', message: '', get waUrl() { return 'https://wa.me/6281214019947?text=' + encodeURIComponent('Halo Hamid,\n\nNama: ' + this.name + '\nKebutuhan: ' + this.service + '\nPesan: ' + this.message) } }">
                        
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <span class="text-[10px] font-mono uppercase tracking-widest text-sky-400 block font-bold">Fast Response</span>
                                <h4 class="text-lg font-bold">Kirim Pesan Cepat</h4>
                            </div>
                            <span class="w-3 h-3 rounded-full bg-emerald-400 animate-pulse"></span>
                        </div>

                        <form @submit.prevent="window.open(waUrl, '_blank')" class="space-y-4">
                            <div>
                                <label for="form_name" class="block text-xs font-semibold text-white/70 mb-1.5 uppercase tracking-wider">Nama Lengkap / Instansi</label>
                                <input type="text" id="form_name" x-model="name" required
                                       class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-sky-400 transition"
                                       placeholder="Nama Anda atau Perusahaan">
                            </div>

                            <div>
                                <label for="form_service" class="block text-xs font-semibold text-white/70 mb-1.5 uppercase tracking-wider">Kebutuhan Projek</label>
                                <select id="form_service" x-model="service" required
                                        class="w-full bg-[#0b1120] border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-sky-400 transition">
                                    <option value="Pembuatan Website Baru">Pembuatan Website Baru (Landing Page / Web Profil)</option>
                                    <option value="Redesign & Optimasi Website">Redesign & Peningkatan Tampilan Website</option>
                                    <option value="Pengembangan Web App / Sistem">Pengembangan Web App / Sistem Kustom</option>
                                    <option value="UI/UX & Desain Antarmuka">UI/UX & Desain Antarmuka Produk</option>
                                    <option value="Kolaborasi Projek Lainnya">Kolaborasi Projek / Freelance Lainnya</option>
                                </select>
                            </div>

                            <div>
                                <label for="form_message" class="block text-xs font-semibold text-white/70 mb-1.5 uppercase tracking-wider">Pesan / Catatan Tambahan</label>
                                <textarea id="form_message" x-model="message" rows="3" required
                                          class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-sky-400 transition"
                                          placeholder="Ceritakan gambaran singkat atau referensi website impian Anda..."></textarea>
                            </div>

                            <button type="submit" 
                                    class="w-full py-3.5 px-6 rounded-xl bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-bold text-sm tracking-wide shadow-lg shadow-emerald-500/25 transition flex items-center justify-center gap-2 cursor-pointer">
                                <i data-lucide="send" class="w-4 h-4"></i>
                                <span>Kirim ke WhatsApp Hamid</span>
                            </button>
                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@section('scripts')
<script>
    // Typewriter effect in Hero section (matching yoggui typewriter)
    document.addEventListener('DOMContentLoaded', function() {
        const words = ['WEB DEVELOPER', 'UI/UX DESIGNER', 'CREATIVE PARTNER', 'FULLSTACK BUILDER'];
        let wordIdx = 0;
        let charIdx = 0;
        let isDeleting = false;
        const target = document.getElementById('typewriter-text');
        
        if (target) {
            function typeLoop() {
                const current = words[wordIdx];
                if (isDeleting) {
                    target.textContent = current.substring(0, charIdx - 1);
                    charIdx--;
                } else {
                    target.textContent = current.substring(0, charIdx + 1);
                    charIdx++;
                }

                let speed = isDeleting ? 40 : 110;

                if (!isDeleting && charIdx === current.length) {
                    isDeleting = true;
                    speed = 2200; // Pause at end of word
                } else if (isDeleting && charIdx === 0) {
                    isDeleting = false;
                    wordIdx = (wordIdx + 1) % words.length;
                    speed = 400; // Pause before typing new word
                }

                setTimeout(typeLoop, speed);
            }
            typeLoop();
        }

        // Re-run lucide icons to catch dynamically inserted elements
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>
@endsection
