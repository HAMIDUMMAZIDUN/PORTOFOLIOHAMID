<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.portfolios.index') }}" class="inline-flex items-center text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 transition duration-150 ease-in-out">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 dark:text-white tracking-tight">
                {{ __('Tambah Portofolio') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-8 bg-slate-50/50 dark:bg-[#0b0f19] min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#0f1422] overflow-hidden shadow-sm rounded-2xl border border-slate-200/60 dark:border-slate-800/80">
                <div class="p-8 text-slate-900 dark:text-slate-100">
                    <form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data" 
                          x-data="{ category: 'Website', media_type: 'image' }">
                        @csrf

                        <!-- Judul Proyek -->
                        <div class="mb-6">
                            <label for="title" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Judul Proyek</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}" 
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Masukkan nama proyek atau klien" required>
                            @error('title')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Kategori -->
                        <div class="mb-6">
                            <label for="category" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Kategori</label>
                            <select name="category" id="category" x-model="category"
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" required>
                                <option value="Website">Website</option>
                                <option value="Desain">Desain</option>
                                <option value="Video">Video</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            @error('category')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tipe Media Utama -->
                        <div class="mb-6">
                            <label for="media_type" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Tipe Media Utama</label>
                            <select name="media_type" id="media_type" x-model="media_type"
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" required>
                                <option value="image">Gambar / Foto</option>
                                <option value="video">Video (File atau Link URL)</option>
                                <option value="link">Tautan Luar Saja (Link Only)</option>
                            </select>
                            @error('media_type')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Upload Gambar Preview / Thumbnail -->
                        <div class="mb-6" x-data="{ imagePreview: null }">
                            <label for="image" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">
                                <span x-show="media_type === 'image'">Gambar Preview (Wajib)</span>
                                <span x-show="media_type !== 'image'">Thumbnail / Poster (Opsional)</span>
                            </label>
                            
                            <div class="flex items-center space-x-6">
                                <!-- Image Preview Container -->
                                <div class="shrink-0">
                                    <template x-if="imagePreview">
                                        <img :src="imagePreview" class="h-20 w-32 object-cover rounded-lg shadow-sm border border-slate-200 dark:border-slate-700">
                                    </template>
                                    <template x-if="!imagePreview">
                                        <div class="h-20 w-32 rounded-lg bg-slate-50 dark:bg-slate-900 border-2 border-dashed border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-400">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    </template>
                                </div>
                                
                                <label class="block">
                                    <span class="sr-only">Pilih Gambar</span>
                                    <input type="file" name="image" id="image" accept="image/*" :required="media_type === 'image'"
                                        @change="const file = $event.target.files[0]; if (file) { const reader = new FileReader(); reader.onload = (e) => { imagePreview = e.target.result; }; reader.readAsDataURL(file); }"
                                        class="block w-full text-sm text-slate-500 dark:text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 dark:file:bg-indigo-950/40 file:text-indigo-700 dark:file:text-indigo-400 hover:file:bg-indigo-100 dark:hover:file:bg-indigo-900/50 transition duration-150 cursor-pointer">
                                </label>
                            </div>
                            <p class="text-slate-400 dark:text-slate-500 text-xs mt-2 font-normal">Format: JPG, JPEG, PNG, WEBP, atau SVG. Max 2MB.</p>
                            @error('image')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Bagian Input Khusus Video -->
                        <div x-show="media_type === 'video'" x-transition class="bg-slate-50 dark:bg-slate-900/50 p-6 rounded-2xl border border-slate-200/60 dark:border-slate-800/80 mb-6">
                            <h3 class="text-sm font-bold text-slate-800 dark:text-white mb-4">Input Media Video</h3>
                            
                            <!-- Opsi A: Upload Video File -->
                            <div class="mb-5">
                                <label for="video_file" class="block text-xs font-semibold text-slate-600 dark:text-slate-300 mb-2">Upload Berkas Video (.mp4, .mov)</label>
                                <input type="file" name="video_file" id="video_file" accept="video/mp4,video/quicktime"
                                    class="block w-full text-xs text-slate-500 dark:text-slate-400 file:mr-4 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 dark:file:bg-indigo-950/40 file:text-indigo-700 dark:file:text-indigo-400 hover:file:bg-indigo-100 transition duration-150 cursor-pointer">
                                <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1.5">Max file size: 20MB.</p>
                                @error('video_file')
                                    <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Opsi B: Video Link / Embed URL -->
                            <div>
                                <label for="video_url" class="block text-xs font-semibold text-slate-600 dark:text-slate-300 mb-2">Atau Link URL Video / Embed (YouTube, TikTok, dll)</label>
                                <input type="url" name="video_url" id="video_url" value="{{ old('video_url') }}"
                                    class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs transition duration-150"
                                    placeholder="https://www.youtube.com/embed/XXXXXX atau link langsung">
                                @error('video_url')
                                    <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Link Website (Tampil jika kategori = Website ATAU media_type = link) -->
                        <div class="mb-6" x-show="category === 'Website' || media_type === 'link'" x-transition>
                            <label for="link" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Link Website / Tautan Eksternal</label>
                            <input type="url" name="link" id="link" value="{{ old('link') }}"
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150"
                                placeholder="https://example.com" :required="media_type === 'link'">
                            @error('link')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Deskripsi Singkat -->
                        <div class="mb-8">
                            <label for="description" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Deskripsi Singkat</label>
                            <textarea name="description" id="description" rows="4" 
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150"
                                placeholder="Jelaskan peran Anda, teknologi yang digunakan, atau detail proyek..." required>{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex justify-end space-x-3 border-t border-slate-200 dark:border-slate-800 pt-6">
                            <a href="{{ route('admin.portfolios.index') }}" 
                                class="inline-flex items-center px-4 py-2 border border-slate-300 dark:border-slate-700 hover:border-slate-400 dark:hover:border-slate-600 text-slate-700 dark:text-slate-300 text-sm font-medium rounded-xl transition duration-150 ease-in-out">
                                Batal
                            </a>
                            <button type="submit" 
                                class="inline-flex items-center px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-md transition duration-150 ease-in-out">
                                Simpan Portofolio
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
