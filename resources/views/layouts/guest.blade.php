<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hamid') }} &mdash; Portal</title>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Scripts & Styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        localStorage.removeItem('color-theme');
        document.documentElement.classList.remove('dark');
    </script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            600: '#7c3aed',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-900 antialiased font-sans">
    <div class="min-h-screen flex flex-col justify-center items-center px-6 py-12 relative overflow-hidden">
        
        <!-- Top Navigation -->
        <div class="absolute top-6 right-6 flex items-center space-x-4">
            <a href="/" class="text-xs font-semibold text-slate-500 hover:text-slate-900 transition duration-150">
                &larr; Kembali ke Beranda
            </a>
        </div>

        <!-- Logo Container -->
        <div class="mb-8 text-center">
            <a href="/" class="text-3xl font-black tracking-tight text-slate-900 flex items-center justify-center space-x-1.5 font-display">
                <span>Hamid</span>
                <span class="text-brand-600">.</span>
            </a>
            <p class="text-xs text-slate-400 mt-2 font-medium tracking-wider uppercase">Portal</p>
        </div>

        <!-- Main Form Slot -->
        <div class="w-full sm:max-w-md bg-white p-8 rounded-2xl border border-slate-200 shadow-md">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
