<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="{{ route('admin.portfolios.index') }}" class="inline-flex items-center text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </a>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Detail Portofolio') }}
                </h2>
            </div>
            <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-lg shadow-md transition duration-150 ease-in-out">
                <svg class="w-5 h-5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                Edit Portofolio
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-100">
                <div class="p-8 text-gray-900">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                        <!-- Media Preview Column -->
                        <div class="lg:col-span-7">
                            <span class="block text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Tampilan Media Utama</span>
                            
                            @if($portfolio->media_type === 'video')
                                <div class="w-full aspect-video rounded-xl shadow-md overflow-hidden bg-black border border-gray-250 flex items-center justify-center">
                                    @if($portfolio->video_file)
                                        <video class="w-full h-full object-contain" controls>
                                            <source src="{{ asset('storage/' . $portfolio->video_file) }}" type="video/mp4">
                                            Browser Anda tidak mendukung tag video HTML5.
                                        </video>
                                    @elseif($portfolio->video_url)
                                        @php
                                            // Simple parser to convert youtube links to embed format
                                            $embedUrl = $portfolio->video_url;
                                            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $portfolio->video_url, $match)) {
                                                $embedUrl = "https://www.youtube.com/embed/" . $match[1];
                                            }
                                        @endphp
                                        <iframe class="w-full h-full" src="{{ $embedUrl }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    @else
                                        <div class="text-center p-6 text-gray-400">
                                            <p class="text-sm">Tidak ada berkas video atau link video terunggah.</p>
                                        </div>
                                    @endif
                                </div>
                                @if($portfolio->image)
                                    <div class="mt-4">
                                        <span class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Thumbnail Poster</span>
                                        <img class="w-32 h-auto object-cover rounded shadow-sm border" src="{{ asset('storage/' . $portfolio->image) }}" alt="Poster">
                                    </div>
                                @endif
                            @elseif($portfolio->media_type === 'link')
                                <div class="w-full aspect-video rounded-xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center bg-gray-50 p-6 text-center shadow-inner">
                                    <svg class="w-12 h-12 text-indigo-500 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                    </svg>
                                    <h4 class="text-sm font-bold text-gray-800">Portofolio Tautan Langsung</h4>
                                    <p class="text-xs text-gray-500 max-w-sm mt-1 mb-4">Media utama untuk proyek ini berupa tautan eksternal langsung.</p>
                                    @if($portfolio->link)
                                        <a href="{{ $portfolio->link }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold rounded-lg transition">
                                            Kunjungi Link &rarr;
                                        </a>
                                    @endif
                                </div>
                                @if($portfolio->image)
                                    <div class="mt-4">
                                        <span class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Gambar Cover</span>
                                        <img class="w-48 h-auto object-cover rounded shadow-sm border" src="{{ asset('storage/' . $portfolio->image) }}" alt="Cover">
                                    </div>
                                @endif
                            @else
                                <!-- Image Only -->
                                @if($portfolio->image)
                                    <img class="w-full h-auto object-cover rounded-xl shadow-md border border-gray-150" src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}">
                                @else
                                    <div class="w-full aspect-[4/3] rounded-xl border-2 border-dashed border-gray-200 flex items-center justify-center bg-gray-50 text-gray-400">
                                        <span>Gambar preview tidak tersedia</span>
                                    </div>
                                @endif
                            @endif
                        </div>

                        <!-- Info Column -->
                        <div class="lg:col-span-5 flex flex-col justify-between">
                            <div>
                                <!-- Judul Proyek -->
                                <div class="mb-6">
                                    <span class="block text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Judul Proyek</span>
                                    <h3 class="text-2xl font-bold text-gray-950">{{ $portfolio->title }}</h3>
                                </div>

                                <!-- Kategori & Media Type -->
                                <div class="mb-6 flex gap-2.5 flex-wrap">
                                    <div>
                                        <span class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1.5">Kategori</span>
                                        @if($portfolio->category === 'Website')
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-800">
                                                Website
                                            </span>
                                        @elseif($portfolio->category === 'Desain')
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-purple-100 text-purple-800">
                                                Desain
                                            </span>
                                        @elseif($portfolio->category === 'Video')
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-rose-100 text-rose-800">
                                                Video
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-800">
                                                {{ $portfolio->category }}
                                            </span>
                                        @endif
                                    </div>
                                    <div>
                                        <span class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1.5">Tipe Media</span>
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-700 capitalize border border-slate-200">
                                            {{ $portfolio->media_type }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Deskripsi -->
                                <div class="mb-6">
                                    <span class="block text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Deskripsi</span>
                                    <p class="text-gray-700 leading-relaxed text-sm whitespace-pre-line">{{ $portfolio->description }}</p>
                                </div>

                                <!-- Tautan Live -->
                                @if($portfolio->link)
                                    <div class="mb-6">
                                        <span class="block text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Link Live Preview</span>
                                        <a href="{{ $portfolio->link }}" target="_blank" class="inline-flex items-center text-indigo-600 hover:text-indigo-900 font-medium transition duration-150">
                                            <span>Kunjungi Website Proyek</span>
                                            <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                                
                                <!-- Video Links -->
                                @if($portfolio->media_type === 'video')
                                    @if($portfolio->video_url)
                                        <div class="mb-6">
                                            <span class="block text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Link Video Asli</span>
                                            <a href="{{ $portfolio->video_url }}" target="_blank" class="inline-flex items-center text-rose-600 hover:text-rose-900 font-medium transition duration-150">
                                                <span>Buka Tautan Video Asli</span>
                                                <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                    @if($portfolio->video_file)
                                        <div class="mb-6">
                                            <span class="block text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Berkas Video Server</span>
                                            <a href="{{ asset('storage/' . $portfolio->video_file) }}" target="_blank" class="inline-flex items-center text-teal-600 hover:text-teal-900 font-medium transition duration-150">
                                                <span>Buka / Unduh File Video</span>
                                                <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                @endif
                            </div>

                            <div class="flex items-center space-x-4 border-t border-gray-100 pt-6 mt-6">
                                <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus portofolio ini?');" class="w-full">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 border border-rose-200 text-rose-600 hover:bg-rose-50 text-sm font-medium rounded-lg transition duration-150">
                                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Hapus Portofolio
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
