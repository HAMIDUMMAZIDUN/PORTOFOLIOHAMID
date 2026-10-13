@extends('layouts.public')

@section('title', 'Blog')

@section('content')
    <!-- Page Header -->
    <section class="py-20 bg-white dark:bg-[#0b0f19] border-b border-slate-200/60 dark:border-slate-800/80 text-center px-6">
        <div class="max-w-3xl mx-auto">
            <span class="text-premium-emerald text-xs font-bold uppercase tracking-widest block mb-3">Artikel & Panduan Praktis</span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-premium-navy dark:text-white tracking-tight mb-4">Tips Mengembangkan Website & Bisnis Online</h1>
            <p class="text-slate-500 dark:text-slate-400 font-light text-sm md:text-base leading-relaxed">
                Kumpulan panduan praktis seputar pengelolaan website, optimasi tampilan, serta strategi digital untuk UMKM dan brand lokal.
            </p>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="py-20 px-6 bg-slate-50 dark:bg-[#0e1320]">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-10">
                @forelse($posts as $post)
                    <div class="bg-white dark:bg-[#0f1422] rounded-2xl border border-slate-200/60 dark:border-slate-800 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition group">
                        <div class="p-8">
                            <div class="flex items-center space-x-3 text-[10px] font-bold text-premium-emerald uppercase tracking-wider mb-4">
                                <span>{{ $post->category }}</span>
                                <span class="w-1.5 h-1.5 bg-slate-300 dark:bg-slate-700 rounded-full"></span>
                                <span class="text-slate-400 dark:text-slate-500">{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-premium-navy dark:text-white mb-4 group-hover:text-premium-emerald dark:group-hover:text-emerald-450 transition duration-150 leading-snug">
                                {{ $post->title }}
                            </h3>
                            <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed font-light font-sans mb-6">
                                {{ Str::limit($post->content, 180) }}
                            </p>
                        </div>
                        <div class="px-8 pb-8 pt-4 border-t border-slate-100 dark:border-slate-800/80 flex justify-between items-center">
                            <span class="text-[11px] text-slate-400 dark:text-slate-550 font-medium">{{ $post->read_time }}</span>
                            <a href="#" class="text-xs font-bold text-premium-navy dark:text-slate-300 hover:underline">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-2 text-center py-10 bg-white dark:bg-[#0f1422] rounded-2xl border border-slate-200/60 dark:border-slate-800 shadow-sm">
                        <p class="text-slate-500 dark:text-slate-400">Belum ada artikel blog.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
