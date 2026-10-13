<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.packages.index') }}" class="inline-flex items-center text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 transition duration-150 ease-in-out">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 dark:text-white tracking-tight">
                {{ __('Tambah Paket Harga') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-8 bg-slate-50/50 dark:bg-[#0b0f19] min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#0f1422] overflow-hidden shadow-sm rounded-2xl border border-slate-200/60 dark:border-slate-800/80">
                <div class="p-8 text-slate-900 dark:text-slate-100">
                    <form action="{{ route('admin.packages.store') }}" method="POST">
                        @csrf

                        <!-- Nama Paket -->
                        <div class="mb-6">
                            <label for="name" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Nama Paket</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" 
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: Paket Landing Page UMKM, Website Bisnis, dll." required>
                            @error('name')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Kategori -->
                        <div class="mb-6">
                            <label for="category" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Kategori Layanan</label>
                            <select name="category" id="category" 
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" required>
                                <option value="Profil & Landing Page" {{ old('category') === 'Profil & Landing Page' ? 'selected' : '' }}>Profil & Landing Page</option>
                                <option value="Toko Online" {{ old('category') === 'Toko Online' ? 'selected' : '' }}>Toko Online (E-Commerce)</option>
                                <option value="Custom" {{ old('category') === 'Custom' ? 'selected' : '' }}>Custom Web Application</option>
                                <option value="Desain & Sosmed" {{ old('category') === 'Desain & Sosmed' ? 'selected' : '' }}>Desain & Manajemen Sosmed</option>
                            </select>
                            @error('category')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Harga -->
                        <div class="mb-6">
                            <label for="price" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Investasi Biaya Mulai</label>
                            <input type="text" name="price" id="price" value="{{ old('price') }}" 
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: Mulai Rp 550.000 atau Rp 2.500.000" required>
                            @error('price')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Biaya Perpanjangan -->
                        <div class="mb-6">
                            <label for="renewal_price" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Biaya Perpanjangan (Opsional)</label>
                            <input type="text" name="renewal_price" id="renewal_price" value="{{ old('renewal_price') }}" 
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: Perpanjangan domain & hosting Rp 650.000/tahun (atau Sekali Bayar)">
                            @error('renewal_price')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Fitur / Benefit -->
                        <div class="mb-6">
                            <label for="features" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Daftar Fitur Termasuk (1 baris per fitur)</label>
                            <textarea name="features" id="features" rows="6" 
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150"
                                placeholder="Desain responsif mobile & desktop&#10;Gratis domain .com & hosting 1 tahun&#10;Integrasi WhatsApp chat&#10;Optimasi SEO dasar&#10;Revisi hingga tuntas" required>{{ old('features') }}</textarea>
                            <p class="text-slate-400 dark:text-slate-500 text-xs mt-1.5">Tekan Enter setiap kali menuliskan fitur baru untuk ditampilkan sebagai poin ceklis.</p>
                            @error('features')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Pesan WhatsApp Custom (Opsional) -->
                        <div class="mb-6">
                            <label for="wa_text" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Teks Pesan WhatsApp Otomatis (Opsional)</label>
                            <input type="text" name="wa_text" id="wa_text" value="{{ old('wa_text') }}" 
                                class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150" 
                                placeholder="Contoh: Halo HA Creative, saya ingin konsultasi mengenai Paket Landing Page UMKM">
                            @error('wa_text')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Is Popular -->
                        <div class="mb-8 p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-slate-200 dark:border-slate-800">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="is_popular" value="1" class="rounded border-slate-300 dark:border-slate-700 text-emerald-600 shadow-sm focus:ring-emerald-500" {{ old('is_popular') ? 'checked' : '' }}>
                                <span class="ms-2.5 text-sm font-semibold text-slate-800 dark:text-slate-200">Tampilkan sebagai "Paket Rekomendasi" (Badge Populer)</span>
                            </label>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1 ml-6 font-light">Paket ini akan diberi penanda khusus agar lebih menonjol di halaman harga.</p>
                            @error('is_popular')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex justify-end space-x-3 border-t border-slate-100 dark:border-slate-800/80 pt-6">
                            <a href="{{ route('admin.packages.index') }}" 
                                class="inline-flex items-center px-4 py-2 border border-slate-300 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm font-medium rounded-xl transition duration-150 ease-in-out">
                                Batal
                            </a>
                            <button type="submit" 
                                class="inline-flex items-center px-5 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold rounded-xl shadow-md transition duration-150 ease-in-out">
                                Simpan Paket
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
