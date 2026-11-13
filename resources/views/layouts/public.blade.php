<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@hasSection('title') @yield('title') | Hamid &mdash; Web Developer & UI/UX Designer @else Hamid &mdash; Web Developer & UI/UX Designer @endif</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind & Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Dark Mode Init Script -->
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                        display: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                        },
                        sky: {
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                        },
                        slate: {
                            850: '#151d2f',
                            950: '#020617',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background-color: #f8fafc;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .dark body {
            background-color: #020617;
        }

        /* ===== NAVBAR ACTIVE GLOW STYLES ===== */
        .nav-link {
            position: relative;
        }
        .nav-link.is-active {
            color: #ffffff !important;
        }
        .nav-link.is-active .nav-num {
            color: #7dd3fc;
            text-shadow: 0 0 10px rgba(125, 211, 252, 0.8);
        }
        .nav-link.is-active::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, #38bdf8, #8b5cf6);
            border-radius: 9999px;
            box-shadow: 0 0 8px rgba(56, 189, 248, 0.7);
        }

        /* YOGGUI DESIGN SYSTEM - Core Inlines */
        .hero-dark {
            background: radial-gradient(60% 80% at 0% 0%, rgba(37, 99, 235, 0.75), transparent 70%),
                        radial-gradient(55% 80% at 100% 100%, rgba(124, 58, 237, 0.85), transparent 70%),
                        radial-gradient(40% 50% at 55% 110%, rgba(125, 211, 252, 0.3), transparent 70%),
                        radial-gradient(35% 50% at 75% 30%, rgba(109, 40, 217, 0.35), transparent 70%),
                        #020617;
        }

        .site-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            transition: all 0.3s ease;
        }

        .site-nav.is-scrolled {
            background: rgba(2, 6, 23, 0.9);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5);
        }

        .nav-link {
            font-size: 0.8125rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.8);
            transition: color 0.2s ease;
            display: inline-flex;
            align-items: center;
        }

        .nav-link:hover, .nav-link.active {
            color: #ffffff;
        }

        .nav-num {
            font-family: ui-monospace, SFMono-Regular, Menlo, monospace;
            font-size: 0.75rem;
            color: #38bdf8;
            font-weight: 700;
            margin-right: 0.375rem;
        }

        .nav-cta {
            font-size: 0.8125rem;
            background: #ffffff;
            color: #020617 !important;
            border-radius: 9999px;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.75rem;
            padding: 0.25rem 0.25rem 0.25rem 1.25rem;
            font-weight: 700;
            transition: transform 0.25s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.25s;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.15);
        }

        .nav-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(99, 102, 241, 0.3);
        }

        .nav-cta-icon {
            color: #ffffff;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            border-radius: 9999px;
            width: 2rem;
            height: 2rem;
            display: grid;
            place-items: center;
            overflow: hidden;
        }

        .nav-cta-arrow {
            width: 1rem;
            height: 1rem;
            transition: transform 0.2s;
        }

        .nav-cta:hover .nav-cta-arrow {
            animation: cta-btn-arrow 0.6s cubic-bezier(0.22, 1, 0.36, 1);
        }

        /* Eyebrow & Titles */
        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.8125rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            background-image: linear-gradient(to right, #2563eb, #7c3aed);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .eyebrow::before {
            content: "";
            width: 0.5rem;
            height: 0.5rem;
            background-color: #38bdf8;
            border-radius: 9999px;
            box-shadow: 0 0 8px rgba(56, 189, 248, 0.8);
            flex-shrink: 0;
        }

        .section-title {
            font-size: 2.25rem;
            letter-spacing: -0.025em;
            font-weight: 800;
            line-height: 1.15;
        }

        @media (min-width: 640px) {
            .section-title {
                font-size: 3rem;
            }
        }

        .text-gradient {
            background-image: linear-gradient(to right, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* CTA Card */
        .cta-card {
            isolation: isolate;
            background: #020617;
            border-radius: 2rem;
            padding: 4rem 1.5rem;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        @media (min-width: 640px) {
            .cta-card {
                padding: 5.5rem 3.5rem;
                border-radius: 2.5rem;
            }
        }

        .cta-glow {
            z-index: -1;
            filter: blur(80px);
            pointer-events: none;
            border-radius: 9999px;
            position: absolute;
        }

        .cta-glow-1 {
            background: #2563eb;
            opacity: 0.55;
            width: 55%;
            height: 80%;
            top: -20%;
            left: -10%;
        }

        .cta-glow-2 {
            background: #7c3aed;
            opacity: 0.6;
            width: 55%;
            height: 90%;
            bottom: -30%;
            right: -10%;
        }

        .cta-glow-3 {
            background: #38bdf8;
            opacity: 0.35;
            width: 30%;
            height: 50%;
            bottom: -20%;
            right: 15%;
        }

        .cta-selection {
            border: 1.5px solid rgba(255, 255, 255, 0.35);
            padding: 0.75rem 1.25rem;
            display: inline-block;
            position: relative;
        }

        .cta-handle {
            width: 0.625rem;
            height: 0.625rem;
            box-shadow: 0 0 0 2px #a78bfa;
            background: #ffffff;
            border-radius: 2px;
            position: absolute;
        }

        .cta-btn {
            isolation: isolate;
            color: #ffffff;
            border-radius: 9999px;
            align-items: center;
            gap: 1rem;
            padding: 0.4rem 0.5rem 0.4rem 1.75rem;
            font-weight: 700;
            display: inline-flex;
            position: relative;
            box-shadow: 0 12px 28px -12px rgba(76, 29, 149, 0.7);
            transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.4s;
            cursor: pointer;
        }

        .cta-btn::before {
            content: "";
            z-index: -1;
            border-radius: inherit;
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6, #3b82f6);
            background-size: 200% 100%;
            animation: cta-btn-flow 6s linear infinite;
        }

        .cta-btn::after {
            content: "";
            z-index: -1;
            border-radius: inherit;
            position: absolute;
            inset: 0;
            background: linear-gradient(110deg, transparent 40%, rgba(255, 255, 255, 0.35), transparent 60%) 150% 0/250% 100% no-repeat;
            animation: cta-btn-shine 4s ease-in-out 1.5s infinite;
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 0 4px rgba(139, 92, 246, 0.25), 0 18px 36px -12px rgba(76, 29, 149, 0.85);
        }

        .cta-btn-icon {
            width: 2.5rem;
            height: 2.5rem;
            color: #7c3aed;
            background: #ffffff;
            border-radius: 9999px;
            place-items: center;
            display: grid;
            overflow: hidden;
            animation: cta-btn-pulse 2.4s ease-out infinite;
            flex-shrink: 0;
        }

        .cta-btn-arrow {
            width: 1.25rem;
            height: 1.25rem;
        }

        .cta-btn:hover .cta-btn-arrow {
            animation: cta-btn-arrow 0.6s cubic-bezier(0.22, 1, 0.36, 1);
        }

        @keyframes cta-btn-flow {
            to { background-position: -200% 0; }
        }

        @keyframes cta-btn-shine {
            0%, 55% { background-position: 150% 0; }
            100% { background-position: -50% 0; }
        }

        @keyframes cta-btn-pulse {
            0% { box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.6); }
            100% { box-shadow: 0 0 0 12px rgba(255, 255, 255, 0); }
        }

        @keyframes cta-btn-arrow {
            0% { transform: translate(0); }
            45% { transform: translate(160%); }
            46% { transform: translate(-160%); }
            100% { transform: translate(0); }
        }
    </style>
    @yield('styles')
</head>

<body class="text-slate-900 dark:text-slate-100 antialiased bg-[#f8fafc] dark:bg-[#020617] selection:bg-brand-600 selection:text-white"
      x-data="{ scrolled: false, mobileOpen: false }"
      @scroll.window="scrolled = (window.pageYOffset > 20)">

    <!-- Modern Yoggui-Style Fixed Navbar -->
    <header class="site-nav" :class="{ 'is-scrolled': scrolled }">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2 group">
                <span class="text-2xl font-black tracking-tight text-white font-display">
                    Hamid<span class="text-sky-400 group-hover:text-brand-400 transition-colors">.</span>
                </span>
            </a>

            <!-- Desktop Nav Links with Yoggui Numbered Styling -->
            <nav class="hidden md:flex items-center space-x-8 text-sm font-semibold tracking-wide" aria-label="Navigasi Utama">
                <a href="{{ request()->routeIs('home') ? '#portfolio' : route('home') . '#portfolio' }}" 
                   data-nav="portfolio"
                   class="nav-link {{ request()->routeIs('portfolio') ? 'is-active' : '' }}">
                    <span class="nav-num">01</span>Portofolio
                </a>
                <a href="{{ request()->routeIs('home') ? '#skills' : route('home') . '#skills' }}" 
                   data-nav="skills"
                   class="nav-link">
                    <span class="nav-num">02</span>Keahlian
                </a>
                <a href="{{ request()->routeIs('home') ? '#experience' : route('home') . '#experience' }}" 
                   data-nav="experience"
                   class="nav-link {{ request()->routeIs('about') ? 'is-active' : '' }}">
                    <span class="nav-num">03</span>Pengalaman
                </a>
                <a href="{{ request()->routeIs('home') ? '#contact' : route('home') . '#contact' }}" 
                   data-nav="contact"
                   class="nav-link">
                    <span class="nav-num">04</span>Kontak
                </a>
            </nav>

            <!-- Right Controls: Theme Toggle only -->
            <div class="hidden md:flex items-center space-x-3">
                <!-- Theme Toggle Button -->
                <button id="theme-toggle" type="button" 
                        class="p-2.5 text-white/80 hover:text-white bg-white/10 hover:bg-white/15 rounded-full text-sm transition ring-1 ring-white/15 focus:outline-none" 
                        title="Ubah Tema Terang/Gelap">
                    <!-- Dark Icon (Moon) -->
                    <svg id="theme-toggle-dark-icon" class="hidden w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <!-- Light Icon (Sun) -->
                    <svg id="theme-toggle-light-icon" class="hidden w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.46 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                @auth
                <a href="{{ route('dashboard') }}" class="text-xs font-bold uppercase tracking-wider text-sky-400 hover:text-white px-3 py-1.5 rounded-full bg-sky-950/60 border border-sky-500/30 transition">
                    Dashboard
                </a>
                @endauth
            </div>

            <!-- Hamburger Button (Mobile) -->
            <div class="flex items-center space-x-2 md:hidden">
                <!-- Mobile Theme Toggle -->
                <button id="theme-toggle-mobile" type="button" 
                        class="p-2 text-white/80 hover:text-white bg-white/10 rounded-full focus:outline-none">
                    <svg id="theme-toggle-mobile-dark-icon" class="hidden w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-mobile-light-icon" class="hidden w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.46 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <button @click="mobileOpen = !mobileOpen" 
                        class="p-2.5 rounded-full bg-white/10 text-white hover:bg-white/15 focus:outline-none ring-1 ring-white/15"
                        aria-label="Buka Menu">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Fullscreen Mobile Navigation Menu Overlay (Yoggui Style) -->
        <div x-show="mobileOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden fixed inset-0 top-20 z-40 bg-[#020617]/95 backdrop-blur-2xl p-6 flex flex-col justify-between overflow-y-auto border-t border-white/10" 
             style="display: none;">
            
            <ul class="space-y-4 pt-4">
                <li>
                    <a href="{{ request()->routeIs('home') ? '#portfolio' : route('home') . '#portfolio' }}" @click="mobileOpen = false" 
                       class="flex items-center text-xl font-bold text-white hover:text-sky-300 py-2 border-b border-white/10">
                        <span class="nav-num text-sm text-sky-400 mr-3">01</span> Portofolio
                    </a>
                </li>
                <li>
                    <a href="{{ request()->routeIs('home') ? '#skills' : route('home') . '#skills' }}" @click="mobileOpen = false" 
                       class="flex items-center text-xl font-bold text-white hover:text-sky-300 py-2 border-b border-white/10">
                        <span class="nav-num text-sm text-sky-400 mr-3">02</span> Keahlian
                    </a>
                </li>
                <li>
                    <a href="{{ request()->routeIs('home') ? '#experience' : route('home') . '#experience' }}" @click="mobileOpen = false" 
                       class="flex items-center text-xl font-bold text-white hover:text-sky-300 py-2 border-b border-white/10">
                        <span class="nav-num text-sm text-sky-400 mr-3">03</span> Pengalaman
                    </a>
                </li>
                <li>
                    <a href="{{ request()->routeIs('home') ? '#contact' : route('home') . '#contact' }}" @click="mobileOpen = false" 
                       class="flex items-center text-xl font-bold text-white hover:text-sky-300 py-2 border-b border-white/10">
                        <span class="nav-num text-sm text-sky-400 mr-3">04</span> Kontak
                    </a>
                </li>
            </ul>

            <div class="pt-8 pb-6 border-t border-white/10 space-y-4">
                @auth
                <a href="{{ route('dashboard') }}" class="block text-center py-2.5 text-xs font-bold uppercase tracking-wider text-sky-300 bg-sky-950/60 rounded-xl border border-sky-500/30">
                    Dashboard Admin
                </a>
                @endauth
                <a href="{{ route('home') }}#contact" @click="mobileOpen = false" 
                   class="cta-btn w-full justify-between">
                    <span>Hubungi Saya Langsung</span>
                    <span class="cta-btn-icon">
                        <i data-lucide="arrow-right" class="cta-btn-arrow"></i>
                    </span>
                </a>
                <p class="text-center text-xs text-slate-400 pt-2">
                    Email: <a href="mailto:hamidabdulaziz36@gmail.com" class="text-sky-400 underline">hamidabdulaziz36@gmail.com</a>
                </p>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Ultra-Sleek Modern Footer (Yoggui Style) -->
    <footer class="border-t border-slate-200 dark:border-white/10 py-16 bg-white dark:bg-[#020617] text-slate-500 dark:text-slate-400 text-sm">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8 mb-12">
                <!-- Brand Info -->
                <div class="text-center md:text-left">
                    <a href="{{ route('home') }}" class="inline-flex items-center space-x-2 text-2xl font-black text-slate-900 dark:text-white font-display">
                        <span>Hamid</span><span class="text-sky-400">.</span>
                        <span class="text-xs uppercase tracking-widest text-slate-400 font-semibold px-2 py-0.5 rounded-full bg-slate-100 dark:bg-white/10 border border-slate-200 dark:border-white/10 ml-2">Studio</span>
                    </a>
                    <p class="mt-2 text-xs text-slate-500 dark:text-slate-400 max-w-sm">
                        Web Developer & UI/UX Specialist Bandung. Merancang website modern yang cepat, rapi, dan berdampak.
                    </p>
                </div>

                <!-- Social Icons in Rounded Circle Buttons -->
                <ul class="flex items-center gap-3">
                    <li>
                        <a href="https://www.instagram.com/hamidajaaaaa/" target="_blank" rel="noopener" class="social-icon" aria-label="Instagram" title="Instagram @hamidajaaaaa">
                            <i data-lucide="instagram" class="w-4 h-4"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/hamid-abdul-aziz/" target="_blank" rel="noopener" class="social-icon" aria-label="LinkedIn" title="LinkedIn Hamid Abdul Aziz">
                            <i data-lucide="linkedin" class="w-4 h-4"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/@ham1dun" target="_blank" rel="noopener" class="social-icon" aria-label="TikTok" title="TikTok @ham1dun">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.29 0 .58.04.86.11V9.4a6.33 6.33 0 0 0-1-.08A6.34 6.34 0 0 0 3 15.66a6.34 6.34 0 0 0 10.82 4.49 6.27 6.27 0 0 0 1.93-4.52V8.75a8.28 8.28 0 0 0 4.84 1.56V6.86c-.34 0-.68-.06-1-.17z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/HAMIDUMMAZIDUN" target="_blank" rel="noopener" class="social-icon" aria-label="GitHub" title="GitHub">
                            <i data-lucide="github" class="w-4 h-4"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/6281214019947" target="_blank" rel="noopener" class="social-icon" aria-label="WhatsApp" title="WhatsApp 081214019947">
                            <i data-lucide="message-circle" class="w-4 h-4"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Bottom Navigation Bar -->
            <div class="pt-8 border-t border-slate-100 dark:border-white/5 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs font-medium">
                <div class="flex flex-wrap justify-center gap-6 text-slate-600 dark:text-slate-400">
                    <a href="{{ route('home') }}" class="hover:text-brand-600 dark:hover:text-white transition">Home</a>
                    <a href="{{ request()->routeIs('home') ? '#portfolio' : route('home') . '#portfolio' }}" class="hover:text-brand-600 dark:hover:text-white transition">Portofolio</a>
                    <a href="{{ request()->routeIs('home') ? '#skills' : route('home') . '#skills' }}" class="hover:text-brand-600 dark:hover:text-white transition">Keahlian</a>
                    <a href="{{ request()->routeIs('home') ? '#experience' : route('home') . '#experience' }}" class="hover:text-brand-600 dark:hover:text-white transition">Pengalaman</a>
                    <a href="{{ request()->routeIs('home') ? '#contact' : route('home') . '#contact' }}" class="hover:text-brand-600 dark:hover:text-white transition">Kontak</a>
                    <a href="{{ route('login') }}" class="hover:text-brand-600 dark:hover:text-white transition text-slate-400">Admin Login</a>
                </div>
                <div class="text-slate-400 dark:text-slate-500 text-center sm:text-right">
                    &copy; 2026 Hamid Abdul Aziz. Hak Cipta Dilindungi.
                </div>
            </div>
        </div>
    </footer>

    <!-- Sleek Floating WhatsApp Consultation Pill -->
    <div x-data="{ isOpen: true }" x-show="isOpen"
        class="fixed bottom-6 right-6 z-40 flex items-end space-x-3 max-w-xs"
        x-transition:enter="transition ease-out duration-300 transform translate-y-4 opacity-0"
        x-transition:enter-end="transform translate-y-0 opacity-100"
        x-transition:leave="transition ease-in duration-200 transform translate-y-4 opacity-0">

        <!-- Speech Bubble -->
        <div class="relative bg-white dark:bg-[#0b1120] border border-slate-200 dark:border-white/10 p-3.5 rounded-2xl shadow-xl text-xs text-slate-700 dark:text-slate-200 max-w-[210px] mb-2">
            <!-- Close Button -->
            <button @click.stop="isOpen = false" class="absolute -top-2 -right-2 w-5 h-5 rounded-full bg-slate-800 text-white flex items-center justify-center hover:bg-slate-700 transition shadow" aria-label="Tutup">
                <i data-lucide="x" class="w-3 h-3"></i>
            </button>

            <p class="font-bold text-slate-900 dark:text-white mb-0.5 flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                Tersedia Online
            </p>
            <p class="text-[11px] text-slate-500 dark:text-slate-400 leading-relaxed font-light">
                Hubungi langsung via WhatsApp untuk kolaborasi atau tanya-tanya.
            </p>
            <a href="https://wa.me/6281214019947?text=Halo%20Hamid,%20saya%20tertarik%20untuk%20kolaborasi%20pembuatan%20website" target="_blank"
                class="inline-flex items-center gap-1 mt-2 font-bold text-brand-600 dark:text-sky-300 hover:underline uppercase text-[10px] tracking-wider">
                <span>Chat Sekarang</span>
                <i data-lucide="arrow-right" class="w-3 h-3"></i>
            </a>
        </div>

        <!-- Avatar / WA Button -->
        <a href="https://wa.me/6281214019947?text=Halo%20Hamid,%20saya%20tertarik%20untuk%20konsultasi%20pembuatan%20website" target="_blank"
            class="relative group focus:outline-none flex-shrink-0" title="Chat WhatsApp">
            <span class="absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-60 animate-ping"></span>
            <div class="relative w-14 h-14 rounded-full border-2 border-white dark:border-slate-800 bg-slate-900 overflow-hidden shadow-xl group-hover:scale-105 transition duration-300">
                <img src="{{ asset('hamid.jpg') }}" alt="Hamid" class="w-full h-full object-cover" onerror="this.src='{{ asset('support_agent_avatar.png') }}'">
            </div>
            <span class="absolute bottom-0 right-0 block h-3.5 w-3.5 rounded-full bg-emerald-500 border-2 border-white dark:border-slate-900"></span>
        </a>
    </div>

    <!-- Theme Switcher Script & Lucide Icon Activator -->
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        var themeToggleMobileDarkIcon = document.getElementById('theme-toggle-mobile-dark-icon');
        var themeToggleMobileLightIcon = document.getElementById('theme-toggle-mobile-light-icon');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            if (themeToggleLightIcon) themeToggleLightIcon.classList.remove('hidden');
            if (themeToggleMobileLightIcon) themeToggleMobileLightIcon.classList.remove('hidden');
        } else {
            if (themeToggleDarkIcon) themeToggleDarkIcon.classList.remove('hidden');
            if (themeToggleMobileDarkIcon) themeToggleMobileDarkIcon.classList.remove('hidden');
        }

        function toggleTheme() {
            if (themeToggleDarkIcon) themeToggleDarkIcon.classList.toggle('hidden');
            if (themeToggleLightIcon) themeToggleLightIcon.classList.toggle('hidden');
            if (themeToggleMobileDarkIcon) themeToggleMobileDarkIcon.classList.toggle('hidden');
            if (themeToggleMobileLightIcon) themeToggleMobileLightIcon.classList.toggle('hidden');

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        }

        var btnDesktop = document.getElementById('theme-toggle');
        var btnMobile = document.getElementById('theme-toggle-mobile');
        if (btnDesktop) btnDesktop.addEventListener('click', toggleTheme);
        if (btnMobile) btnMobile.addEventListener('click', toggleTheme);

        // Initialize Lucide icons
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            // ===== SCROLL-SPY: Active nav link highlight =====
            const sections = [
                { id: 'portfolio',  nav: 'portfolio' },
                { id: 'skills',     nav: 'skills' },
                { id: 'experience', nav: 'experience' },
                { id: 'contact',    nav: 'contact' },
            ];

            const navLinks = document.querySelectorAll('.nav-link[data-nav]');

            function setActive(navKey) {
                navLinks.forEach(function(link) {
                    if (link.dataset.nav === navKey) {
                        link.classList.add('is-active');
                    } else {
                        link.classList.remove('is-active');
                    }
                });
            }

            if (document.getElementById('portfolio')) {
                // We're on the homepage — use IntersectionObserver
                const observer = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            const matched = sections.find(s => s.id === entry.target.id);
                            if (matched) setActive(matched.nav);
                        }
                    });
                }, { rootMargin: '-25% 0px -45% 0px', threshold: 0.1 });

                sections.forEach(function(s) {
                    const el = document.getElementById(s.id);
                    if (el) observer.observe(el);
                });

                // Clear highlights when at top of hero
                window.addEventListener('scroll', function() {
                    if (window.scrollY < 180) {
                        navLinks.forEach(l => l.classList.remove('is-active'));
                    }
                }, { passive: true });
            }
        });
    </script>
    @yield('scripts')
</body>

</html>
