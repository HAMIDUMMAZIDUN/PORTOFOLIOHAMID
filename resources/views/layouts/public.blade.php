<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@hasSection('title') @yield('title') | HA Creative. @else HA Creative. | Jasa Pembuatan Website & Desain Grafis Premium @endif</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
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
                            navy: '#0f172a',      // Dark Slate/Navy
                            emerald: '#059669',   // Emerald
                            accent: '#1e40af',    // Navy Blue
                            bgLight: '#fcfbf9',   // Putih Tulang
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', 'Inter', sans-serif;
            background-color: #fcfbf9; /* Putih tulang */
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .dark body {
            background-color: #0b0f19; /* Dark Background */
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
<body class="text-slate-900 dark:text-slate-100 antialiased selection:bg-slate-900 selection:text-white dark:selection:bg-white dark:selection:text-slate-950">

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
                @else
                    <a href="{{ route('login') }}" class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 hover:text-premium-navy dark:hover:text-white transition-colors duration-200">
                        Admin Login
                    </a>
                @endauth
                <a href="{{ route('home') }}#contact" class="inline-flex items-center justify-center px-5 py-2.5 bg-premium-navy dark:bg-emerald-600 hover:bg-slate-800 dark:hover:bg-emerald-500 text-white text-xs font-bold uppercase tracking-wider rounded-lg shadow-sm transition duration-200">
                    Mulai Projek
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
                    <a href="{{ route('login') }}" class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Admin Login</a>
                @endauth
                <a href="{{ route('home') }}#contact" @click="mobileOpen = false" class="inline-flex items-center justify-center px-4 py-2 bg-premium-navy dark:bg-emerald-600 text-white text-xs font-bold uppercase tracking-wider rounded-lg">
                    Mulai Projek
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-16 bg-[#fcfbf9] dark:bg-[#0b0f19] border-t border-slate-200/60 dark:border-slate-800/80 text-slate-500 dark:text-slate-400 text-xs">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <!-- Left Brand info -->
            <div class="text-center md:text-left">
                <p class="font-bold text-premium-navy dark:text-white text-sm mb-1.5 font-outfit">HA Creative Studio</p>
                <p class="font-light">Premium Web & Design Studio. Melayani UMKM hingga Korporasi.</p>
            </div>
            
            <!-- Contact info -->
            <div class="text-center">
                <p class="mb-1 font-medium text-slate-700 dark:text-slate-300">Hubungi kami: hamidabdulaziz36@gmail.com</p>
                <p class="font-light">WhatsApp: +62 812-1401-9947</p>
            </div>

            <!-- Footer Meta & Social Links -->
            <div class="text-center md:text-right">
                <p class="mb-3 font-light">&copy; 2026 HA Creative. Hak Cipta Dilindungi.</p>
                <div class="flex justify-center md:justify-end space-x-6 text-[11px] font-semibold tracking-wider uppercase text-slate-400 dark:text-slate-550">
                    <a href="https://wa.me/6281214019947" target="_blank" class="hover:text-premium-navy dark:hover:text-white transition duration-150">WhatsApp</a>
                    <a href="mailto:hamidabdulaziz36@gmail.com" class="hover:text-premium-navy dark:hover:text-white transition duration-150">Email</a>
                    <a href="{{ route('login') }}" class="hover:text-premium-navy dark:hover:text-white transition duration-150 text-slate-300 dark:text-slate-650">Admin</a>
                </div>
            </div>
        </div>
    </footer>

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
