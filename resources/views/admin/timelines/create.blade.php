<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.timelines.index') }}" class="inline-flex items-center text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 transition duration-150 ease-in-out">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 dark:text-white tracking-tight">
                {{ __('Tambah Milestone Studio') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-8 bg-slate-50/50 dark:bg-[#0b0f19] min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#0f1422] overflow-hidden shadow-sm rounded-2xl border border-slate-200/60 dark:border-slate-800/80">
                <div class="p-8 text-slate-900 dark:text-slate-100">
                    <form action="{{ route('admin.timelines.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Year -->
                            <div>
                                <label for="year" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Tahun / Periode</label>
                                <input type="text" id="year" name="year" value="{{ old('year') }}" required placeholder="Contoh: 2024 atau Awal 2025"
                                       class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150">
                                @error('year')
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
                            <label for="title" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Judul Milestone</label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}" required placeholder="Contoh: Memulai Karier Web Development"
                                   class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150">
                            @error('title')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Subtitle -->
                        <div>
                            <label for="subtitle" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Sorotan Singkat (Sub Judul)</label>
                            <input type="text" id="subtitle" name="subtitle" value="{{ old('subtitle') }}" placeholder="Contoh: Fokus Layanan Website & Identitas Visual"
                                   class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150">
                            @error('subtitle')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div>
                            <label for="content" class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-2">Cerita & Capaian Periode Ini</label>
                            <textarea id="content" name="content" rows="5" required placeholder="Tuliskan latar belakang fase ini, tantangan yang dilalui, atau tonggak keberhasilan studio..."
                                      class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm transition duration-150">{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-rose-600 text-xs mt-1.5 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-end space-x-3 border-t border-slate-100 dark:border-slate-800/80 pt-6">
                            <a href="{{ route('admin.timelines.index') }}" 
                               class="inline-flex items-center px-4 py-2 border border-slate-300 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm font-medium rounded-xl transition duration-150">
                                Batal
                            </a>
                            <button type="submit" 
                                    class="inline-flex items-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-md transition duration-150">
                                Simpan Milestone
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
