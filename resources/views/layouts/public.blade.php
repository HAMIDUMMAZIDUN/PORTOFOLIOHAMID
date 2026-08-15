<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HA Creative | Jasa Pembuatan Website & Desain Grafis Premium')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Scripts & Styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <script>
        tailwind.config = {
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
        }
        .nav-blur {
            background: rgba(252, 251, 249, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
    @yield('styles')
</head>
<body class="text-slate-900 antialiased selection:bg-slate-900 selection:text-white">

    <!-- Sticky Navbar -->
    <nav class="sticky top-0 z-50 w-full border-b border-slate-200/60 nav-blur" x-data="{ mobileOpen: false }">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="text-xl font-bold tracking-tight text-premium-navy flex items-center space-x-1">
                <span>HA</span>
                <span class="text-slate-400 font-light">Creative.</span>
            </a>

            <!-- Navigation Links (Desktop) -->
            <div class="hidden md:flex items-center space-x-8 text-[13px] font-semibold tracking-wide uppercase text-slate-600">
                <a href="{{ route('home') }}#services" class="hover:text-premium-navy transition-colors duration-200">Layanan</a>
                <a href="{{ route('pricing') }}" class="hover:text-premium-navy transition-colors duration-200">Paket Harga</a>
                <a href="{{ route('portfolio') }}" class="hover:text-premium-navy transition-colors duration-200">Portofolio</a>
                <a href="{{ route('social-media') }}" class="hover:text-premium-navy transition-colors duration-200">Sosmed</a>
                <a href="{{ route('blog') }}" class="hover:text-premium-navy transition-colors duration-200">Blog</a>
                <a href="{{ route('about') }}" class="hover:text-premium-navy transition-colors duration-200 font-medium">Tentang</a>
            </div>

            <!-- CTA / Admin Login (Desktop) -->
            <div class="hidden md:flex items-center space-x-6">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-xs font-semibold uppercase tracking-wider text-premium-navy hover:underline">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-xs font-semibold uppercase tracking-wider text-slate-500 hover:text-premium-navy transition-colors duration-200">
                        Admin Login
                    </a>
                @endauth
                <a href="{{ route('home') }}#contact" class="inline-flex items-center justify-center px-5 py-2.5 bg-premium-navy hover:bg-slate-800 text-white text-xs font-bold uppercase tracking-wider rounded-lg shadow-sm transition duration-200">
                    Mulai Projek
                </a>
            </div>

            <!-- Hamburger Button (Mobile) -->
            <button @click="mobileOpen = !mobileOpen" class="md:hidden p-2 text-premium-navy focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;" />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation Menu -->
        <div x-show="mobileOpen" @click.away="mobileOpen = false" x-transition 
             class="md:hidden border-t border-slate-200 bg-[#fcfbf9] px-6 py-6 space-y-4 shadow-inner" style="display: none;">
            <a href="{{ route('home') }}#services" @click="mobileOpen = false" class="block text-sm font-bold text-slate-600 hover:text-premium-navy">Layanan</a>
            <a href="{{ route('pricing') }}" @click="mobileOpen = false" class="block text-sm font-bold text-slate-600 hover:text-premium-navy">Paket Harga</a>
            <a href="{{ route('portfolio') }}" @click="mobileOpen = false" class="block text-sm font-bold text-slate-600 hover:text-premium-navy">Portofolio</a>
            <a href="{{ route('social-media') }}" @click="mobileOpen = false" class="block text-sm font-bold text-slate-600 hover:text-premium-navy">Sosmed</a>
            <a href="{{ route('blog') }}" @click="mobileOpen = false" class="block text-sm font-bold text-slate-600 hover:text-premium-navy">Blog</a>
            <a href="{{ route('about') }}" @click="mobileOpen = false" class="block text-sm font-bold text-slate-600 hover:text-premium-navy">Tentang</a>
            <hr class="border-slate-200 my-2">
            <div class="flex items-center justify-between">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-xs font-bold uppercase tracking-wider text-premium-navy">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-xs font-bold uppercase tracking-wider text-slate-500 hover:text-premium-navy">Admin Login</a>
                @endauth
                <a href="{{ route('home') }}#contact" @click="mobileOpen = false" class="inline-flex items-center justify-center px-4 py-2 bg-premium-navy text-white text-xs font-bold uppercase tracking-wider rounded-lg">
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
    <footer class="py-16 bg-[#fcfbf9] border-t border-slate-200/60 text-slate-500 text-xs">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <!-- Left Brand info -->
            <div class="text-center md:text-left">
                <p class="font-bold text-premium-navy text-sm mb-1.5 font-outfit">HA Creative Studio</p>
                <p class="font-light">Premium Web & Design Studio. Melayani UMKM hingga Korporasi.</p>
            </div>
            
            <!-- Contact info -->
            <div class="text-center">
                <p class="mb-1 font-medium text-slate-700">Hubungi kami: hamidabdulaziz36@gmail.com</p>
                <p class="font-light">WhatsApp: +62 812-1401-9947</p>
            </div>

            <!-- Footer Meta & Social Links -->
            <div class="text-center md:text-right">
                <p class="mb-3 font-light">&copy; 2026 HA Creative. Hak Cipta Dilindungi.</p>
                <div class="flex justify-center md:justify-end space-x-6 text-[11px] font-semibold tracking-wider uppercase text-slate-400">
                    <a href="https://wa.me/6281214019947" target="_blank" class="hover:text-premium-navy transition duration-150">WhatsApp</a>
                    <a href="mailto:hamidabdulaziz36@gmail.com" class="hover:text-premium-navy transition duration-150">Email</a>
                    <a href="{{ route('login') }}" class="hover:text-premium-navy transition duration-150 text-slate-300">Admin</a>
                </div>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>
