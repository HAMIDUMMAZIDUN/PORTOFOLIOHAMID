@extends('layouts.public')

@section('title', 'Paket Harga')

@section('content')
    <!-- Page Header -->
    <section class="py-20 bg-white dark:bg-[#0b0f19] border-b border-slate-200/60 dark:border-slate-800/80 text-center px-6">
        <div class="max-w-3xl mx-auto">
            <span class="text-premium-emerald text-xs font-bold uppercase tracking-widest block mb-3">Daftar Paket Harga</span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-premium-navy dark:text-white tracking-tight mb-4">Pilihan Paket Pembuatan Website & Desain</h1>
            <p class="text-slate-500 dark:text-slate-400 font-light text-sm md:text-base leading-relaxed">
                Pilihan paket fleksibel sesuai skala kebutuhan usaha Anda. Biaya jelas dan transparan, sudah termasuk domain & hosting tanpa biaya tersembunyi.
            </p>
        </div>
    </section>

    <!-- Pricing Grid -->
    <section class="py-20 px-6" x-data="{ activeTab: 'website' }">
        <div class="max-w-7xl mx-auto">
            <!-- Tabs Toggle (Main Categories) -->
            <div class="flex justify-center items-center mb-10 space-x-2 bg-slate-200/50 dark:bg-slate-800/60 p-1.5 rounded-2xl max-w-sm mx-auto">
                <button @click="activeTab = 'website'" 
                    :class="activeTab === 'website' ? 'bg-white dark:bg-[#0b0f19] text-premium-navy dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-premium-navy dark:hover:text-white'"
                    class="flex-1 py-3.5 text-xs font-bold rounded-xl transition duration-200">
                    Paket Website
                </button>
                <button @click="activeTab = 'desain'" 
                    :class="activeTab === 'desain' ? 'bg-white dark:bg-[#0b0f19] text-premium-navy dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-premium-navy dark:hover:text-white'"
                    class="flex-1 py-3.5 text-xs font-bold rounded-xl transition duration-200">
                    Paket Desain & Sosmed
                </button>
            </div>

            <!-- WEBSITE PACKAGES -->
            <div x-show="activeTab === 'website'" x-data="{ webSubTab: 'all' }">
                <!-- Sub Filter Tabs for Website Types -->
                <div class="flex justify-center flex-wrap gap-2 mb-16 max-w-2xl mx-auto">
                    <button @click="webSubTab = 'all'" 
                        :class="webSubTab === 'all' ? 'bg-premium-navy text-white dark:bg-emerald-600' : 'bg-slate-100 text-slate-600 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700'"
                        class="px-4 py-2.5 text-[11px] font-bold uppercase tracking-wider rounded-lg transition duration-150">
                        Semua Web
                    </button>
                    <button @click="webSubTab = 'profile'" 
                        :class="webSubTab === 'profile' ? 'bg-premium-navy text-white dark:bg-emerald-600' : 'bg-slate-100 text-slate-600 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700'"
                        class="px-4 py-2.5 text-[11px] font-bold uppercase tracking-wider rounded-lg transition duration-150">
                        Profil & Landing Page
                    </button>
                    <button @click="webSubTab = 'toko'" 
                        :class="webSubTab === 'toko' ? 'bg-premium-navy text-white dark:bg-emerald-600' : 'bg-slate-100 text-slate-600 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700'"
                        class="px-4 py-2.5 text-[11px] font-bold uppercase tracking-wider rounded-lg transition duration-150">
                        Toko Online (E-Commerce)
                    </button>
                    <button @click="webSubTab = 'custom'" 
                        :class="webSubTab === 'custom' ? 'bg-premium-navy text-white dark:bg-emerald-600' : 'bg-slate-100 text-slate-600 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700'"
                        class="px-4 py-2.5 text-[11px] font-bold uppercase tracking-wider rounded-lg transition duration-150">
                        Custom
                    </button>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($packages->whereIn('category', ['Profil & Landing Page', 'Toko Online', 'Custom']) as $pkg)
                        @php
                            $subTabKey = 'profile';
                            if ($pkg->category === 'Toko Online') {
                                $subTabKey = 'toko';
                            } elseif ($pkg->category === 'Custom') {
                                $subTabKey = 'custom';
                            }
                        @endphp
                        <div x-show="webSubTab === 'all' || webSubTab === '{{ $subTabKey }}'" 
                             class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border {{ $pkg->is_popular ? 'border-2 border-premium-navy dark:border-emerald-600/80 relative' : 'border-slate-200 dark:border-slate-850' }} shadow-sm flex flex-col justify-between hover:shadow-md transition">
                            @if($pkg->is_popular)
                                <span class="absolute -top-3 left-6 bg-premium-emerald text-white text-[9px] font-bold uppercase tracking-widest px-3 py-1 rounded-full shadow-sm">TERPOPULER</span>
                            @endif
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">{{ $pkg->category }}</span>
                                <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">{{ $pkg->name }}</h3>
                                <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">{{ $pkg->price }}</p>
                                <p class="text-[10px] text-slate-450 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Perpanjangan: {{ $pkg->renewal_price }}</p>
                                <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                                    @foreach(explode("\n", trim($pkg->features)) as $feature)
                                        @if(!empty(trim($feature)))
                                            <li class="flex items-center">
                                                <svg class="w-4 h-4 text-premium-emerald mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                                </svg> 
                                                <span>{{ $feature }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <a href="https://wa.me/6281214019947?text={{ urlencode($pkg->wa_text ?? 'Halo HA Creative, saya tertarik dengan paket ' . $pkg->name) }}" target="_blank"
                               class="block text-center py-3 {{ $pkg->is_popular ? 'bg-premium-emerald hover:bg-emerald-700' : 'bg-premium-navy dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700' }} text-white text-xs font-bold uppercase tracking-wider rounded-lg transition shadow-sm">
                                Order Paket {{ $pkg->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- DESAIN PACKAGES (Tab Ke-2) -->
            <div x-show="activeTab === 'desain'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" style="display: none;">
                @foreach($packages->where('category', 'Desain & Sosmed') as $pkg)
                    <div class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border {{ $pkg->is_popular ? 'border-2 border-premium-navy dark:border-emerald-600/80 relative' : 'border-slate-200 dark:border-slate-850' }} shadow-sm flex flex-col justify-between hover:shadow-md transition">
                        @if($pkg->is_popular)
                            <span class="absolute -top-3 left-6 bg-premium-emerald text-white text-[9px] font-bold uppercase tracking-widest px-3 py-1 rounded-full shadow-sm">POPULER</span>
                        @endif
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">{{ $pkg->category }}</span>
                            <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">{{ $pkg->name }}</h3>
                            <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">{{ $pkg->price }}</p>
                            <p class="text-[10px] text-slate-455 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">{{ $pkg->renewal_price }}</p>
                            <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                                @foreach(explode("\n", trim($pkg->features)) as $feature)
                                    @if(!empty(trim($feature)))
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-premium-emerald mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                            </svg> 
                                            <span>{{ $feature }}</span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <a href="https://wa.me/6281214019947?text={{ urlencode($pkg->wa_text ?? 'Halo HA Creative, saya tertarik dengan paket ' . $pkg->name) }}" target="_blank"
                           class="block text-center py-3 {{ $pkg->is_popular ? 'bg-premium-emerald hover:bg-emerald-700' : 'bg-premium-navy dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700' }} text-white text-xs font-bold uppercase tracking-wider rounded-lg transition shadow-sm">
                            Order Paket {{ $pkg->name }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
