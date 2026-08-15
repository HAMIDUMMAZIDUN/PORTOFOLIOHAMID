<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.services.index') }}" class="inline-flex items-center text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tambah Layanan / Pilar') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100">
                <div class="p-8 text-gray-900">
                    <form action="{{ route('admin.services.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Category -->
                            <div>
                                <label for="category" class="block text-sm font-semibold text-gray-700">Kategori</label>
                                <select id="category" name="category" required 
                                        class="mt-1.5 block w-full rounded-lg border-gray-250 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm">
                                    <option value="Layanan" {{ old('category') === 'Layanan' ? 'selected' : '' }}>Layanan (Landing Page)</option>
                                    <option value="Sosmed" {{ old('category') === 'Sosmed' ? 'selected' : '' }}>Sosmed (Jasa Sosmed Page)</option>
                                    <option value="Pilar" {{ old('category') === 'Pilar' ? 'selected' : '' }}>Pilar (Pilar Tentang Kami)</option>
                                </select>
                                @error('category')
                                    <p class="text-rose-600 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Sorting Order -->
                            <div>
                                <label for="order" class="block text-sm font-semibold text-gray-700">Order / Urutan Tampil</label>
                                <input type="number" id="order" name="order" value="{{ old('order', 1) }}" required
                                       class="mt-1.5 block w-full rounded-lg border-gray-250 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm">
                                @error('order')
                                    <p class="text-rose-600 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Title -->
                        <div>
                            <label for="title" class="block text-sm font-semibold text-gray-700">Judul Layanan / Pilar</label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}" required placeholder="Contoh: Jasa Pembuatan Website"
                                   class="mt-1.5 block w-full rounded-lg border-gray-250 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm">
                            @error('title')
                                <p class="text-rose-600 text-xs mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Icon Selection -->
                        <div>
                            <label for="icon" class="block text-sm font-semibold text-gray-700">Icon</label>
                            <select id="icon" name="icon" required 
                                    class="mt-1.5 block w-full rounded-lg border-gray-250 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm">
                                <option value="code" {{ old('icon') === 'code' ? 'selected' : '' }}>Code (Website)</option>
                                <option value="palette" {{ old('icon') === 'palette' ? 'selected' : '' }}>Palette (Desain Grafis / UI/UX)</option>
                                <option value="calendar" {{ old('icon') === 'calendar' ? 'selected' : '' }}>Calendar (Management/Schedule)</option>
                                <option value="film" {{ old('icon') === 'film' ? 'selected' : '' }}>Film (Video Konten)</option>
                                <option value="chart" {{ old('icon') === 'chart' ? 'selected' : '' }}>Chart (Analitik/Iklan)</option>
                                <option value="camera" {{ old('icon') === 'camera' ? 'selected' : '' }}>Camera (Photography)</option>
                                <option value="chat" {{ old('icon') === 'chat' ? 'selected' : '' }}>Chat (Specialist/Komunikasi)</option>
                            </select>
                            @error('icon')
                                <p class="text-rose-600 text-xs mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div>
                            <label for="description" class="block text-sm font-semibold text-gray-700">Deskripsi Singkat</label>
                            <textarea id="description" name="description" rows="4" required placeholder="Masukkan penjelasan detail dari layanan..."
                                      class="mt-1.5 block w-full rounded-lg border-gray-250 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-rose-600 text-xs mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 border-t border-gray-100 pt-6">
                            <!-- CTA Text -->
                            <div>
                                <label for="cta_text" class="block text-sm font-semibold text-gray-700">Teks Tombol CTA (Opsional)</label>
                                <input type="text" id="cta_text" name="cta_text" value="{{ old('cta_text') }}" placeholder="Contoh: Pesan Website"
                                       class="mt-1.5 block w-full rounded-lg border-gray-250 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm">
                                @error('cta_text')
                                    <p class="text-rose-600 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- CTA Link -->
                            <div>
                                <label for="cta_link" class="block text-sm font-semibold text-gray-700">Link Tombol CTA (Opsional)</label>
                                <input type="text" id="cta_link" name="cta_link" value="{{ old('cta_link') }}" placeholder="Contoh: pricing atau WhatsApp URL"
                                       class="mt-1.5 block w-full rounded-lg border-gray-250 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm">
                                <span class="text-[10px] text-gray-400 mt-1 block">Untuk link lokal gunakan nama rute atau slug (contoh: `pricing`, `social-media`), untuk eksternal gunakan URL lengkap (contoh: `https://wa.me/...`).</span>
                                @error('cta_link')
                                    <p class="text-rose-600 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-end space-x-3 border-t border-gray-100 pt-6 mt-8">
                            <a href="{{ route('admin.services.index') }}" 
                               class="inline-flex items-center px-4 py-2 border border-gray-250 text-gray-750 text-sm font-semibold rounded-lg hover:bg-gray-50 transition duration-150">
                                Batal
                            </a>
                            <button type="submit" 
                                    class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-705 text-white text-sm font-semibold rounded-lg shadow-sm transition duration-150">
                                Simpan Layanan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
