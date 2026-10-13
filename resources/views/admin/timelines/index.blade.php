<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 dark:text-white tracking-tight">
                {{ __('Kelola Milestone Studio') }}
            </h2>
            <a href="{{ route('admin.timelines.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-md transition duration-150 ease-in-out">
                <svg class="w-5 h-5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Tambah Milestone
            </a>
        </div>
    </x-slot>

    <div class="py-8 bg-slate-50/50 dark:bg-[#0b0f19] min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Alert Success -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-50 dark:bg-emerald-950/30 border-l-4 border-emerald-500 rounded-r-xl flex items-center shadow-sm">
                    <svg class="w-6 h-6 mr-3 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm font-medium text-emerald-800 dark:text-emerald-300">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white dark:bg-[#0f1422] overflow-hidden shadow-sm rounded-2xl border border-slate-200/60 dark:border-slate-800/80">
                <div class="p-6 text-slate-900 dark:text-slate-100">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-800 text-left text-sm">
                            <thead class="bg-slate-50 dark:bg-slate-850/50 text-slate-500 dark:text-slate-400 uppercase text-xs tracking-wider font-semibold">
                                <tr>
                                    <th class="px-6 py-3.5">Urutan</th>
                                    <th class="px-6 py-3.5">Tahun / Periode</th>
                                    <th class="px-6 py-3.5">Judul Milestone</th>
                                    <th class="px-6 py-3.5">Sorotan Singkat</th>
                                    <th class="px-6 py-3.5">Cerita & Capaian</th>
                                    <th class="px-6 py-3.5 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-[#0f1422] divide-y divide-slate-100 dark:divide-slate-800/80">
                                @forelse($timelines as $timeline)
                                    <tr class="hover:bg-slate-50/70 dark:hover:bg-slate-800/30 transition duration-100">
                                        <td class="px-6 py-4 font-mono text-xs text-slate-400 dark:text-slate-500 font-semibold">
                                            #{{ $timeline->order }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-indigo-50 dark:bg-indigo-950/40 text-indigo-700 dark:text-indigo-300 border border-indigo-200 dark:border-indigo-900">
                                                {{ $timeline->year }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 font-bold text-slate-900 dark:text-white max-w-xs">
                                            {{ $timeline->title }}
                                        </td>
                                        <td class="px-6 py-4 text-xs text-slate-500 dark:text-slate-400 max-w-xs">
                                            {{ $timeline->subtitle ?? '-' }}
                                        </td>
                                        <td class="px-6 py-4 text-xs text-slate-600 dark:text-slate-300 font-light max-w-md line-clamp-2 mt-2">
                                            {{ $timeline->content }}
                                        </td>
                                        <td class="px-6 py-4 text-center whitespace-nowrap">
                                            <div class="flex items-center justify-center space-x-3">
                                                <a href="{{ route('admin.timelines.edit', $timeline->id) }}" class="p-1.5 text-slate-500 dark:text-slate-400 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" title="Edit Milestone">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                                </a>
                                                <form action="{{ route('admin.timelines.destroy', $timeline->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus milestone ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="p-1.5 text-slate-500 dark:text-slate-400 hover:text-rose-600 dark:hover:text-rose-400 hover:bg-rose-50 dark:hover:bg-rose-950/30 rounded-lg transition-colors" title="Hapus Milestone">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-12 text-center text-slate-400 dark:text-slate-500 font-light">
                                            Belum ada milestone perjalanan studio. Klik "+ Tambah Milestone" untuk mencatat tahapan baru.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6">
                        {{ $timelines->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
