<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.services.index') }}" class="inline-flex items-center text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 transition duration-150 ease-in-out">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 dark:text-white tracking-tight">
                {{ __('Tambah Layanan / Pilar Studio') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-8 bg-slate-50/50 dark:bg-[#0b0f19] min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#0f1422] overflow-hidden shadow-sm rounded-2xl border border-slate-200/60 dark:border-slate-800/80">
                <div class="p-8 text-slate-900 dark:text-slate-100">
                    <form action="{{ route('admin.services.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Category -->
                            <div>
                                <label for="category" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Penempatan Halaman</label>
                                <select id="category" name="category" required 
                                        class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150">
                                    <option value="Layanan" {{ old('category') === 'Layanan' ? 'selected' : '' }}>Layanan Beranda (Landing Page)</option>
                                    <option value="Sosmed" {{ old('category') === 'Sosmed' ? 'selected' : '' }}>Layanan Media Sosial (Halaman Sosmed)</option>
                                    <option value="Pilar" {{ old('category') === 'Pilar' ? 'selected' : '' }}>Pilar Studio (Halaman Tentang Kami)</option>
                                </select>
                                @error('category')
                                    <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Sorting Order -->
                            <div>
                                <label for="order" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Urutan Tampil (Nomor Urut)</label>
                                <input type="number" id="order" name="order" value="{{ old('order', 1) }}" required
                                       class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150">
                                @error('order')
                                    <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Title -->
                        <div>
                            <label for="title" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Judul Layanan / Pilar</label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}" required placeholder="Contoh: Pembuatan Website Bisnis & Portofolio"
                                   class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150">
                            @error('title')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Icon Selection -->
                        <div>
                            <label for="icon" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Ikon Representasi</label>
                            <select id="icon" name="icon" required 
                                    class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150">
                                <option value="code" {{ old('icon') === 'code' ? 'selected' : '' }}>Code (Website / Development)</option>
                                <option value="palette" {{ old('icon') === 'palette' ? 'selected' : '' }}>Palette (Desain Grafis & UI/UX)</option>
                                <option value="calendar" {{ old('icon') === 'calendar' ? 'selected' : '' }}>Calendar (Perencanaan Konten / Jadwal)</option>
                                <option value="film" {{ old('icon') === 'film' ? 'selected' : '' }}>Film (Video Editing & Reels)</option>
                                <option value="chart" {{ old('icon') === 'chart' ? 'selected' : '' }}>Chart (Analitik & Performa Iklan)</option>
                                <option value="camera" {{ old('icon') === 'camera' ? 'selected' : '' }}>Camera (Dokumentasi Visual / Foto)</option>
                                <option value="chat" {{ old('icon') === 'chat' ? 'selected' : '' }}>Chat (Konsultasi & Komunikasi)</option>
                            </select>
                            @error('icon')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div>
                            <label for="description" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Deskripsi Layanan / Penjelasan</label>
                            <textarea id="description" name="description" rows="4" required placeholder="Tuliskan uraian jelas tentang cakupan layanan ini untuk klien..."
                                      class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 border-t border-slate-100 dark:border-slate-800/80 pt-6">
                            <!-- CTA Text -->
                            <div>
                                <label for="cta_text" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Teks Tombol Aksi (Opsional)</label>
                                <input type="text" id="cta_text" name="cta_text" value="{{ old('cta_text') }}" placeholder="Contoh: Konsultasi Website"
                                       class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150">
                                @error('cta_text')
                                    <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- CTA Link -->
                            <div>
                                <label for="cta_link" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Tautan Aksi (Opsional)</label>
                                <input type="text" id="cta_link" name="cta_link" value="{{ old('cta_link') }}" placeholder="Contoh: pricing, contact, atau https://wa.me/..."
                                       class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150">
                                <span class="text-[11px] text-slate-400 dark:text-slate-500 mt-1.5 block">Gunakan nama halaman (contoh: `pricing`, `portfolio`) atau URL lengkap WhatsApp.</span>
                                @error('cta_link')
                                    <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-end space-x-3 border-t border-slate-100 dark:border-slate-800/80 pt-6 mt-8">
                            <a href="{{ route('admin.services.index') }}" 
                               class="inline-flex items-center px-4 py-2 border border-slate-300 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm font-medium rounded-xl transition duration-150">
                                Batal
                            </a>
                            <button type="submit" 
                                    class="inline-flex items-center px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-xl shadow-md transition duration-150">
                                Simpan Layanan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
