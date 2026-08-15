<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.packages.index') }}" class="inline-flex items-center text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detail Paket Harga') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-100">
                <div class="p-8 text-gray-900">
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-gray-900">{{ $package->name }}</h3>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800 border border-slate-200 mt-2">
                            {{ $package->category }}
                        </span>
                    </div>

                    <div class="grid grid-cols-2 gap-6 border-t border-b border-gray-100 py-6 mb-6">
                        <div>
                            <span class="text-xs font-semibold text-gray-400 uppercase">Harga</span>
                            <p class="text-lg font-bold text-gray-900 mt-1">{{ $package->price }}</p>
                        </div>
                        <div>
                            <span class="text-xs font-semibold text-gray-400 uppercase">Biaya Perpanjangan</span>
                            <p class="text-lg font-semibold text-gray-700 mt-1">{{ $package->renewal_price }}</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <span class="text-xs font-semibold text-gray-400 uppercase">Fitur</span>
                        <ul class="mt-3 space-y-2.5">
                            @foreach(explode("\n", trim($package->features)) as $feature)
                                @if(!empty(trim($feature)))
                                    <li class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-emerald-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        {{ $feature }}
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>

                    <div class="mb-8">
                        <span class="text-xs font-semibold text-gray-400 uppercase">WhatsApp Teks</span>
                        <p class="text-sm text-gray-650 bg-slate-50 p-4 rounded-lg mt-2 font-mono break-all">{{ $package->wa_text ?? '-' }}</p>
                    </div>

                    <div class="flex justify-end space-x-3 border-t border-gray-100 pt-6">
                        <a href="{{ route('admin.packages.edit', $package->id) }}" 
                            class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-lg shadow-sm transition duration-150 ease-in-out">
                            Edit Paket
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
