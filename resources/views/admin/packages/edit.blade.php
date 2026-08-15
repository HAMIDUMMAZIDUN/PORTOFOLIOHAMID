<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.packages.index') }}" class="inline-flex items-center text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Paket Harga') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-100">
                <div class="p-8 text-gray-900">
                    <form action="{{ route('admin.packages.update', $package->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Nama Paket -->
                        <div class="mb-6">
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama Paket</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $package->name) }}" 
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: Paket Hemat, Toko Bisnis, dll." required>
                            @error('name')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Kategori -->
                        <div class="mb-6">
                            <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">Kategori</label>
                            <select name="category" id="category" 
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" required>
                                <option value="Profil & Landing Page" {{ old('category', $package->category) === 'Profil & Landing Page' ? 'selected' : '' }}>Profil & Landing Page</option>
                                <option value="Toko Online" {{ old('category', $package->category) === 'Toko Online' ? 'selected' : '' }}>Toko Online</option>
                                <option value="Custom" {{ old('category', $package->category) === 'Custom' ? 'selected' : '' }}>Custom</option>
                                <option value="Desain & Sosmed" {{ old('category', $package->category) === 'Desain & Sosmed' ? 'selected' : '' }}>Desain & Sosmed</option>
                            </select>
                            @error('category')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Harga -->
                        <div class="mb-6">
                            <label for="price" class="block text-sm font-semibold text-gray-700 mb-2">Harga</label>
                            <input type="text" name="price" id="price" value="{{ old('price', $package->price) }}" 
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: Rp 525.000 atau Rp. Call Us" required>
                            @error('price')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Biaya Perpanjangan -->
                        <div class="mb-6">
                            <label for="renewal_price" class="block text-sm font-semibold text-gray-700 mb-2">Biaya Perpanjangan</label>
                            <input type="text" name="renewal_price" id="renewal_price" value="{{ old('renewal_price', $package->renewal_price) }}" 
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: Biaya tahun berikutnya Rp 700.000 atau Sekali Bayar" required>
                            @error('renewal_price')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Fitur / Benefit -->
                        <div class="mb-6">
                            <label for="features" class="block text-sm font-semibold text-gray-700 mb-2">Fitur (Satu fitur per baris)</label>
                            <textarea name="features" id="features" rows="6" 
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150"
                                placeholder="1 Halaman Landing Page&#10;Free Domain .com&#10;Aktif 1 Tahun&#10;Basic Landing Page Design" required>{{ old('features', $package->features) }}</textarea>
                            <p class="text-gray-400 text-xs mt-1.5">Tekan Enter untuk membuat baris baru bagi setiap fitur.</p>
                            @error('features')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Pesan WhatsApp Custom (Opsional) -->
                        <div class="mb-6">
                            <label for="wa_text" class="block text-sm font-semibold text-gray-700 mb-2">Custom Teks WhatsApp (Opsional)</label>
                            <input type="text" name="wa_text" id="wa_text" value="{{ old('wa_text', $package->wa_text) }}" 
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: Halo HA Creative, saya tertarik dengan Paket Hemat">
                            @error('wa_text')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Is Popular -->
                        <div class="mb-8">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="is_popular" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('is_popular', $package->is_popular) ? 'checked' : '' }}>
                                <span class="ms-2.5 text-sm font-semibold text-gray-700">Tampilkan badge "TERPOPULER" / Unggulan</span>
                            </label>
                            @error('is_popular')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex justify-end space-x-3 border-t border-gray-100 pt-6">
                            <a href="{{ route('admin.packages.index') }}" 
                                class="inline-flex items-center px-4 py-2 border border-gray-300 hover:border-gray-400 text-gray-700 text-sm font-medium rounded-lg transition duration-150 ease-in-out">
                                Batal
                            </a>
                            <button type="submit" 
                                class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-755 text-white text-sm font-semibold rounded-lg shadow-sm transition duration-150 ease-in-out">
                                Perbarui Paket
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
