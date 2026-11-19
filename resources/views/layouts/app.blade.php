<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Dynamic Page Title -->
        <title>{{ (function() {
            $r = request();
            if ($r->routeIs('dashboard'))             return 'Dashboard';
            if ($r->routeIs('admin.portfolios.*'))    return 'Kelola Portofolio';
            if ($r->routeIs('admin.timelines.*'))     return 'Milestone Studio';
            if ($r->routeIs('profile.*'))             return 'Profil Akun';
            return 'Admin';
        })() }} | Admin CMS</title>
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

        <!-- Premium Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script>
            localStorage.removeItem('color-theme');
            document.documentElement.classList.remove('dark');
        </script>

        <style>
            body { font-family: 'Plus Jakarta Sans', 'Inter', sans-serif; }
        </style>
    </head>
    <body class="font-sans antialiased bg-slate-50 text-slate-900">
        <div
            x-data="{ sidebarOpen: false, sidebarMobileOpen: false, hovered: false }"
            class="min-h-screen flex flex-col"
        >
            <!-- Sidebar Navigation Drawer & Overlay -->
            @include('layouts.navigation')

            <!-- Main Panel Content Area -->
            <div
                class="flex-1 flex flex-col transition-all duration-300 min-h-screen"
                :class="sidebarOpen ? 'lg:pl-64' : 'lg:pl-0'"
            >
                <!-- Top Header Navbar -->
                @include('layouts.header')

                <!-- Page Heading/Sub-header -->
                @isset($header)
                    <header class="bg-white dark:bg-[#0f1422] border-b border-slate-200/60 dark:border-slate-800/80 shadow-sm">
                        <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Page Main Body -->
                <main class="flex-1 bg-slate-50 dark:bg-[#0b0f19]">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
