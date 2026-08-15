<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Layanan & Pilar') }}
            </h2>
            <a href="{{ route('admin.services.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-705 text-white text-xs font-semibold rounded-lg shadow-sm transition duration-150 ease-in-out">
                + Tambah Layanan/Pilar
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Alert Success -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-50 border border-emerald-250 text-emerald-800 rounded-xl flex items-center">
                    <svg class="w-5 h-5 mr-3 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm font-semibold">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-100 text-left text-sm">
                        <thead class="bg-gray-50 text-gray-500 uppercase text-[10px] tracking-wider font-bold">
                            <tr>
                                <th class="px-6 py-4">Order</th>
                                <th class="px-6 py-4">Kategori</th>
                                <th class="px-6 py-4">Judul Layanan</th>
                                <th class="px-6 py-4">Icon</th>
                                <th class="px-6 py-4">CTA Link</th>
                                <th class="px-6 py-4 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-gray-700">
                            @forelse($services as $service)
                                <tr class="hover:bg-gray-50/50 transition">
                                    <td class="px-6 py-4 font-mono text-xs text-gray-400">
                                        {{ $service->order }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($service->category === 'Layanan')
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-100">Layanan Landing</span>
                                        @elseif($service->category === 'Sosmed')
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-100">Sosmed Page</span>
                                        @else
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-purple-50 text-purple-700 border border-purple-100">Pilar Tentang</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 truncate max-w-xs">
                                        {{ $service->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 rounded bg-gray-100 font-mono text-xs text-gray-600">{{ $service->icon }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-xs text-gray-500 max-w-xs truncate">
                                        {{ $service->cta_link ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4 text-right space-x-2 whitespace-nowrap">
                                        <a href="{{ route('admin.services.edit', $service->id) }}" class="inline-flex items-center p-1 text-blue-600 hover:text-blue-900" title="Edit">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                        </a>
                                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-1 text-rose-600 hover:text-rose-900" title="Hapus">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-10 text-center text-gray-400 font-light">
                                        Belum ada data layanan. Klik "+ Tambah Layanan/Pilar" untuk menambahkan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-6">
                        {{ $services->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
