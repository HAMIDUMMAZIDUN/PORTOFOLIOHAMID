<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.posts.index') }}" class="inline-flex items-center text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detail Artikel Blog') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-100">
                <div class="p-8 text-gray-900">
                    <div class="mb-6">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-indigo-50 text-indigo-700 border border-indigo-100">
                            {{ $post->category }}
                        </span>
                        <h1 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-3 leading-tight">{{ $post->title }}</h1>
                        
                        <div class="flex items-center text-xs text-gray-400 mt-4 space-x-4">
                            <span>Diterbitkan: {{ $post->created_at->format('d M Y, H:i') }}</span>
                            <span>&bull;</span>
                            <span>Estimasi: {{ $post->read_time }}</span>
                        </div>
                    </div>

                    @if($post->image)
                        <div class="mb-8 rounded-xl overflow-hidden shadow-sm border border-gray-100 max-h-96">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                        </div>
                    @endif

                    <div class="prose max-w-none text-gray-650 leading-relaxed font-light whitespace-pre-line text-sm md:text-base">
                        {{ $post->content }}
                    </div>

                    <div class="flex justify-end space-x-3 border-t border-gray-100 pt-6 mt-8">
                        <a href="{{ route('admin.posts.edit', $post->id) }}" 
                            class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-705 text-white text-sm font-semibold rounded-lg shadow-sm transition duration-150 ease-in-out">
                            Edit Artikel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
