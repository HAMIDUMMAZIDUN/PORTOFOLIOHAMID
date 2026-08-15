@extends('layouts.public')

@section('title', 'Portofolio Projek & Hasil Karya Kami | HA Creative')

@section('content')
    <!-- Page Header -->
    <section class="py-20 bg-white border-b border-slate-200/60 text-center px-6">
        <div class="max-w-3xl mx-auto">
            <span class="text-premium-emerald text-xs font-bold uppercase tracking-widest block mb-3">Galeri Karya</span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-premium-navy tracking-tight mb-4">Portofolio Projek Kami</h1>
            <p class="text-slate-500 font-light text-sm md:text-base leading-relaxed">
                Jelajahi kumpulan hasil karya desain antarmuka, aset visual branding, serta produk aplikasi web/kustom yang telah dikembangkan secara dinamis untuk para mitra bisnis kami.
            </p>
        </div>
    </section>

    <!-- Portfolio Grid with Filters -->
    <section class="py-20 px-6" x-data="{ activeCategory: 'Semua', lightboxOpen: false, lightboxMediaType: '', lightboxSrc: '', lightboxTitle: '' }">
        <div class="max-w-7xl mx-auto">
            <!-- Filter Tabs -->
            <div class="flex justify-center items-center mb-16 space-x-1 bg-slate-200/40 p-1 rounded-xl max-w-lg mx-auto flex-wrap gap-y-1">
                <button @click="activeCategory = 'Semua'" 
                    :class="activeCategory === 'Semua' ? 'bg-white text-premium-navy shadow-sm' : 'text-slate-600 hover:text-premium-navy'"
                    class="px-4 py-2 text-xs font-bold rounded-lg transition duration-150 flex-1 min-w-[70px]">
                    Semua
                </button>
                <button @click="activeCategory = 'Website'" 
                    :class="activeCategory === 'Website' ? 'bg-white text-premium-navy shadow-sm' : 'text-slate-600 hover:text-premium-navy'"
                    class="px-4 py-2 text-xs font-bold rounded-lg transition duration-150 flex-1 min-w-[70px]">
                    Website
                </button>
                <button @click="activeCategory = 'Desain'" 
                    :class="activeCategory === 'Desain' ? 'bg-white text-premium-navy shadow-sm' : 'text-slate-600 hover:text-premium-navy'"
                    class="px-4 py-2 text-xs font-bold rounded-lg transition duration-150 flex-1 min-w-[70px]">
                    Desain
                </button>
                <button @click="activeCategory = 'Video'" 
                    :class="activeCategory === 'Video' ? 'bg-white text-premium-navy shadow-sm' : 'text-slate-600 hover:text-premium-navy'"
                    class="px-4 py-2 text-xs font-bold rounded-lg transition duration-150 flex-1 min-w-[70px]">
                    Video
                </button>
                <button @click="activeCategory = 'Lainnya'" 
                    :class="activeCategory === 'Lainnya' ? 'bg-white text-premium-navy shadow-sm' : 'text-slate-600 hover:text-premium-navy'"
                    class="px-4 py-2 text-xs font-bold rounded-lg transition duration-150 flex-1 min-w-[70px]">
                    Lainnya
                </button>
            </div>

            <!-- Dynamic Grid -->
            @if($portfolios->isEmpty())
                <div class="text-center py-24 bg-white rounded-2xl border border-slate-200/60 max-w-md mx-auto shadow-sm">
                    <svg class="mx-auto h-12 w-12 text-slate-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <h3 class="text-sm font-semibold text-slate-800">Portofolio Belum Tersedia</h3>
                    <p class="text-xs text-slate-400 mt-1">Silakan tambahkan portofolio baru di dashboard admin.</p>
                </div>
            @else
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($portfolios as $item)
                        <div x-show="activeCategory === 'Semua' || activeCategory === '{{ $item->category }}'"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform scale-95"
                             x-transition:enter-end="opacity-100 transform scale-100"
                             class="bg-white rounded-2xl border border-slate-200/50 shadow-sm overflow-hidden flex flex-col hover:shadow-md transition-all duration-300 group">
                            
                            <!-- Image / Video Container -->
                            <div class="relative overflow-hidden aspect-[4/3] bg-slate-900 border-b border-slate-100 cursor-pointer"
                                 @if($item->media_type === 'video')
                                     @click="lightboxMediaType = 'video'; lightboxSrc = '{{ $item->video_file ? asset('storage/' . $item->video_file) : ($item->video_url ?? '') }}'; lightboxTitle = '{{ $item->title }}'; lightboxOpen = true"
                                 @elseif($item->media_type === 'link')
                                     @click="window.open('{{ $item->link }}', '_blank')"
                                 @else
                                     @click="lightboxMediaType = 'image'; lightboxSrc = '{{ asset('storage/' . $item->image) }}'; lightboxTitle = '{{ $item->title }}'; lightboxOpen = true"
                                 @endif>
                                
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                         class="w-full h-full object-cover group-hover:scale-[1.02] transition-transform duration-500 opacity-90 group-hover:opacity-100">
                                @else
                                    <!-- Fallback block if video file only -->
                                    <div class="w-full h-full bg-slate-900 flex items-center justify-center text-slate-500">
                                        <span class="text-xs uppercase tracking-widest font-bold">Media Video</span>
                                    </div>
                                @endif

                                <!-- Play button overlay if media_type = video -->
                                @if($item->media_type === 'video')
                                    <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/40 transition-colors duration-200">
                                        <div class="w-14 h-14 bg-white/90 hover:bg-white text-premium-navy rounded-full flex items-center justify-center shadow-lg transition-transform duration-200 transform group-hover:scale-105">
                                            <svg class="w-6 h-6 fill-current translate-x-0.5" viewBox="0 0 24 24">
                                                <path d="M8 5v14l11-7z" />
                                            </svg>
                                        </div>
                                    </div>
                                @endif

                                <!-- Category & Media Type Tag Overlay -->
                                <div class="absolute top-4 left-4 flex items-center space-x-1.5">
                                    <span class="bg-premium-navy text-white text-[9px] font-bold uppercase tracking-wider px-2.5 py-1 rounded shadow-sm">
                                        {{ $item->category }}
                                    </span>
                                    <span class="bg-white/95 text-slate-800 text-[9px] font-bold uppercase tracking-wider px-2.5 py-1 rounded shadow-sm border border-slate-200 capitalize">
                                        {{ $item->media_type }}
                                    </span>
                                </div>
                            </div>

                            <!-- Content Details -->
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-lg font-bold text-premium-navy mb-2 line-clamp-1">
                                        {{ $item->title }}
                                    </h3>
                                    <p class="text-slate-500 text-xs leading-relaxed mb-6 line-clamp-3 font-light font-sans">
                                        {{ $item->description }}
                                    </p>
                                </div>

                                <!-- CTA Link logic -->
                                <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                                    @if($item->media_type === 'video')
                                        <button @click="lightboxMediaType = 'video'; lightboxSrc = '{{ $item->video_file ? asset('storage/' . $item->video_file) : ($item->video_url ?? '') }}'; lightboxTitle = '{{ $item->title }}'; lightboxOpen = true"
                                                class="inline-flex items-center text-xs font-bold uppercase tracking-wider text-premium-emerald hover:text-emerald-700 transition-colors duration-150">
                                            <span>Putar Video</span>
                                            <svg class="w-3.5 h-3.5 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    @elseif($item->media_type === 'link' || ($item->category === 'Website' && $item->link))
                                        <a href="{{ $item->link }}" target="_blank" 
                                           class="inline-flex items-center text-xs font-bold uppercase tracking-wider text-premium-navy hover:text-indigo-600 transition-colors duration-150">
                                            <span>Kunjungi Link</span>
                                            <svg class="w-3.5 h-3.5 ml-1.5 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                        </a>
                                    @else
                                        <button @click="lightboxMediaType = 'image'; lightboxSrc = '{{ asset('storage/' . $item->image) }}'; lightboxTitle = '{{ $item->title }}'; lightboxOpen = true"
                                                class="inline-flex items-center text-xs font-bold uppercase tracking-wider text-slate-500 hover:text-premium-navy transition-colors duration-150">
                                            <span>Lihat Gambar</span>
                                            <svg class="w-3.5 h-3.5 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Lightbox Modal Container -->
        <div x-show="lightboxOpen" class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/90 backdrop-blur-md"
             x-transition style="display: none;" @keydown.escape.window="lightboxOpen = false">
            
            <!-- Close Button -->
            <button @click="lightboxOpen = false" class="absolute top-6 right-6 text-white/70 hover:text-white focus:outline-none z-10">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            
            <!-- Modal Body -->
            <div class="bg-slate-950 rounded-2xl overflow-hidden max-w-4xl w-full border border-slate-800 shadow-2xl flex flex-col justify-between" 
                 @click.away="lightboxOpen = false">
                
                <!-- Media Player -->
                <div class="aspect-video bg-black flex items-center justify-center relative overflow-hidden">
                    
                    <!-- Youtube/Web Embed Iframe -->
                    <template x-if="lightboxOpen && lightboxMediaType === 'video' && (lightboxSrc.includes('http') && !lightboxSrc.includes('.mp4') && !lightboxSrc.includes('.mov'))">
                        <iframe class="w-full h-full" :src="lightboxSrc" frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </template>

                    <!-- Native HTML5 video player -->
                    <template x-if="lightboxOpen && lightboxMediaType === 'video' && (lightboxSrc.includes('.mp4') || lightboxSrc.includes('.mov') || !lightboxSrc.includes('http'))">
                        <video class="w-full h-full object-contain" controls autoplay>
                            <source :src="lightboxSrc" type="video/mp4">
                            Browser Anda tidak mendukung pemutaran video.
                        </video>
                    </template>

                    <!-- Image Display -->
                    <template x-if="lightboxOpen && lightboxMediaType === 'image'">
                        <img :src="lightboxSrc" class="max-w-full max-h-full object-contain" :alt="lightboxTitle">
                    </template>
                </div>

                <!-- Title & Meta -->
                <div class="p-6 bg-slate-900 border-t border-slate-800 text-white flex justify-between items-center">
                    <h4 class="text-sm font-bold tracking-tight" x-text="lightboxTitle"></h4>
                    <button @click="lightboxOpen = false" class="text-xs text-slate-400 hover:text-white uppercase tracking-wider font-semibold">Tutup</button>
                </div>
            </div>
        </div>
    </section>
@endsection
