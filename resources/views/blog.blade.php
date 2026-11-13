@extends('layouts.public')

@section('title', 'Blog')

@section('content')
    <!-- Page Header (Mini Hero Dark - Yoggui Style) -->
    <section class="hero-dark relative isolate pt-32 pb-20 px-6 rounded-b-[2.5rem] sm:rounded-b-[3.5rem] text-white text-center overflow-hidden">
        <div class="max-w-3xl mx-auto relative z-10">
            <span class="eyebrow mb-4">Wawasan & Tips</span>
            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">
                Artikel & <span class="text-gradient">Panduan Praktis</span>
            </h1>
            <p class="text-white/70 font-light text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                Kumpulan tutorial seputar pengelolaan website, optimasi tampilan, serta strategi digital untuk UMKM dan brand lokal.
            </p>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="py-20 px-6 bg-slate-50 dark:bg-[#020617]">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                @forelse($posts as $post)
                    <article class="p-8 rounded-3xl bg-white dark:bg-[#0b1120] border border-slate-200/80 dark:border-white/10 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-lg transition group">
                        <div>
                            <div class="flex items-center space-x-3 text-[11px] font-bold uppercase tracking-wider mb-4">
                                <span class="px-3 py-1 rounded-full bg-brand-50 dark:bg-white/5 border border-brand-100 dark:border-white/10 text-brand-600 dark:text-sky-300">
                                    {{ $post->category }}
                                </span>
                                <span class="text-slate-400 dark:text-slate-500 font-normal">
                                    {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d M Y') }}
                                </span>
                            </div>

                            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-brand-600 dark:group-hover:text-sky-300 transition-colors leading-snug">
                                {{ $post->title }}
                            </h3>

                            <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm leading-relaxed font-light mb-6 line-clamp-3">
                                {{ Str::limit($post->content, 200) }}
                            </p>
                        </div>

                        <div class="pt-4 border-t border-slate-100 dark:border-white/5 flex justify-between items-center text-xs">
                            <span class="text-slate-400 font-medium flex items-center gap-1.5">
                                <i data-lucide="clock" class="w-3.5 h-3.5"></i>
                                {{ $post->read_time ?: '3 mnt baca' }}
                            </span>
                            <span class="font-bold text-brand-600 dark:text-sky-300 flex items-center gap-1 group-hover:underline">
                                <span>Baca Artikel</span>
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </div>
                    </article>
                @empty
                    <div class="col-span-2 text-center py-20 bg-white dark:bg-[#0b1120] rounded-3xl border border-slate-200/80 dark:border-white/10 shadow-sm">
                        <i data-lucide="book-open" class="w-12 h-12 mx-auto text-slate-300 dark:text-slate-600 mb-4"></i>
                        <h4 class="text-base font-bold text-slate-800 dark:text-slate-200">Belum Ada Artikel</h4>
                        <p class="text-xs text-slate-400 mt-1">Artikel blog dan tips seputar website akan segera diunggah.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
