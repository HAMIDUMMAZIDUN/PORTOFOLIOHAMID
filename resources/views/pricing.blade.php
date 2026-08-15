@extends('layouts.public')

@section('title', 'Paket Harga')

@section('content')
    <!-- Page Header -->
    <section class="py-20 bg-white dark:bg-[#0b0f19] border-b border-slate-200/60 dark:border-slate-800/80 text-center px-6">
        <div class="max-w-3xl mx-auto">
            <span class="text-premium-emerald text-xs font-bold uppercase tracking-widest block mb-3">Daftar Paket Lengkap</span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-premium-navy dark:text-white tracking-tight mb-4">Investasikan Bisnis Anda ke Ranah Digital</h1>
            <p class="text-slate-500 dark:text-slate-400 font-light text-sm md:text-base leading-relaxed">
                Pilih paket pembuatan website atau desain yang paling sesuai dengan skala usaha Anda. Transparan, bergaransi, dan tanpa biaya tambahan yang tersembunyi.
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
                    <!-- 1. Paket Hemat -->
                    <div x-show="webSubTab === 'all' || webSubTab === 'profile'" 
                         class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Rekomendasi UMKM / Yayasan</span>
                            <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">Paket Hemat</h3>
                            <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp 525.000</p>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Biaya tahun berikutnya Rp 700.000</p>
                            <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 1 Halaman Landing Page</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Domain .com</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Aktif 1 Tahun</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Basic Landing Page Design</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Basic Copy Writing</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Akses Dashboard Website</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Tombol WhatsApp & Galeri</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Integrasi Sosial Media</li>
                            </ul>
                        </div>
                        <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Website%20Hemat" target="_blank"
                           class="block text-center py-3 bg-premium-navy dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                            Order Paket Hemat
                        </a>
                    </div>

                    <!-- 2. Paket UMKM -->
                    <div x-show="webSubTab === 'all' || webSubTab === 'profile'" 
                         class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Katalog UMKM Lebih Lengkap</span>
                            <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">Paket UMKM</h3>
                            <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp 1.000.000</p>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Biaya tahun berikutnya Rp 700.000</p>
                            <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 3 Halaman Website</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Domain .com</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Basic Web Design</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Advanced Copy Writing</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Analytic Traffic Visitor</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 1 Email Domain khusus</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> SEO Optimization (Keyword & Page)</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Google Maps & Tombol WA</li>
                            </ul>
                        </div>
                        <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Website%20UMKM" target="_blank"
                           class="block text-center py-3 bg-premium-navy dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                            Order Paket UMKM
                        </a>
                    </div>

                    <!-- 3. Paket Website Untung -->
                    <div x-show="webSubTab === 'all' || webSubTab === 'profile'" 
                         class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">UMKM Fokus Branding Produk</span>
                            <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">Website Untung</h3>
                            <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp 1.500.000</p>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Biaya tahun berikutnya Rp 800.000</p>
                            <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 5 Halaman Website</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Domain .com</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Shared Hosting & Basic Design</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Logo Design (Basic)</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Advanced Copy Writing</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> SEO Optimization (Keyword & Page)</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 1 Email Domain & Traffic Analytics</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Video Panduan Penggunaan Web</li>
                            </ul>
                        </div>
                        <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Website%20Untung" target="_blank"
                           class="block text-center py-3 bg-premium-navy dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                            Order Paket Untung
                        </a>
                    </div>

                    <!-- 4. Paket Bisnis -->
                    <div x-show="webSubTab === 'all' || webSubTab === 'profile'" 
                         class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Profil Bisnis, Portal Berita, Yayasan</span>
                            <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">Paket Bisnis</h3>
                            <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp 2.525.000</p>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Biaya tahun berikutnya Rp 1.000.000</p>
                            <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 10 Halaman Website</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Domain .com .id .org .or.id</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Custom Web Design & Premium Layout</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Logo Design & Copy Writing</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> SEO Optimization & Traffic Analytics</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Setting 5 Email Domain Khusus</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 3 Artikel / Postingan Blog Awal</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Video Modul Panduan Update Konten</li>
                            </ul>
                        </div>
                        <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Website%20Bisnis" target="_blank"
                           class="block text-center py-3 bg-premium-navy dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                            Order Paket Bisnis
                        </a>
                    </div>

                    <!-- 5. Paket Bisnis Plus (POPULER / FEATURED) -->
                    <div x-show="webSubTab === 'all' || webSubTab === 'profile'" 
                         class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border-2 border-premium-navy dark:border-slate-750 shadow-md flex flex-col justify-between hover:shadow-lg transition relative">
                        <span class="absolute -top-3 left-6 bg-premium-emerald text-white text-[9px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">TERPOPULER</span>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-premium-navy dark:text-slate-350">Company Profile Skala Besar</span>
                            <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">Bisnis Plus</h3>
                            <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp 5.000.000</p>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Biaya tahun berikutnya Rp 2.000.000</p>
                            <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 20 Halaman Website</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Domain .com .id .org .or.id</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Dedicated Hosting (Performa Cepat)</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Custom Design + Free Logo</li>
                                <li class="flex items-center font-semibold text-premium-emerald dark:text-emerald-400"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> *Setting Awal Google Ads</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Akses Panel Hosting & Dashboard</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 6 Artikel Blog & SEO Optimization</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Setting 5 Email & Video Modul</li>
                            </ul>
                        </div>
                        <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Website%20Bisnis%20Plus" target="_blank"
                           class="block text-center py-3 bg-premium-emerald hover:bg-emerald-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition shadow-md">
                            Order Bisnis Plus
                        </a>
                    </div>

                    <!-- 6. Paket Bisnis High -->
                    <div x-show="webSubTab === 'all' || webSubTab === 'profile'" 
                         class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Corporate & Fitur Multi-Bahasa</span>
                            <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">Bisnis High</h3>
                            <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp 7.500.000</p>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Biaya tahun berikutnya Rp 3.500.000</p>
                            <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 30+ Halaman Website</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Domain .com .id .org .or.id .co.id</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Dedicated Hosting Super</li>
                                <li class="flex items-center font-semibold text-premium-emerald dark:text-emerald-400"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Live Chat Apps + Multi-Bahasa</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Setting Google Ads & Setup Meta Ads</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Web Security & Activity Log</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> SEO Optimization, Analytics, 6 Artikel</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 5 Email Domain & Modul Panduan</li>
                            </ul>
                        </div>
                        <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Website%20Bisnis%20High" target="_blank"
                           class="block text-center py-3 bg-premium-navy dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                            Order Bisnis High
                        </a>
                    </div>

                    <!-- 7. Paket Toko WA UMKM -->
                    <div x-show="webSubTab === 'all' || webSubTab === 'toko'" 
                         class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Checkout Instan ke WhatsApp</span>
                            <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">Toko WA UMKM</h3>
                            <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp 2.525.000</p>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Biaya tahun berikutnya Rp 1.000.000</p>
                            <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 10 Halaman Website</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Domain .com .id .org .or.id</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Shared Hosting Premium</li>
                                <li class="flex items-center font-semibold text-premium-emerald dark:text-emerald-400"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Katalog & Checkout via WhatsApp</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Dibantu Upload 10 Produk</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Logo Design & Copy Writing</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 3 Email Domain & 3 Artikel Blog</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Fitur: Checkout Page & Video Modul</li>
                            </ul>
                        </div>
                        <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Toko%20WA%20UMKM" target="_blank"
                           class="block text-center py-3 bg-premium-navy dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                            Order Toko WA
                        </a>
                    </div>

                    <!-- 8. Paket Toko Bisnis (POPULER / FEATURED) -->
                    <div x-show="webSubTab === 'all' || webSubTab === 'toko'" 
                         class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border-2 border-premium-navy dark:border-slate-750 shadow-md flex flex-col justify-between hover:shadow-lg transition relative">
                        <span class="absolute -top-3 left-6 bg-premium-emerald text-white text-[9px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">POPULER</span>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-premium-navy dark:text-slate-350">Checkout Payment Gateway Otomatis</span>
                            <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">Toko Bisnis</h3>
                            <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp 3.500.000</p>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Biaya tahun berikutnya Rp 2.000.000</p>
                            <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 15 Halaman Website</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Domain .com .id .org .or.id</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Dedicated Hosting (Performa Cepat)</li>
                                <li class="flex items-center font-semibold text-premium-emerald dark:text-emerald-400"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Integrasi Payment Gateway (Midtrans/Xendit)</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Cek Ongkos Kirim Otomatis + Member Page</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Dibantu Upload 20 Produk</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Logo Design & 6 Artikel Blog</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Setting 5 Email Domain & Video Modul</li>
                            </ul>
                        </div>
                        <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Toko%20Bisnis" target="_blank"
                           class="block text-center py-3 bg-premium-emerald hover:bg-emerald-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition shadow-md">
                            Order Toko Bisnis
                        </a>
                    </div>

                    <!-- 9. Paket Toko High -->
                    <div x-show="webSubTab === 'all' || webSubTab === 'toko'" 
                         class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Premium E-Commerce & Skala Korporat</span>
                            <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">Toko High</h3>
                            <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp 7.500.000</p>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Biaya tahun berikutnya Rp 3.500.000</p>
                            <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 30+ Halaman Website</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Domain .com .id .org .or.id</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Dedicated Hosting Premium</li>
                                <li class="flex items-center font-semibold text-premium-emerald dark:text-emerald-400"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Live Chat Web + Multi-Bahasa</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Payment Gateway, Member Page, Cek Ongkir</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Dibantu Upload 40 Produk</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Setup Ads (Google/Meta) & Security Logs</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 5 Email Domain, 6 Artikel & Modul</li>
                            </ul>
                        </div>
                        <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Toko%20High" target="_blank"
                           class="block text-center py-3 bg-premium-navy dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                            Order Toko High
                        </a>
                    </div>

                    <!-- 10. Paket Custom Request -->
                    <div x-show="webSubTab === 'all' || webSubTab === 'custom'" 
                         class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Sistem & Kebutuhan Kustom</span>
                            <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">Custom Request</h3>
                            <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp. Call Us</p>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Biaya disesuaikan spesifikasi projek</p>
                            <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Semua Fitur Pada Paket High</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> LMS / Sistem Kelas Online (E-Learning)</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Website Donasi (Crowdfunding System)</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Hotel Booking System + Payment Gateway</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Portal Job Listing & Profile Builder</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Company with Different Maps Listing</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Medical Appointment System</li>
                                <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Video Listing / Streaming Website</li>
                            </ul>
                        </div>
                        <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%2520dengan%2520Paket%2520Custom%2520Website" target="_blank"
                           class="block text-center py-3 bg-premium-navy dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                            Konsultasi Kustom
                        </a>
                    </div>
                </div>
            </div>

            <!-- DESAIN PACKAGES (Tab Ke-2) -->
            <div x-show="activeTab === 'desain'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" style="display: none;">
                <!-- Identity Branding -->
                <div class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Branding Awal Bisnis</span>
                        <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">Identity Branding</h3>
                        <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp 300.000</p>
                        <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Sekali Bayar</p>
                        <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 3 Alternatif Konsep Logo</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Palet Warna & Visual Assets</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> File Master Vector (AI/PDF)</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Revisi Maksimal 3x</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Desain%20Identity%20Branding" target="_blank"
                       class="block text-center py-3 bg-premium-navy dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                        Order Paket Branding
                    </a>
                </div>

                <!-- UI/UX Figma Design -->
                <div class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Rancangan Aplikasi & Web</span>
                        <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">UI/UX Design Studio</h3>
                        <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp 1.500.000</p>
                        <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Sekali Bayar</p>
                        <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Hingga 8 Halaman Screen</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Wireframe & User Flow</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Prototype Interaktif Figma</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Design System (Asset Library)</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20UI/UX%20Design%20Figma" target="_blank"
                       class="block text-center py-3 bg-premium-navy dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                        Order Desain UI/UX
                    </a>
                </div>

                <!-- Jasa Sosial Media Management -->
                <div class="bg-white dark:bg-[#0f1422] p-8 rounded-2xl border-2 border-premium-navy dark:border-slate-750 shadow-md flex flex-col justify-between hover:shadow-lg transition relative">
                    <span class="absolute -top-3 left-6 bg-premium-emerald text-white text-[9px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">POPULER</span>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-premium-navy dark:text-slate-300">Optimasi Akun Bisnis</span>
                        <h3 class="text-xl font-bold text-premium-navy dark:text-white mt-2">Social Media Management</h3>
                        <p class="text-2xl font-black text-premium-navy dark:text-white mt-4">Rp 800.000</p>
                        <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 border-b border-slate-100 dark:border-slate-800/80 pb-4">Per Bulan (Instagram/TikTok)</p>
                        <ul class="my-6 space-y-3.5 text-xs text-slate-600 dark:text-slate-300 font-light">
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 12 Konten Bulanan (Feed/Reels)</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Copywriting Caption & Hashtag</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Penyusunan Kalender Konten bulanan</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Desain Visual High-Quality</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Sosial%20Media%20Management" target="_blank"
                       class="block text-center py-3 bg-premium-emerald hover:bg-emerald-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                        Order Paket Sosmed
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
