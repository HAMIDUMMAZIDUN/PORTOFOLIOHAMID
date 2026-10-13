<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.posts.index') }}" class="inline-flex items-center text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 transition duration-150 ease-in-out">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 dark:text-white tracking-tight">
                {{ __('Detail Artikel Blog') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-8 bg-slate-50/50 dark:bg-[#0b0f19] min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#0f1422] overflow-hidden shadow-sm rounded-2xl border border-slate-200/60 dark:border-slate-800/80">
                <div class="p-8 text-slate-900 dark:text-slate-100">
                    <div class="mb-6">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-rose-50 dark:bg-rose-950/40 text-rose-700 dark:text-rose-300 border border-rose-200 dark:border-rose-900">
                            {{ $post->category }}
                        </span>
                        <h1 class="text-2xl md:text-3xl font-extrabold text-slate-900 dark:text-white mt-3 leading-tight tracking-tight">{{ $post->title }}</h1>
                        
                        <div class="flex items-center text-xs text-slate-400 dark:text-slate-500 mt-4 space-x-4">
                            <span>Diterbitkan: {{ $post->created_at->format('d M Y, H:i') }} WIB</span>
                            <span>&bull;</span>
                            <span>Estimasi: {{ $post->read_time }}</span>
                        </div>
                    </div>

                    @if($post->image)
                        <div class="mb-8 rounded-2xl overflow-hidden shadow-sm border border-slate-200/60 dark:border-slate-800 max-h-96">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                        </div>
                    @endif

                    <div class="prose max-w-none text-slate-650 dark:text-slate-300 leading-relaxed font-light whitespace-pre-line text-sm md:text-base border-t border-slate-100 dark:border-slate-800/80 pt-6">
                        {{ $post->content }}
                    </div>

                    <div class="flex justify-between items-center border-t border-slate-100 dark:border-slate-800/80 pt-6 mt-8">
                        <a href="{{ route('admin.posts.index') }}" 
                            class="inline-flex items-center px-4 py-2 border border-slate-300 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm font-medium rounded-xl transition duration-150">
                            &larr; Kembali ke Daftar
                        </a>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" 
                            class="inline-flex items-center px-5 py-2.5 bg-rose-600 hover:bg-rose-700 text-white text-sm font-semibold rounded-xl shadow-md transition duration-150 ease-in-out">
                            Edit Artikel Ini
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
