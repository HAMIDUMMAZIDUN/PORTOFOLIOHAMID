<x-app-layout>
    {{-- Langsung panggil setiap section tanpa pembungkus container --}}
    @include('partials.home_section')
    @include('partials.about_section')
    @include('partials.blog_section')
    @include('partials.project_section')
    @include('partials.service_section')
    @include('partials.contact_section')
</x-app-layout>