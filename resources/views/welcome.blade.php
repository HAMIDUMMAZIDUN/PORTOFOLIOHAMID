<x-app-layout>
    <div class="container">
        @include('partials._home_section')
    </div>

    <div class="container">
        @include('partials._services_section')
        @include('partials._about_section')
        @include('partials._project_section')
        @include('partials._blogs_section')
        @include('partials._testimonials_section')
        @include('partials._contact_section')
    </div>
</x-app-layout>