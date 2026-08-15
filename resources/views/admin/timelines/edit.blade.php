<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.timelines.index') }}" class="inline-flex items-center text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Peristiwa Sejarah') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100">
                <div class="p-8 text-gray-900">
                    <form action="{{ route('admin.timelines.update', $timeline->id) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Year -->
                            <div>
                                <label for="year" class="block text-sm font-semibold text-gray-700">Tahun</label>
                                <input type="text" id="year" name="year" value="{{ old('year', $timeline->year) }}" required placeholder="Contoh: Tahun 2025 atau 2026 (Awal Tahun)"
                                       class="mt-1.5 block w-full rounded-lg border-gray-250 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm">
                                @error('year')
                                    <p class="text-rose-600 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Sorting Order -->
                            <div>
                                <label for="order" class="block text-sm font-semibold text-gray-700">Order / Urutan Tampil</label>
                                <input type="number" id="order" name="order" value="{{ old('order', $timeline->order) }}" required
                                       class="mt-1.5 block w-full rounded-lg border-gray-250 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm">
                                @error('order')
                                    <p class="text-rose-600 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Title -->
                        <div>
                            <label for="title" class="block text-sm font-semibold text-gray-700">Judul Peristiwa</label>
                            <input type="text" id="title" name="title" value="{{ old('title', $timeline->title) }}" required placeholder="Contoh: Inisiasi & Perumusan Ide"
                                   class="mt-1.5 block w-full rounded-lg border-gray-250 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm">
                            @error('title')
                                <p class="text-rose-600 text-xs mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Subtitle -->
                        <div>
                            <label for="subtitle" class="block text-sm font-semibold text-gray-700">Sub Judul / Keterangan Tambahan</label>
                            <input type="text" id="subtitle" name="subtitle" value="{{ old('subtitle', $timeline->subtitle) }}" placeholder="Contoh: Pengusulan Model Kolaborasi Agensi"
                                   class="mt-1.5 block w-full rounded-lg border-gray-250 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm">
                            @error('subtitle')
                                <p class="text-rose-600 text-xs mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div>
                            <label for="content" class="block text-sm font-semibold text-gray-700">Isi Peristiwa Sejarah</label>
                            <textarea id="content" name="content" rows="6" required placeholder="Masukkan penjelasan kronologis peristiwa sejarah secara lengkap..."
                                      class="mt-1.5 block w-full rounded-lg border-gray-250 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm">{{ old('content', $timeline->content) }}</textarea>
                            @error('content')
                                <p class="text-rose-600 text-xs mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-end space-x-3 border-t border-gray-100 pt-6 mt-8">
                            <a href="{{ route('admin.timelines.index') }}" 
                               class="inline-flex items-center px-4 py-2 border border-gray-250 text-gray-750 text-sm font-semibold rounded-lg hover:bg-gray-50 transition duration-150">
                                Batal
                            </a>
                            <button type="submit" 
                                    class="inline-flex items-center px-4 py-2 bg-emerald-600 hover:bg-emerald-705 text-white text-sm font-semibold rounded-lg shadow-sm transition duration-150">
                                Perbarui Peristiwa
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
