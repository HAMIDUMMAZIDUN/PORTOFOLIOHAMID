<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Judul Halaman Dinamis, dengan judul default jika tidak ditentukan -->
    <title>@yield('title', 'Portofolio Hamid Abdul Aziz')</title>
    
    <!-- Link ke File CSS dari folder public -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
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
