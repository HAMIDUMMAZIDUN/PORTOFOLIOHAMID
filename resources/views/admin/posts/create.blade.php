<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.posts.index') }}" class="inline-flex items-center text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 transition duration-150 ease-in-out">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 dark:text-white tracking-tight">
                {{ __('Tambah Artikel Blog') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-8 bg-slate-50/50 dark:bg-[#0b0f19] min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#0f1422] overflow-hidden shadow-sm rounded-2xl border border-slate-200/60 dark:border-slate-800/80">
                <div class="p-8 text-slate-900 dark:text-slate-100">
                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Judul Artikel -->
                        <div class="mb-6">
                            <label for="title" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Judul Artikel</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}" 
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: 5 Alasan Bisnis Anda Wajib Memiliki Website Sendiri" required>
                            @error('title')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Kategori -->
                        <div class="mb-6">
                            <label for="category" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Kategori Topik</label>
                            <input type="text" name="category" id="category" value="{{ old('category') }}" 
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: Web Development, Desain Grafis, Branding, Tips Bisnis" required>
                            @error('category')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Waktu Baca -->
                        <div class="mb-6">
                            <label for="read_time" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Estimasi Waktu Baca</label>
                            <input type="text" name="read_time" id="read_time" value="{{ old('read_time') }}" 
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: 4 Menit Baca" required>
                            @error('read_time')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Unggah Gambar Cover -->
                        <div class="mb-6" x-data="{ imagePreview: null }">
                            <label for="image" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Gambar Cover (Opsional)</label>
                            <div class="flex items-center space-x-6">
                                <div class="shrink-0">
                                    <template x-if="imagePreview">
                                        <img :src="imagePreview" class="h-20 w-32 object-cover rounded-xl shadow-sm border border-slate-200 dark:border-slate-700">
                                    </template>
                                    <template x-if="!imagePreview">
                                        <div class="h-20 w-32 rounded-xl bg-slate-50 dark:bg-slate-900 border-2 border-dashed border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-400">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    </template>
                                </div>
                                <label class="block flex-1">
                                    <span class="sr-only">Pilih Gambar</span>
                                    <input type="file" name="image" id="image" accept="image/*"
                                        @change="const file = $event.target.files[0]; if (file) { const reader = new FileReader(); reader.onload = (e) => { imagePreview = e.target.result; }; reader.readAsDataURL(file); }"
                                        class="block w-full text-sm text-slate-500 dark:text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-rose-50 dark:file:bg-rose-950/40 file:text-rose-700 dark:file:text-rose-300 hover:file:bg-rose-100 transition duration-150 cursor-pointer">
                                </label>
                            </div>
                            <p class="text-slate-400 dark:text-slate-500 text-xs mt-2 font-light">Disarankan format JPG, PNG, atau WebP rasio 16:9 (maks 2MB).</p>
                            @error('image')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Konten Artikel -->
                        <div class="mb-8">
                            <label for="content" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Isi Konten Artikel</label>
                            <textarea name="content" id="content" rows="12" 
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150"
                                placeholder="Tuliskan naskah artikel, panduan, atau wawasan secara terstruktur di sini..." required>{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex justify-end space-x-3 border-t border-slate-100 dark:border-slate-800/80 pt-6">
                            <a href="{{ route('admin.posts.index') }}" 
                                class="inline-flex items-center px-4 py-2 border border-slate-300 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm font-medium rounded-xl transition duration-150 ease-in-out">
                                Batal
                            </a>
                            <button type="submit" 
                                class="inline-flex items-center px-5 py-2.5 bg-rose-600 hover:bg-rose-700 text-white text-sm font-semibold rounded-xl shadow-md transition duration-150 ease-in-out">
                                Publikasikan Artikel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
