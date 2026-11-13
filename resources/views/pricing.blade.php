@extends('layouts.public')

@section('title', 'Paket Harga')

@section('content')
    <!-- Page Header (Mini Hero Dark - Yoggui Style) -->
    <section class="hero-dark relative isolate pt-32 pb-20 px-6 rounded-b-[2.5rem] sm:rounded-b-[3.5rem] text-white text-center overflow-hidden">
        <div class="max-w-3xl mx-auto relative z-10">
            <span class="eyebrow mb-4">Investasi Transparan</span>
            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">
                Pilihan Paket <span class="text-gradient">Website & Desain</span>
            </h1>
            <p class="text-white/70 font-light text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                Pilihan fleksibel sesuai skala kebutuhan bisnis Anda. Biaya jelas dan transparan, sudah mencakup domain, hosting, serta garansi sistem.
            </p>
        </div>
    </section>

    <!-- Pricing Grid -->
    <section class="py-20 px-6 bg-slate-50 dark:bg-[#020617]" x-data="{ activeTab: 'website' }">
        <div class="max-w-7xl mx-auto">
            <!-- Tabs Toggle (Main Categories) -->
            <div class="flex justify-center items-center mb-12 space-x-2 bg-slate-200/60 dark:bg-white/5 p-1.5 rounded-2xl max-w-sm mx-auto border border-slate-300/50 dark:border-white/10">
                <button @click="activeTab = 'website'" 
                    :class="activeTab === 'website' ? 'bg-white dark:bg-white/15 text-slate-900 dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'"
                    class="flex-1 py-3 text-xs font-bold rounded-xl transition duration-200">
                    Paket Website
                </button>
                <button @click="activeTab = 'desain'" 
                    :class="activeTab === 'desain' ? 'bg-white dark:bg-white/15 text-slate-900 dark:text-white shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'"
                    class="flex-1 py-3 text-xs font-bold rounded-xl transition duration-200">
                    Paket Desain & Sosmed
                </button>
            </div>

            <!-- WEBSITE PACKAGES -->
            <div x-show="activeTab === 'website'" x-data="{ webSubTab: 'all' }">
                <!-- Sub Filter Tabs for Website Types -->
                <div class="flex justify-center flex-wrap gap-2 mb-14 max-w-2xl mx-auto">
                    <button @click="webSubTab = 'all'" 
                        :class="webSubTab === 'all' ? 'bg-slate-900 dark:bg-brand-600 text-white' : 'bg-white dark:bg-white/5 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/10 border border-slate-200 dark:border-white/10'"
                        class="px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-full transition duration-150">
                        Semua Web
                    </button>
                    <button @click="webSubTab = 'profile'" 
                        :class="webSubTab === 'profile' ? 'bg-slate-900 dark:bg-brand-600 text-white' : 'bg-white dark:bg-white/5 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/10 border border-slate-200 dark:border-white/10'"
                        class="px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-full transition duration-150">
                        Profil & Landing Page
                    </button>
                    <button @click="webSubTab = 'toko'" 
                        :class="webSubTab === 'toko' ? 'bg-slate-900 dark:bg-brand-600 text-white' : 'bg-white dark:bg-white/5 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/10 border border-slate-200 dark:border-white/10'"
                        class="px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-full transition duration-150">
                        Toko Online
                    </button>
                    <button @click="webSubTab = 'custom'" 
                        :class="webSubTab === 'custom' ? 'bg-slate-900 dark:bg-brand-600 text-white' : 'bg-white dark:bg-white/5 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/10 border border-slate-200 dark:border-white/10'"
                        class="px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-full transition duration-150">
                        Custom App
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
                             class="p-8 rounded-3xl bg-white dark:bg-[#0b1120] border {{ $pkg->is_popular ? 'border-2 border-brand-500 shadow-xl relative' : 'border-slate-200/80 dark:border-white/10 shadow-sm' }} flex flex-col justify-between hover:shadow-lg transition group">
                            
                            @if($pkg->is_popular)
                                <span class="absolute -top-3.5 left-8 bg-gradient-to-r from-blue-600 to-violet-600 text-white text-[10px] font-bold uppercase tracking-widest px-3.5 py-1 rounded-full shadow-md">
                                    PALING POPULER
                                </span>
                            @endif

                            <div>
                                <span class="text-xs font-mono font-bold uppercase tracking-wider text-sky-400 block mb-1">{{ $pkg->category }}</span>
                                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">{{ $pkg->name }}</h3>
                                
                                <div class="mt-4 mb-2">
                                    <span class="text-3xl font-extrabold text-slate-900 dark:text-white">{{ $pkg->price }}</span>
                                </div>
                                <p class="text-[11px] text-slate-400 dark:text-slate-500 border-b border-slate-100 dark:border-white/5 pb-4">
                                    Perpanjangan: {{ $pkg->renewal_price ?: 'Sesuai ketentuan domain/hosting' }}
                                </p>

                                <ul class="my-6 space-y-3 text-xs text-slate-600 dark:text-slate-300 font-light">
                                    @foreach(explode("\n", trim($pkg->features)) as $feature)
                                        @if(!empty(trim($feature)))
                                            <li class="flex items-start">
                                                <i data-lucide="check" class="w-4 h-4 text-emerald-500 mr-2.5 flex-shrink-0 mt-0.5"></i>
                                                <span>{{ $feature }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>

                            <a href="https://wa.me/6281214019947?text={{ urlencode($pkg->wa_text ?? 'Halo Hamid, saya tertarik dengan paket ' . $pkg->name) }}" target="_blank"
                               class="w-full text-center py-3.5 px-6 rounded-full font-bold text-xs uppercase tracking-wider transition shadow-sm {{ $pkg->is_popular ? 'bg-gradient-to-r from-blue-600 to-violet-600 hover:from-blue-700 hover:to-violet-700 text-white shadow-brand-500/25' : 'bg-slate-900 dark:bg-white/10 hover:bg-slate-800 dark:hover:bg-white/20 text-white' }}">
                                Pilih Paket {{ $pkg->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- DESIGN & SOSMED PACKAGES -->
            <div x-show="activeTab === 'desain'" style="display: none;">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($packages->whereNotIn('category', ['Profil & Landing Page', 'Toko Online', 'Custom']) as $pkg)
                        <div class="p-8 rounded-3xl bg-white dark:bg-[#0b1120] border {{ $pkg->is_popular ? 'border-2 border-brand-500 shadow-xl relative' : 'border-slate-200/80 dark:border-white/10 shadow-sm' }} flex flex-col justify-between hover:shadow-lg transition group">
                            @if($pkg->is_popular)
                                <span class="absolute -top-3.5 left-8 bg-gradient-to-r from-blue-600 to-violet-600 text-white text-[10px] font-bold uppercase tracking-widest px-3.5 py-1 rounded-full shadow-md">
                                    REKOMENDASI
                                </span>
                            @endif

                            <div>
                                <span class="text-xs font-mono font-bold uppercase tracking-wider text-sky-400 block mb-1">{{ $pkg->category }}</span>
                                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">{{ $pkg->name }}</h3>
                                
                                <div class="mt-4 mb-2">
                                    <span class="text-3xl font-extrabold text-slate-900 dark:text-white">{{ $pkg->price }}</span>
                                </div>
                                <p class="text-[11px] text-slate-400 dark:text-slate-500 border-b border-slate-100 dark:border-white/5 pb-4">
                                    {{ $pkg->renewal_price ?: 'Paket Kontrak / Sekali Bayar' }}
                                </p>

                                <ul class="my-6 space-y-3 text-xs text-slate-600 dark:text-slate-300 font-light">
                                    @foreach(explode("\n", trim($pkg->features)) as $feature)
                                        @if(!empty(trim($feature)))
                                            <li class="flex items-start">
                                                <i data-lucide="check" class="w-4 h-4 text-emerald-500 mr-2.5 flex-shrink-0 mt-0.5"></i>
                                                <span>{{ $feature }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>

                            <a href="https://wa.me/6281214019947?text={{ urlencode($pkg->wa_text ?? 'Halo Hamid, saya tertarik dengan paket desain ' . $pkg->name) }}" target="_blank"
                               class="w-full text-center py-3.5 px-6 rounded-full font-bold text-xs uppercase tracking-wider transition shadow-sm {{ $pkg->is_popular ? 'bg-gradient-to-r from-blue-600 to-violet-600 hover:from-blue-700 hover:to-violet-700 text-white' : 'bg-slate-900 dark:bg-white/10 hover:bg-slate-800 dark:hover:bg-white/20 text-white' }}">
                                Konsultasi Paket
                            </a>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-16 bg-white dark:bg-[#0b1120] rounded-3xl border border-slate-200 dark:border-white/10">
                            <p class="text-slate-400 font-light">Paket desain dan sosmed dapat dikustomisasi sesuai kebutuhan Anda.</p>
                            <a href="https://wa.me/6281214019947?text=Halo%20Hamid,%20saya%20ingin%20tanya%20paket%20desain%20grafis" class="inline-block mt-4 text-brand-600 font-bold hover:underline">
                                Tanya Paket Custom via WA &rarr;
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>

        </div>
    </section>
@endsection
