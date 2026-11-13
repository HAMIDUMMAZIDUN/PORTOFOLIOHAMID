@extends('layouts.public')

@section('title', 'Portofolio')

@section('content')
    <!-- Page Header (Mini Hero Dark - Yoggui Style) -->
    <section class="hero-dark relative isolate pt-32 pb-20 px-6 rounded-b-[2.5rem] sm:rounded-b-[3.5rem] text-white text-center overflow-hidden">
        <div class="max-w-3xl mx-auto relative z-10">
            <span class="eyebrow mb-4">Galeri Projek</span>
            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">
                Karya & <span class="text-gradient">Studi Kasus</span>
            </h1>
            <p class="text-white/70 font-light text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                Eksplorasi pembuatan website, toko online, web application, dan desain grafis yang kami bangun untuk menunjang pertumbuhan bisnis klien.
            </p>
        </div>
    </section>

    <!-- Portfolio Grid with Filters -->
    <section class="py-20 px-6 bg-slate-50 dark:bg-[#020617]" x-data="{ activeCategory: 'Semua', lightboxOpen: false, lightboxMediaType: '', lightboxSrc: '', lightboxTitle: '' }">
        <div class="max-w-7xl mx-auto">
            
            <!-- Category Filter Pills Switcher -->
            <div class="flex justify-center items-center mb-16 space-x-1.5 bg-slate-200/60 dark:bg-white/5 p-1.5 rounded-2xl max-w-md mx-auto border border-slate-300/50 dark:border-white/10 flex-wrap gap-y-1">
                <button @click="activeCategory = 'Semua'" 
                    :class="activeCategory === 'Semua' ? 'bg-white dark:bg-white/15 text-slate-900 dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'"
                    class="px-5 py-2 text-xs font-bold rounded-xl transition duration-150">
                    Semua
                </button>
                <button @click="activeCategory = 'Website'" 
                    :class="activeCategory === 'Website' ? 'bg-white dark:bg-white/15 text-slate-900 dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'"
                    class="px-5 py-2 text-xs font-bold rounded-xl transition duration-150">
                    Website
                </button>
                <button @click="activeCategory = 'Desain'" 
                    :class="activeCategory === 'Desain' ? 'bg-white dark:bg-white/15 text-slate-900 dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'"
                    class="px-5 py-2 text-xs font-bold rounded-xl transition duration-150">
                    Desain
                </button>
                <button @click="activeCategory = 'Video'" 
                    :class="activeCategory === 'Video' ? 'bg-white dark:bg-white/15 text-slate-900 dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'"
                    class="px-5 py-2 text-xs font-bold rounded-xl transition duration-150">
                    Video
                </button>
            </div>

            <!-- Dynamic Grid (Yoggui .project-card layout) -->
            @if($portfolios->isEmpty())
                <div class="text-center py-24 bg-white dark:bg-[#0b1120] rounded-3xl border border-slate-200/80 dark:border-white/10 max-w-md mx-auto shadow-sm">
                    <i data-lucide="folder-code" class="w-12 h-12 mx-auto text-slate-300 dark:text-slate-600 mb-4"></i>
                    <h3 class="text-base font-bold text-slate-800 dark:text-slate-200">Portofolio Belum Tersedia</h3>
                    <p class="text-xs text-slate-400 dark:text-slate-500 mt-1">Silakan tambahkan portofolio baru di dashboard admin.</p>
                </div>
            @else
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($portfolios as $item)
                    <div x-show="activeCategory === 'Semua' || activeCategory === '{{ $item->category }}'"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="project-card group cursor-pointer"
                         @if($item->media_type === 'video')
                         @click="lightboxMediaType = 'video'; lightboxSrc = '{{ $item->video_file ? asset('storage/' . $item->video_file) : ($item->video_url ?? '') }}'; lightboxTitle = '{{ $item->title }}'; lightboxOpen = true"
                         @elseif($item->media_type === 'link' && $item->link)
                         @click="window.open('{{ $item->link }}', '_blank')"
                         @else
                         @click="lightboxMediaType = 'image'; lightboxSrc = '{{ asset('storage/' . $item->image) }}'; lightboxTitle = '{{ $item->title }}'; lightboxOpen = true"
                         @endif>

                        <!-- Thumbnail -->
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" loading="lazy">
                        @else
                            <div class="w-full h-full bg-slate-900 flex items-center justify-center text-slate-500">
                                <span class="text-xs font-bold uppercase tracking-wider">Preview Media</span>
                            </div>
                        @endif

                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4 z-10 flex items-center gap-1.5">
                            <span class="px-3 py-1 rounded-full text-[10px] font-bold tracking-wide uppercase bg-slate-950/80 text-white backdrop-blur border border-white/10">
                                {{ $item->category }}
                            </span>
                            @if($item->media_type === 'video')
                            <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase bg-brand-600 text-white flex items-center gap-1">
                                <i data-lucide="play" class="w-3 h-3 fill-current"></i> Video
                            </span>
                            @endif
                        </div>

                        <!-- Hover Gradient Overlay (Yoggui Style) -->
                        <div class="project-overlay flex flex-col justify-end">
                            <h3 class="text-xl font-bold text-white mb-1.5 group-hover:text-sky-300 transition-colors">
                                {{ $item->title }}
                            </h3>
                            <p class="text-xs text-white/75 line-clamp-2 leading-relaxed mb-4 font-light">
                                {{ $item->description }}
                            </p>
                            <div class="flex items-center gap-2 text-xs font-bold text-slate-900">
                                <span class="px-4 py-2 rounded-full bg-white text-slate-900 flex items-center gap-1.5 group-hover:scale-105 transition-transform shadow-sm">
                                    <span>{{ ($item->media_type === 'link' && $item->link) ? 'Buka Website' : 'Lihat Detail' }}</span>
                                    <i data-lucide="{{ ($item->media_type === 'link' && $item->link) ? 'external-link' : 'arrow-right' }}" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            @endif

        </div>

        <!-- Lightbox Modal -->
        <div x-show="lightboxOpen" class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/90 backdrop-blur-md"
            x-transition style="display: none;" @keydown.escape.window="lightboxOpen = false">
            
            <button @click="lightboxOpen = false" class="absolute top-6 right-6 text-white/70 hover:text-white z-10 p-2">
                <i data-lucide="x" class="w-8 h-8"></i>
            </button>

            <div class="bg-slate-950 rounded-3xl overflow-hidden max-w-4xl w-full border border-white/10 shadow-2xl flex flex-col"
                @click.away="lightboxOpen = false">
                
                <div class="aspect-video bg-black flex items-center justify-center relative overflow-hidden">
                    <template x-if="lightboxOpen && lightboxMediaType === 'video' && (lightboxSrc.includes('http') && !lightboxSrc.includes('.mp4') && !lightboxSrc.includes('.mov'))">
                        <iframe class="w-full h-full" :src="lightboxSrc" frameborder="0" allowfullscreen></iframe>
                    </template>

                    <template x-if="lightboxOpen && lightboxMediaType === 'video' && (lightboxSrc.includes('.mp4') || lightboxSrc.includes('.mov') || !lightboxSrc.includes('http'))">
                        <video class="w-full h-full object-contain" controls autoplay>
                            <source :src="lightboxSrc" type="video/mp4">
                        </video>
                    </template>

                    <template x-if="lightboxOpen && lightboxMediaType === 'image'">
                        <img :src="lightboxSrc" class="max-w-full max-h-full object-contain" :alt="lightboxTitle">
                    </template>
                </div>

                <div class="p-6 bg-slate-900 border-t border-white/10 text-white flex justify-between items-center">
                    <h4 class="text-base font-bold" x-text="lightboxTitle"></h4>
                    <button @click="lightboxOpen = false" class="text-xs text-slate-400 hover:text-white uppercase tracking-wider font-semibold">Tutup</button>
                </div>
            </div>
        </div>
    </section>
@endsection
