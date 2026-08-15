@extends('layouts.public')

@section('title', 'Tentang Kami')

@section('content')
    <!-- Profile Header / Hero -->
    <section class="py-24 bg-white dark:bg-[#0b0f19] border-b border-slate-200/60 dark:border-slate-800/80 px-6 text-center relative overflow-hidden">
        <div class="max-w-4xl mx-auto relative z-10">
            <span class="inline-flex items-center px-4 py-1.5 rounded-full border border-slate-200 dark:border-slate-800 text-slate-500 dark:text-slate-400 text-[10px] font-semibold uppercase tracking-wider mb-6 bg-white dark:bg-[#0f1422] shadow-sm">
                Tentang HA Creative
            </span>
            
            <h1 class="text-4xl md:text-6xl font-extrabold text-premium-navy dark:text-white tracking-tight leading-tight mb-6">
                Satu Atap untuk <br>
                <span class="text-premium-emerald dark:text-emerald-400 font-light">Seluruh Solusi Kreatif Anda.</span>
            </h1>
            
            <p class="leading-relaxed text-slate-500 dark:text-slate-400 mb-10 max-w-2xl mx-auto font-light text-sm md:text-base font-sans">
                Kami adalah agensi kreatif kolaboratif yang menggabungkan para ahli teknologi, fotografer cinematic, spesialis pemasaran digital, dan desainer visual untuk mempercepat pertumbuhan bisnis dan mengabadikan momen penting Anda.
            </p>
            
            <div class="flex justify-center gap-4">
                <a href="{{ route('home') }}#contact" class="px-7 py-3 bg-premium-navy dark:bg-emerald-600 hover:bg-slate-800 dark:hover:bg-emerald-500 text-white rounded-lg text-xs font-bold uppercase tracking-wider transition shadow-sm">
                    Mulai Kolaborasi
                </a>
                <a href="{{ route('pricing') }}" class="px-7 py-3 border border-slate-300 dark:border-slate-700 hover:border-premium-navy dark:hover:border-white text-slate-700 dark:text-slate-300 hover:text-premium-navy dark:hover:text-white bg-white dark:bg-[#0f1422] rounded-lg text-xs font-bold uppercase tracking-wider transition">
                    Lihat Paket Harga
                </a>
            </div>
        </div>
    </section>

    <!-- Core Services Pillars -->
    <section class="py-24 px-6 bg-slate-50 dark:bg-[#0e1320] border-b border-slate-200/60 dark:border-slate-850">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-premium-emerald text-xs font-bold uppercase tracking-widest block mb-3">Layanan Terpadu</span>
                <h2 class="text-3xl font-extrabold text-premium-navy dark:text-white tracking-tight">4 Pilar Keahlian Kami</h2>
                <p class="text-slate-400 dark:text-slate-500 text-xs mt-2 max-w-lg mx-auto leading-relaxed">
                    Dikerjakan secara sinergis oleh tim profesional untuk menghasilkan output berkualitas tinggi secara konsisten.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse($pillars as $pillar)
                    <div class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 bg-slate-50 dark:bg-slate-800/50 rounded-xl flex items-center justify-center text-premium-navy dark:text-white mb-6">
                            @if($pillar->icon === 'code')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                            @elseif($pillar->icon === 'palette')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            @elseif($pillar->icon === 'calendar')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            @elseif($pillar->icon === 'film')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4"/></svg>
                            @elseif($pillar->icon === 'chart')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 002 2h2a2 2 0 002-2z"/></svg>
                            @elseif($pillar->icon === 'camera')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            @else
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                            @endif
                        </div>
                        <h3 class="text-lg font-bold text-premium-navy dark:text-white mb-3">{{ $pillar->title }}</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light font-sans">
                            {{ $pillar->description }}
                        </p>
                    </div>
                @empty
                    <div class="col-span-4 text-center py-12 text-slate-400 font-light">
                        Belum ada data pilar keahlian yang ditambahkan.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Timeline Perjalanan Agensi -->
    <section class="py-24 px-6 bg-white dark:bg-[#0b0f19] border-b border-slate-200/60 dark:border-slate-850">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-premium-emerald text-xs font-bold uppercase tracking-widest block mb-3">Sejarah Pembentukan</span>
                <h2 class="text-3xl font-extrabold text-premium-navy dark:text-white tracking-tight">Timeline Sejarah Agensi</h2>
            </div>
            
            <div class="border-l-2 border-slate-200 dark:border-slate-800 ml-4 space-y-12">
                @forelse($timelines as $timeline)
                    <div class="relative pl-8">
                        <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-premium-navy dark:bg-emerald-600 rounded-full border-4 border-white dark:border-[#0b0f19]"></div>
                        <div class="bg-slate-50 dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200/60 dark:border-slate-800 shadow-sm">
                            <span class="text-[10px] font-bold text-premium-emerald dark:text-emerald-400 tracking-wider uppercase">{{ $timeline->year }}</span>
                            <h3 class="text-lg font-bold text-premium-navy dark:text-white mt-1">{{ $timeline->title }}</h3>
                            @if($timeline->subtitle)
                                <p class="text-slate-400 dark:text-slate-500 text-xs mb-4">{{ $timeline->subtitle }}</p>
                            @endif
                            <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-light font-sans">
                                {{ $timeline->content }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-12 text-slate-400 font-light pl-8">
                        Belum ada data timeline sejarah yang ditambahkan.
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection