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

    <!-- Enforce Pure Light Mode Script -->
    <script>
        localStorage.removeItem('color-theme');
        document.documentElement.classList.remove('dark');
    </script>

    <script>
        tailwind.config = {
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
                            600: '#0284c7',
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
            color: #0f172a;
        }

        /* ===== NAVBAR LIGHT STYLES ===== */
        .site-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
            transition: all 0.3s ease;
        }

        .site-nav.is-scrolled {
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(203, 213, 225, 0.9);
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.06);
        }

        .nav-link {
            font-size: 0.8125rem;
            font-weight: 600;
            color: #475569;
            transition: color 0.2s ease;
            display: inline-flex;
            align-items: center;
            position: relative;
        }

        .nav-link:hover {
            color: #0f172a;
        }

        .nav-link.is-active {
            color: #0f172a !important;
        }

        .nav-link.is-active .nav-num {
            color: #2563eb;
            text-shadow: 0 0 10px rgba(37, 99, 235, 0.3);
        }

        .nav-link.is-active::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, #2563eb, #7c3aed);
            border-radius: 9999px;
            box-shadow: 0 0 8px rgba(37, 99, 235, 0.4);
        }

        .nav-num {
            font-family: ui-monospace, SFMono-Regular, Menlo, monospace;
            font-size: 0.75rem;
            color: #2563eb;
            font-weight: 700;
            margin-right: 0.375rem;
        }

        .nav-cta {
            font-size: 0.8125rem;
            background: #0f172a;
            color: #ffffff !important;
            border-radius: 9999px;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.75rem;
            padding: 0.25rem 0.25rem 0.25rem 1.25rem;
            font-weight: 700;
            transition: transform 0.25s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.25s;
            box-shadow: 0 4px 14px rgba(15, 23, 42, 0.15);
        }

        .nav-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.25);
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

        /* Hero Light Gradient */
        .hero-light {
            background: radial-gradient(65% 65% at 5% 0%, rgba(219, 234, 254, 0.75), transparent 70%),
                        radial-gradient(60% 60% at 95% 100%, rgba(237, 233, 254, 0.75), transparent 70%),
                        radial-gradient(45% 45% at 50% 90%, rgba(224, 242, 254, 0.5), transparent 70%),
                        #ffffff;
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
            background-color: #2563eb;
            border-radius: 9999px;
            box-shadow: 0 0 8px rgba(37, 99, 235, 0.6);
            flex-shrink: 0;
        }

        .section-title {
            font-size: 2.25rem;
            letter-spacing: -0.025em;
            font-weight: 800;
            line-height: 1.15;
            color: #0f172a;
        }

        @media (min-width: 640px) {
            .section-title {
                font-size: 3rem;
            }
        }

        .text-gradient {
            background-image: linear-gradient(to right, #2563eb, #7c3aed);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Hero Figma Selection Box */
        .hero-selection {
            border: 1.5px solid #2563eb;
            background: rgba(37, 99, 235, 0.03);
            border-radius: 0.5rem;
            padding: 1.75rem;
            position: relative;
            box-shadow: 0 4px 20px -2px rgba(37, 99, 235, 0.08);
        }

        .hero-layer {
            position: absolute;
            top: -0.75rem;
            left: 1rem;
            background: #2563eb;
            color: #ffffff;
            font-size: 0.6875rem;
            font-weight: 700;
            padding: 0.125rem 0.5rem;
            border-radius: 4px;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            letter-spacing: 0.025em;
        }

        .hero-size {
            position: absolute;
            bottom: -0.75rem;
            right: 1rem;
            background: #2563eb;
            color: #ffffff;
            font-size: 0.6875rem;
            font-weight: 700;
            padding: 0.125rem 0.5rem;
            border-radius: 4px;
            letter-spacing: 0.025em;
        }

        .hero-handle {
            width: 0.5625rem;
            height: 0.5625rem;
            background: #ffffff;
            box-shadow: 0 0 0 2px #2563eb;
            border-radius: 2px;
            position: absolute;
        }

        /* Floating Cursors */
        .cta-cursor {
            position: absolute;
            display: flex;
            align-items: center;
            gap: 0.375rem;
            pointer-events: none;
            z-index: 20;
            animation: cursor-float 4s ease-in-out infinite;
        }

        .cta-cursor span {
            font-size: 0.6875rem;
            font-weight: 700;
            color: #ffffff;
            padding: 0.2rem 0.5rem;
            border-radius: 6px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        @keyframes cursor-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        /* Typewriter Caret */
        .hero-caret {
            display: inline-block;
            width: 3px;
            height: 1em;
            background: #2563eb;
            vertical-align: -0.1em;
            margin-left: 4px;
            animation: caret-blink 0.9s infinite;
        }

        @keyframes caret-blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }

        /* CTA Card in Light Mode */
        .cta-card {
            isolation: isolate;
            background: linear-gradient(135deg, #ffffff, #f8fafc);
            border-radius: 2rem;
            padding: 4rem 1.5rem;
            position: relative;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.07);
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
            background: #93c5fd;
            opacity: 0.45;
            width: 55%;
            height: 80%;
            top: -20%;
            left: -10%;
        }

        .cta-glow-2 {
            background: #c4b5fd;
            opacity: 0.45;
            width: 55%;
            height: 90%;
            bottom: -30%;
            right: -10%;
        }

        .cta-glow-3 {
            background: #bae6fd;
            opacity: 0.35;
            width: 30%;
            height: 50%;
            bottom: -20%;
            right: 15%;
        }

        .cta-selection {
            border: 1.5px solid #2563eb;
            background: rgba(37, 99, 235, 0.03);
            border-radius: 0.5rem;
            padding: 0.75rem 1.25rem;
            display: inline-block;
            position: relative;
        }

        .cta-handle {
            width: 0.5625rem;
            height: 0.5625rem;
            box-shadow: 0 0 0 2px #2563eb;
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
            box-shadow: 0 12px 28px -12px rgba(37, 99, 235, 0.5);
            transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.4s;
            cursor: pointer;
        }

        .cta-btn::before {
            content: "";
            z-index: -1;
            border-radius: inherit;
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, #2563eb, #7c3aed, #2563eb);
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
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.2), 0 18px 36px -12px rgba(37, 99, 235, 0.6);
        }

        .cta-btn-icon {
            width: 2.5rem;
            height: 2.5rem;
            color: #2563eb;
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
            to {
                background-position: -200% 0;
            }
        }

        @keyframes cta-btn-shine {
            0%, 55% { background-position: 150% 0; }
            100% { background-position: -50% 0; }
        }

        @keyframes cta-btn-pulse {
            0% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.5); }
            100% { box-shadow: 0 0 0 12px rgba(37, 99, 235, 0); }
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

<body class="text-slate-800 antialiased bg-[#f8fafc] selection:bg-brand-600 selection:text-white"
    x-data="{ scrolled: false, mobileOpen: false }"
    @scroll.window="scrolled = (window.pageYOffset > 20)">

    <!-- Modern Fixed Navbar (Clean Light Mode) -->
    <header class="site-nav" :class="{ 'is-scrolled': scrolled }">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">

            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2 group">
                <span class="text-2xl font-black tracking-tight text-slate-900 font-display">
                    Hamid<span class="text-brand-600 group-hover:text-blue-600 transition-colors">.</span>
                </span>
            </a>

            <!-- Desktop Nav Links with Numbered Styling -->
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

            <!-- Right Controls: Clean Hubungi Saya Button (No Theme Toggle) -->
            <div class="hidden md:flex items-center">
                <a href="#contact" class="nav-cta">
                    <span>Hubungi Saya</span>
                    <span class="nav-cta-icon">
                        <i data-lucide="arrow-right" class="nav-cta-arrow"></i>
                    </span>
                </a>
            </div>

            <!-- Hamburger Button (Mobile Only) -->
            <div class="flex items-center md:hidden">
                <button @click="mobileOpen = !mobileOpen"
                    class="p-2.5 rounded-full bg-slate-100 text-slate-800 hover:bg-slate-200 border border-slate-200 focus:outline-none"
                    aria-label="Buka Menu">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Fullscreen Mobile Navigation Menu Overlay (Light Mode) -->
        <div x-show="mobileOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="md:hidden fixed inset-0 top-20 z-40 bg-white/95 backdrop-blur-2xl p-6 flex flex-col justify-between overflow-y-auto border-t border-slate-200 shadow-2xl"
            style="display: none;">

            <ul class="space-y-4 pt-4">
                <li>
                    <a href="{{ request()->routeIs('home') ? '#portfolio' : route('home') . '#portfolio' }}" @click="mobileOpen = false"
                        class="flex items-center text-xl font-bold text-slate-900 hover:text-brand-600 py-2 border-b border-slate-100">
                        <span class="nav-num text-sm text-brand-600 mr-3">01</span> Portofolio
                    </a>
                </li>
                <li>
                    <a href="{{ request()->routeIs('home') ? '#skills' : route('home') . '#skills' }}" @click="mobileOpen = false"
                        class="flex items-center text-xl font-bold text-slate-900 hover:text-brand-600 py-2 border-b border-slate-100">
                        <span class="nav-num text-sm text-brand-600 mr-3">02</span> Keahlian
                    </a>
                </li>
                <li>
                    <a href="{{ request()->routeIs('home') ? '#experience' : route('home') . '#experience' }}" @click="mobileOpen = false"
                        class="flex items-center text-xl font-bold text-slate-900 hover:text-brand-600 py-2 border-b border-slate-100">
                        <span class="nav-num text-sm text-brand-600 mr-3">03</span> Pengalaman
                    </a>
                </li>
                <li>
                    <a href="{{ request()->routeIs('home') ? '#contact' : route('home') . '#contact' }}" @click="mobileOpen = false"
                        class="flex items-center text-xl font-bold text-slate-900 hover:text-brand-600 py-2 border-b border-slate-100">
                        <span class="nav-num text-sm text-brand-600 mr-3">04</span> Kontak
                    </a>
                </li>
            </ul>

            <div class="pt-8 pb-6 border-t border-slate-200 space-y-4">
                <a href="{{ route('home') }}#contact" @click="mobileOpen = false"
                    class="cta-btn w-full justify-between">
                    <span>Hubungi Saya Langsung</span>
                    <span class="cta-btn-icon">
                        <i data-lucide="arrow-right" class="cta-btn-arrow"></i>
                    </span>
                </a>
                <p class="text-center text-xs text-slate-500 pt-2">
                    Email: <a href="mailto:hamidabdulaziz36@gmail.com" class="text-brand-600 underline">hamidabdulaziz36@gmail.com</a>
                </p>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Ultra-Sleek Modern Footer (Light Mode) -->
    <footer class="border-t border-slate-200 py-12 bg-white text-slate-500 text-sm">
        <div class="max-w-7xl mx-auto px-6 flex flex-col items-center justify-center text-center gap-4">
            <!-- Hak Cipta (Center & di Atas Link Sosmed) -->
            <p class="text-slate-500 text-xs font-medium tracking-wide">
                &copy; {{ date('Y') }} Hamid Abdul Aziz. Hak Cipta Dilindungi.
            </p>

            <!-- Link & Icon Sosmed (Center & di Bawah Hak Cipta) -->
            <ul class="flex items-center justify-center gap-3">
                <li>
                    <a href="https://www.instagram.com/hamidajaaaaa/" target="_blank" rel="noopener" class="social-icon" aria-label="Instagram" title="Instagram @hamidajaaaaa">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/hamid-abdul-aziz/" target="_blank" rel="noopener" class="social-icon" aria-label="LinkedIn" title="LinkedIn Hamid Abdul Aziz">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.tiktok.com/@ham1dun" target="_blank" rel="noopener" class="social-icon" aria-label="TikTok" title="TikTok @ham1dun">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.29 0 .58.04.86.11V9.4a6.33 6.33 0 0 0-1-.08A6.34 6.34 0 0 0 3 15.66a6.34 6.34 0 0 0 10.82 4.49 6.27 6.27 0 0 0 1.93-4.52V8.75a8.28 8.28 0 0 0 4.84 1.56V6.86c-.34 0-.68-.06-1-.17z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/HAMIDUMMAZIDUN" target="_blank" rel="noopener" class="social-icon" aria-label="GitHub" title="GitHub">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://wa.me/6281214019947" target="_blank" rel="noopener" class="social-icon" aria-label="WhatsApp" title="WhatsApp 081214019947">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- Sleek Floating WhatsApp Consultation Pill (Light Mode) -->
    <div x-data="{ isOpen: true }" x-show="isOpen"
        class="fixed bottom-6 right-6 z-40 flex items-end space-x-3 max-w-xs"
        x-transition:enter="transition ease-out duration-300 transform translate-y-4 opacity-0"
        x-transition:enter-end="transform translate-y-0 opacity-100"
        x-transition:leave="transition ease-in duration-200 transform translate-y-4 opacity-0">

        <!-- Speech Bubble -->
        <div class="relative bg-white border border-slate-200 p-3.5 rounded-2xl shadow-xl text-xs text-slate-700 max-w-[210px] mb-2">
            <!-- Close Button -->
            <button @click.stop="isOpen = false" class="absolute -top-2 -right-2 w-5 h-5 rounded-full bg-slate-800 text-white flex items-center justify-center hover:bg-slate-700 transition shadow" aria-label="Tutup">
                <i data-lucide="x" class="w-3 h-3"></i>
            </button>

            <p class="font-bold text-slate-900 mb-0.5 flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                Tersedia Online
            </p>
            <p class="text-[11px] text-slate-500 leading-relaxed font-light">
                Hubungi langsung via WhatsApp untuk kolaborasi atau tanya-tanya.
            </p>
            <a href="https://wa.me/6281214019947?text=Halo%20Hamid,%20saya%20tertarik%20untuk%20kolaborasi%20pembuatan%20website" target="_blank"
                class="inline-flex items-center gap-1 mt-2 font-bold text-brand-600 hover:underline uppercase text-[10px] tracking-wider">
                <span>Chat Sekarang</span>
                <i data-lucide="arrow-right" class="w-3 h-3"></i>
            </a>
        </div>

        <!-- Avatar / WA Button -->
        <a href="https://wa.me/6281214019947?text=Halo%20Hamid,%20saya%20tertarik%20untuk%20konsultasi%20pembuatan%20website" target="_blank"
            class="relative group focus:outline-none flex-shrink-0" title="Chat WhatsApp">
            <span class="absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-60 animate-ping"></span>
            <div class="relative w-14 h-14 rounded-full border-2 border-white bg-slate-900 overflow-hidden shadow-xl group-hover:scale-105 transition duration-300">
                <img src="{{ asset('hamid.jpg') }}" alt="Hamid" class="w-full h-full object-cover" onerror="this.src='{{ asset('support_agent_avatar.png') }}'">
            </div>
            <span class="absolute bottom-0 right-0 block h-3.5 w-3.5 rounded-full bg-emerald-500 border-2 border-white"></span>
        </a>
    </div>

    <!-- Lucide Icon Activator & Scroll Spy Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            // ===== SCROLL-SPY: Active nav link highlight =====
            const sections = [{
                    id: 'portfolio',
                    nav: 'portfolio'
                },
                {
                    id: 'skills',
                    nav: 'skills'
                },
                {
                    id: 'experience',
                    nav: 'experience'
                },
                {
                    id: 'contact',
                    nav: 'contact'
                },
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
                const observer = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            const matched = sections.find(s => s.id === entry.target.id);
                            if (matched) setActive(matched.nav);
                        }
                    });
                }, {
                    rootMargin: '-25% 0px -45% 0px',
                    threshold: 0.1
                });

                sections.forEach(function(s) {
                    const el = document.getElementById(s.id);
                    if (el) observer.observe(el);
                });

                window.addEventListener('scroll', function() {
                    if (window.scrollY < 180) {
                        navLinks.forEach(l => l.classList.remove('is-active'));
                    }
                }, {
                    passive: true
                });
            }
        });
    </script>
    @yield('scripts')
</body>

</html>
