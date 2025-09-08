{{-- Menggunakan layout utama dari app.blade.php --}}
@extends('layouts.app')

{{-- Menentukan judul khusus untuk halaman ini --}}
@section('title', 'Selamat Datang di Portofolio Hamid')

{{-- Mendefinisikan konten utama untuk halaman ini --}}
@section('content')
    <div class="container">
        @include('partials._home_section')
    </div>

    <div class="container">
        @include('partials._services_section')
        @include('partials._about_section')
        @include('partials._placeholder_sections')
        @include('partials._contact_section')
    </div>
@endsection
