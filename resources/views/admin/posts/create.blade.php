<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.posts.index') }}" class="inline-flex items-center text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tambah Artikel Blog') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-100">
                <div class="p-8 text-gray-900">
                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Judul Artikel -->
                        <div class="mb-6">
                            <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Judul Artikel</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}" 
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Masukkan judul artikel" required>
                            @error('title')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Kategori -->
                        <div class="mb-6">
                            <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">Kategori</label>
                            <input type="text" name="category" id="category" value="{{ old('category') }}" 
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: Google Ads, SEO Optimization, Email Marketing, dll." required>
                            @error('category')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Waktu Baca -->
                        <div class="mb-6">
                            <label for="read_time" class="block text-sm font-semibold text-gray-700 mb-2">Estimasi Waktu Baca</label>
                            <input type="text" name="read_time" id="read_time" value="{{ old('read_time') }}" 
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: 5 Menit Baca" required>
                            @error('read_time')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Unggah Gambar Cover -->
                        <div class="mb-6" x-data="{ imagePreview: null }">
                            <label for="image" class="block text-sm font-semibold text-gray-700 mb-2">Gambar Cover (Opsional)</label>
                            <div class="flex items-center space-x-6">
                                <div class="shrink-0">
                                    <template x-if="imagePreview">
                                        <img :src="imagePreview" class="h-20 w-32 object-cover rounded-lg shadow-sm border border-gray-200">
                                    </template>
                                    <template x-if="!imagePreview">
                                        <div class="h-20 w-32 rounded-lg bg-gray-55 border-2 border-dashed border-gray-200 flex items-center justify-center text-gray-400">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    </template>
                                </div>
                                <label class="block">
                                    <span class="sr-only">Pilih Gambar</span>
                                    <input type="file" name="image" id="image" accept="image/*"
                                        @change="const file = $event.target.files[0]; if (file) { const reader = new FileReader(); reader.onload = (e) => { imagePreview = e.target.result; }; reader.readAsDataURL(file); }"
                                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition duration-150 cursor-pointer">
                                </label>
                            </div>
                            <p class="text-gray-400 text-xs mt-2">Format: JPG, JPEG, PNG, WEBP, atau SVG. Max 2MB.</p>
                            @error('image')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Konten Artikel -->
                        <div class="mb-8">
                            <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">Konten Lengkap</label>
                            <textarea name="content" id="content" rows="12" 
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150"
                                placeholder="Tulis isi konten artikel di sini..." required>{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex justify-end space-x-3 border-t border-gray-100 pt-6">
                            <a href="{{ route('admin.posts.index') }}" 
                                class="inline-flex items-center px-4 py-2 border border-gray-300 hover:border-gray-400 text-gray-700 text-sm font-medium rounded-lg transition duration-150 ease-in-out">
                                Batal
                            </a>
                            <button type="submit" 
                                class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-750 text-white text-sm font-semibold rounded-lg shadow-sm transition duration-150 ease-in-out">
                                Terbitkan Artikel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
