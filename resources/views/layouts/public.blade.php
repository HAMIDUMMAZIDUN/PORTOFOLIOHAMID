<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@hasSection('title') @yield('title') | HA Creative. @else HA Creative. | Jasa Pembuatan Website & Desain Grafis Premium @endif</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Scripts & Styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
                        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
                    },
                    colors: {
                        premium: {
                            navy: '#0f172a',
                            emerald: '#059669',
                            accent: '#1e40af',
                            bgLight: '#fcfbf9',
                        },
                        slate: {
                            850: '#1e293b',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', 'Inter', sans-serif;
            background-color: #fcfbf9;
            /* Putih tulang */
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .dark body {
            background-color: #0b0f19;
            /* Dark Background */
        }

        .nav-blur {
            background: rgba(252, 251, 249, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: background 0.3s ease;
        }

        .dark .nav-blur {
            background: rgba(11, 15, 25, 0.85);
        }
    </style>
    @yield('styles')
</head>

<body class="text-slate-900 dark:text-slate-100 antialiased bg-[#fcfbf9] dark:bg-[#0b0f19] selection:bg-slate-900 selection:text-white dark:selection:bg-white dark:selection:text-slate-900">

    <!-- Sticky Navbar -->
    <nav class="sticky top-0 z-50 w-full border-b border-slate-200/60 dark:border-slate-800/80 nav-blur" x-data="{ mobileOpen: false }">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="text-xl font-bold tracking-tight text-premium-navy dark:text-white flex items-center space-x-1">
                <span>HA</span>
                <span class="text-slate-400 font-light">Creative.</span>
            </a>

            <!-- Navigation Links (Desktop) -->
            <div class="hidden md:flex items-center space-x-8 text-[13px] font-semibold tracking-wide uppercase">
                <a href="{{ route('home') }}#services" class="border-b-2 {{ request()->routeIs('home') ? 'text-premium-emerald dark:text-emerald-400 font-bold border-premium-emerald dark:border-emerald-400' : 'border-transparent text-slate-600 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white' }} pb-1 transition-all duration-200">Layanan</a>
                <a href="{{ route('pricing') }}" class="border-b-2 {{ request()->routeIs('pricing') ? 'text-premium-emerald dark:text-emerald-400 font-bold border-premium-emerald dark:border-emerald-400' : 'border-transparent text-slate-600 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white' }} pb-1 transition-all duration-200">Paket Harga</a>
                <a href="{{ route('portfolio') }}" class="border-b-2 {{ request()->routeIs('portfolio') ? 'text-premium-emerald dark:text-emerald-400 font-bold border-premium-emerald dark:border-emerald-400' : 'border-transparent text-slate-600 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white' }} pb-1 transition-all duration-200">Portofolio</a>
                <a href="{{ route('social-media') }}" class="border-b-2 {{ request()->routeIs('social-media') ? 'text-premium-emerald dark:text-emerald-400 font-bold border-premium-emerald dark:border-emerald-400' : 'border-transparent text-slate-600 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white' }} pb-1 transition-all duration-200">Sosmed</a>
                <a href="{{ route('blog') }}" class="border-b-2 {{ request()->routeIs('blog') ? 'text-premium-emerald dark:text-emerald-400 font-bold border-premium-emerald dark:border-emerald-400' : 'border-transparent text-slate-600 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white' }} pb-1 transition-all duration-200">Blog</a>
                <a href="{{ route('about') }}" class="border-b-2 {{ request()->routeIs('about') ? 'text-premium-emerald dark:text-emerald-400 font-bold border-premium-emerald dark:border-emerald-400' : 'border-transparent text-slate-600 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white' }} pb-1 transition-all duration-200">Tentang</a>
            </div>

            <!-- CTA / Theme Switcher / Admin Login (Desktop) -->
            <div class="hidden md:flex items-center space-x-6">
                <!-- Theme Toggle Button -->
                <button id="theme-toggle" type="button" class="p-2 text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-sm transition focus:outline-none" title="Ubah Tema">
                    <!-- Dark Icon (Moon) -->
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <!-- Light Icon (Sun) -->
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.46 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                @auth
                <a href="{{ route('dashboard') }}" class="text-xs font-semibold uppercase tracking-wider text-premium-navy dark:text-slate-200 hover:underline">
                    Dashboard
                </a>
                @endauth
                <a href="{{ route('home') }}#contact" class="inline-flex items-center justify-center px-5 py-2.5 bg-premium-navy dark:bg-emerald-600 hover:bg-slate-800 dark:hover:bg-emerald-500 text-white text-xs font-bold uppercase tracking-wider rounded-lg shadow-sm transition duration-200">
                    Konsultasi
                </a>
            </div>

            <!-- Hamburger Button (Mobile) -->
            <div class="flex items-center space-x-3 md:hidden">
                <!-- Theme Toggle Button (Mobile Icon) -->
                <button id="theme-toggle-mobile" type="button" class="p-2 text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-sm transition focus:outline-none">
                    <svg id="theme-toggle-mobile-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-mobile-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.46 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <button @click="mobileOpen = !mobileOpen" class="p-2 text-premium-navy dark:text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div x-show="mobileOpen" @click.away="mobileOpen = false" x-transition
            class="md:hidden border-t border-slate-200 dark:border-slate-800 bg-[#fcfbf9] dark:bg-[#0b0f19] px-6 py-6 space-y-4 shadow-inner" style="display: none;">
            <a href="{{ route('home') }}#services" @click="mobileOpen = false" class="block text-sm font-bold pl-3 border-l-2 {{ request()->routeIs('home') ? 'text-premium-emerald dark:text-emerald-400 border-premium-emerald dark:border-emerald-400' : 'text-slate-600 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white border-transparent' }}">Layanan</a>
            <a href="{{ route('pricing') }}" @click="mobileOpen = false" class="block text-sm font-bold pl-3 border-l-2 {{ request()->routeIs('pricing') ? 'text-premium-emerald dark:text-emerald-400 border-premium-emerald dark:border-emerald-400' : 'text-slate-600 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white border-transparent' }}">Paket Harga</a>
            <a href="{{ route('portfolio') }}" @click="mobileOpen = false" class="block text-sm font-bold pl-3 border-l-2 {{ request()->routeIs('portfolio') ? 'text-premium-emerald dark:text-emerald-400 border-premium-emerald dark:border-emerald-400' : 'text-slate-600 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white border-transparent' }}">Portofolio</a>
            <a href="{{ route('social-media') }}" @click="mobileOpen = false" class="block text-sm font-bold pl-3 border-l-2 {{ request()->routeIs('social-media') ? 'text-premium-emerald dark:text-emerald-400 border-premium-emerald dark:border-emerald-400' : 'text-slate-600 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white border-transparent' }}">Sosmed</a>
            <a href="{{ route('blog') }}" @click="mobileOpen = false" class="block text-sm font-bold pl-3 border-l-2 {{ request()->routeIs('blog') ? 'text-premium-emerald dark:text-emerald-400 border-premium-emerald dark:border-emerald-400' : 'text-slate-600 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white border-transparent' }}">Blog</a>
            <a href="{{ route('about') }}" @click="mobileOpen = false" class="block text-sm font-bold pl-3 border-l-2 {{ request()->routeIs('about') ? 'text-premium-emerald dark:text-emerald-400 border-premium-emerald dark:border-emerald-400' : 'text-slate-600 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white border-transparent' }}">Tentang</a>
            <hr class="border-slate-200 dark:border-slate-800 my-2">
            <div class="flex items-center justify-between">
                @auth
                <a href="{{ route('dashboard') }}" class="text-xs font-bold uppercase tracking-wider text-premium-navy dark:text-slate-300">Dashboard</a>
                @else
                <span></span>
                @endauth
                <a href="{{ route('home') }}#contact" @click="mobileOpen = false" class="inline-flex items-center justify-center px-4 py-2 bg-premium-navy dark:bg-emerald-600 text-white text-xs font-bold uppercase tracking-wider rounded-lg">
                    Konsultasi
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="pt-20 pb-10 bg-[#0f172a] dark:bg-[#0b0f19] border-t border-slate-800 text-slate-400 text-xs">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-12 mb-16">
                <!-- Column 1: Logo, Slogan, Socials, Trust Badge (lg:col-span-4) -->
                <div class="lg:col-span-4 flex flex-col items-start">
                    <a href="{{ route('home') }}" class="text-2xl font-bold tracking-tight text-white flex items-center space-x-1 mb-4">
                        <span>HA</span>
                        <span class="text-slate-400 font-light">Creative.</span>
                    </a>
                    <p class="text-slate-400 mb-6 font-light leading-relaxed">
                        Studio pembuatan website dan desain grafis berbasis di Bandung. Melayani UMKM dan bisnis berkembang dengan hasil rapi, cepat, dan terpercaya.
                    </p>

                    <!-- Social Media Links (White Circle, Dark Icon inside) -->
                    <div class="flex items-center space-x-3 mb-6">
                        <a href="https://facebook.com" class="w-9 h-9 rounded-full bg-white hover:bg-slate-200 text-slate-900 flex items-center justify-center transition duration-150" target="_blank" aria-label="Facebook">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z" />
                            </svg>
                        </a>
                        <a href="https://instagram.com" class="w-9 h-9 rounded-full bg-white hover:bg-slate-200 text-slate-900 flex items-center justify-center transition duration-150" target="_blank" aria-label="Instagram">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                            </svg>
                        </a>
                        <a href="https://linkedin.com" class="w-9 h-9 rounded-full bg-white hover:bg-slate-200 text-slate-900 flex items-center justify-center transition duration-150" target="_blank" aria-label="LinkedIn">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Hubungi Kami (lg:col-span-3) -->
                <div class="lg:col-span-3">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 mb-6">Hubungi Kami</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Email / Contact</p>
                            <p class="text-sm text-white font-medium hover:text-amber-400 transition duration-150 mt-0.5">
                                <a href="mailto:hamidabdulaziz36@gmail.com">hamidabdulaziz36@gmail.com</a>
                            </p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Bandung (HQ)</p>
                            <p class="text-xs text-slate-300 font-light mt-0.5 leading-relaxed">
                                Kota Bandung,<br>
                                Jawa Barat, Indonesia
                            </p>
                            <a href="https://maps.google.com" target="_blank" class="inline-flex items-center text-[10px] font-semibold text-amber-400 hover:underline mt-1.5">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                                Lihat Peta
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Column 3: Rekomendasi Layanan & Tutorial (lg:col-span-2) -->
                <div class="lg:col-span-2">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 mb-6">Layanan Kami</h3>
                    <ul class="space-y-2.5 text-slate-300 mb-8 font-light">
                        <li><a href="{{ route('home') }}#services" class="hover:text-amber-400 transition duration-150">Jasa Pembuatan Website</a></li>
                        <li><a href="{{ route('social-media') }}" class="hover:text-amber-400 transition duration-150">Sosial Media Management</a></li>
                        <li><a href="{{ route('home') }}#services" class="hover:text-amber-400 transition duration-150">Desain Grafis Premium</a></li>
                        <li><a href="{{ route('portfolio') }}" class="hover:text-amber-400 transition duration-150">Landing Page Bisnis</a></li>
                        <li><a href="{{ route('home') }}#services" class="hover:text-amber-400 transition duration-150">Custom Web Development</a></li>
                    </ul>

                    <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 mb-6">Tutorial</h3>
                    <ul class="space-y-2.5 text-slate-300 font-light">
                        <li><a href="{{ route('blog') }}" class="hover:text-amber-400 transition duration-150">Blog Edukasi</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-amber-400 transition duration-150">Panduan Kelola Web</a></li>
                    </ul>
                </div>

                <!-- Column 4: Informasi (lg:col-span-3) -->
                <div class="lg:col-span-3">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 mb-6">Informasi</h3>
                    <ul class="space-y-2.5 text-slate-300 font-light">
                        <li><a href="{{ route('about') }}" class="hover:text-amber-400 transition duration-150">Tentang HA Creative</a></li>
                        <li><a href="{{ route('pricing') }}" class="hover:text-amber-400 transition duration-150">Paket Harga</a></li>
                        <li><a href="{{ route('portfolio') }}" class="hover:text-amber-400 transition duration-150">Karya Portofolio</a></li>
                        <li><a href="{{ route('home') }}#contact" class="hover:text-amber-400 transition duration-150">Konsultasi Project</a></li>
                        <li><a href="{{ route('login') }}" class="hover:text-amber-400 transition duration-150 text-slate-500">Admin Login</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition duration-150">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition duration-150">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>

            <!-- Horizontal Divider -->
            <hr class="border-slate-800 my-8">

            <!-- Bottom Row: Sublinks and Copyright -->
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex flex-wrap items-center justify-center md:justify-start gap-x-4 gap-y-2 text-[10px] uppercase tracking-wider font-semibold text-slate-500">
                    <a href="{{ route('home') }}" class="hover:text-amber-400 transition duration-150">Home</a>
                    <span class="text-slate-700">&bull;</span>
                    <a href="{{ route('home') }}#services" class="hover:text-amber-400 transition duration-150">Jasa Website</a>
                    <span class="text-slate-700">&bull;</span>
                    <a href="{{ route('portfolio') }}" class="hover:text-amber-400 transition duration-150">Portofolio</a>
                    <span class="text-slate-700">&bull;</span>
                    <a href="{{ route('pricing') }}" class="hover:text-amber-400 transition duration-150">Paket Harga</a>
                    <span class="text-slate-700">&bull;</span>
                    <a href="{{ route('social-media') }}" class="hover:text-amber-400 transition duration-150">Sosial Media</a>
                    <span class="text-slate-700">&bull;</span>
                    <a href="{{ route('blog') }}" class="hover:text-amber-400 transition duration-150">Blog</a>
                    <span class="text-slate-700">&bull;</span>
                    <a href="{{ route('about') }}" class="hover:text-amber-400 transition duration-150">Tentang Kami</a>
                </div>
                <div class="text-[11px] text-slate-500 font-light text-center md:text-right">
                    &copy; 2026 HA Creative. Hak Cipta Dilindungi.
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Support Chat Widget -->
    <div x-data="{ isOpen: true }" x-show="isOpen"
        class="fixed bottom-6 right-6 z-50 flex items-end space-x-3 max-w-xs md:max-w-sm"
        x-transition:enter="transition ease-out duration-300 transform translate-y-4 opacity-0"
        x-transition:enter-end="transform translate-y-0 opacity-100"
        x-transition:leave="transition ease-in duration-250 transform translate-y-4 opacity-0">

        <!-- Speech Bubble -->
        <div class="relative bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-4 rounded-2xl shadow-2xl text-xs text-slate-700 dark:text-slate-200 leading-normal max-w-[200px] mb-4">
            <!-- Small triangle pointing to the avatar -->
            <div class="absolute right-[-6px] bottom-6 w-3 h-3 bg-white dark:bg-slate-900 border-t border-r border-slate-200 dark:border-slate-800 transform rotate-45"></div>

            <!-- Close Button -->
            <button @click.stop="isOpen = false" class="absolute -top-2 -right-2 w-5 h-5 rounded-full bg-slate-900 dark:bg-slate-800 text-white flex items-center justify-center hover:bg-slate-700 dark:hover:bg-slate-600 transition shadow focus:outline-none" aria-label="Tutup">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <p class="font-bold text-[#0f172a] dark:text-amber-400 mb-1">Butuh Konsultasi?</p>
            <p class="font-light text-slate-600 dark:text-slate-300">Diskusikan kebutuhan website Anda bersama <span class="font-semibold text-emerald-600 dark:text-emerald-400">HA Creative</span>.</p>
            <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20ingin%20konsultasi%20mengenai%20projek%20saya" target="_blank"
                class="inline-block mt-2 font-bold text-emerald-600 dark:text-emerald-400 hover:underline uppercase text-[9px] tracking-wider">
                Chat WhatsApp &rarr;
            </a>
        </div>

        <!-- Avatar Button -->
        <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20ingin%20konsultasi%20mengenai%20projek%20saya" target="_blank"
            class="relative group focus:outline-none flex-shrink-0">
            <!-- Ripple Wave Effect -->
            <span class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping"></span>

            <!-- Main Avatar Container -->
            <div class="relative w-16 h-16 rounded-full border-4 border-white dark:border-slate-800 bg-slate-100 overflow-hidden shadow-2xl group-hover:scale-105 transition duration-300">
                <img src="{{ asset('support_agent_avatar.png') }}" alt="Customer Support" class="w-full h-full object-cover">
            </div>

            <!-- Online status indicator -->
            <span class="absolute bottom-1 right-1 block h-3.5 w-3.5 rounded-full bg-emerald-500 border-2 border-white dark:border-slate-800 animate-pulse"></span>
        </a>
    </div>

    <!-- Theme Switcher Script logic -->
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        var themeToggleMobileDarkIcon = document.getElementById('theme-toggle-mobile-dark-icon');
        var themeToggleMobileLightIcon = document.getElementById('theme-toggle-mobile-light-icon');

        // Change the icons inside the buttons based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
            themeToggleMobileLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
            themeToggleMobileDarkIcon.classList.remove('hidden');
        }

        function toggleTheme() {
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');
            themeToggleMobileDarkIcon.classList.toggle('hidden');
            themeToggleMobileLightIcon.classList.toggle('hidden');

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

        document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
        document.getElementById('theme-toggle-mobile').addEventListener('click', toggleTheme);
    </script>
    @yield('scripts')
</body>

</html>