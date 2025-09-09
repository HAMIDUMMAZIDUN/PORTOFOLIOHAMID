<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-t">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Portofolio Hamid Abdul Aziz')</title>
    
    <!-- HANYA GUNAKAN VITE UNTUK MEMUAT CSS DAN JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
    {{-- Memanggil partial navbar --}}
    @include('partials._navbar')

    {{-- Konten utama halaman akan dimasukkan di sini --}}
    <main>
        @yield('content')
    </main>

    {{-- Link ke File JavaScript dari folder public --}}
    <script src="{{ asset('js/script.js') }}"></script>
    
</body>
</html>
