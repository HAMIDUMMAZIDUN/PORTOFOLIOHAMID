@extends('layouts.public')

@section('title', 'Paket Harga Jasa Pembuatan Website & Desain | HA Creative')

@section('content')
    <!-- Page Header -->
    <section class="py-20 bg-white border-b border-slate-200/60 text-center px-6">
        <div class="max-w-3xl mx-auto">
            <span class="text-premium-emerald text-xs font-bold uppercase tracking-widest block mb-3">Daftar Paket Lengkap</span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-premium-navy tracking-tight mb-4">Investasikan Bisnis Anda ke Ranah Digital</h1>
            <p class="text-slate-500 font-light text-sm md:text-base leading-relaxed">
                Pilih paket pembuatan website atau desain yang paling sesuai dengan skala usaha Anda. Transparan, bergaransi, dan tanpa biaya tambahan yang tersembunyi.
            </p>
        </div>
    </section>

    <!-- Pricing Grid -->
    <section class="py-20 px-6" x-data="{ activeTab: 'website' }">
        <div class="max-w-7xl mx-auto">
            <!-- Tabs Toggle -->
            <div class="flex justify-center items-center mb-16 space-x-2 bg-slate-200/50 p-1.5 rounded-2xl max-w-sm mx-auto">
                <button @click="activeTab = 'website'" 
                    :class="activeTab === 'website' ? 'bg-white text-premium-navy shadow-sm' : 'text-slate-600 hover:text-premium-navy'"
                    class="flex-1 py-3.5 text-xs font-bold rounded-xl transition duration-200">
                    Paket Website
                </button>
                <button @click="activeTab = 'desain'" 
                    :class="activeTab === 'desain' ? 'bg-white text-premium-navy shadow-sm' : 'text-slate-600 hover:text-premium-navy'"
                    class="flex-1 py-3.5 text-xs font-bold rounded-xl transition duration-200">
                    Paket Desain & Sosmed
                </button>
            </div>

            <!-- WEBSITE PACKAGES -->
            <div x-show="activeTab === 'website'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Paket Hemat -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Rekomendasi UMKM Baru</span>
                        <h3 class="text-xl font-bold text-premium-navy mt-2">Paket Hemat</h3>
                        <p class="text-2xl font-black text-premium-navy mt-4">Rp 500.000</p>
                        <p class="text-[10px] text-slate-400 mt-1 border-b border-slate-100 pb-4">Biaya tahun berikutnya Rp 700.000</p>
                        <ul class="my-6 space-y-3.5 text-xs text-slate-600 font-light">
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 1 Halaman Landing Page</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Domain .com (1 Tahun)</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Basic Copy Writing</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Tombol WhatsApp</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Integrasi Sosial Media</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Website%20Hemat" target="_blank"
                       class="block text-center py-3 bg-premium-navy hover:bg-slate-800 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                        Order Paket Hemat
                    </a>
                </div>

                <!-- Paket UMKM -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Rekomendasi Produk Katalog</span>
                        <h3 class="text-xl font-bold text-premium-navy mt-2">Paket UMKM</h3>
                        <p class="text-2xl font-black text-premium-navy mt-4">Rp 700.000</p>
                        <p class="text-[10px] text-slate-400 mt-1 border-b border-slate-100 pb-4">Biaya tahun berikutnya Rp 700.000</p>
                        <ul class="my-6 space-y-3.5 text-xs text-slate-600 font-light">
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 3 Halaman Website</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Domain .com</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Advanced Copy Writing</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Analytic Traffic Visitor</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 1 Email Domain Khusus</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Website%20UMKM" target="_blank"
                       class="block text-center py-3 bg-premium-navy hover:bg-slate-800 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                        Order Paket UMKM
                    </a>
                </div>

                <!-- Paket Bisnis Basic -->
                <div class="bg-white p-8 rounded-2xl border-2 border-premium-navy shadow-md flex flex-col justify-between hover:shadow-lg transition relative">
                    <span class="absolute -top-3 left-6 bg-premium-emerald text-white text-[9px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">POPULER</span>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-premium-navy">Profil Bisnis & Portofolio</span>
                        <h3 class="text-xl font-bold text-premium-navy mt-2">Paket Bisnis Basic</h3>
                        <p class="text-2xl font-black text-premium-navy mt-4">Rp 1.000.000</p>
                        <p class="text-[10px] text-slate-400 mt-1 border-b border-slate-100 pb-4">Biaya tahun berikutnya Rp 1.000.000</p>
                        <ul class="my-6 space-y-3.5 text-xs text-slate-600 font-light">
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 10 Halaman Website</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Custom Premium Design</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Free Logo Design (Basic)</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Setting 5 Email Domain</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Full SEO Optimization</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Website%20Bisnis%20Basic" target="_blank"
                       class="block text-center py-3 bg-premium-emerald hover:bg-emerald-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                        Order Bisnis Basic
                    </a>
                </div>

                <!-- Toko Online WA -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Checkout via WhatsApp</span>
                        <h3 class="text-xl font-bold text-premium-navy mt-2">Toko WA UMKM</h3>
                        <p class="text-2xl font-black text-premium-navy mt-4">Rp 1.000.000</p>
                        <p class="text-[10px] text-slate-400 mt-1 border-b border-slate-100 pb-4">Biaya tahun berikutnya Rp 1.000.000</p>
                        <ul class="my-6 space-y-3.5 text-xs text-slate-600 font-light">
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Halaman Katalog Produk</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Form Order langsung ke WA</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Dibantu Upload 10 Produk</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Video Panduan Upload Produk</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Toko%20WA%20UMKM" target="_blank"
                       class="block text-center py-3 bg-premium-navy hover:bg-slate-800 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                        Order Toko WA
                    </a>
                </div>

                <!-- Toko Online Payment Gateway -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Midtrans / Xendit Integration</span>
                        <h3 class="text-xl font-bold text-premium-navy mt-2">Toko Gateway</h3>
                        <p class="text-2xl font-black text-premium-navy mt-4">Rp 2.000.000</p>
                        <p class="text-[10px] text-slate-400 mt-1 border-b border-slate-100 pb-4">Biaya tahun berikutnya Rp 2.000.000</p>
                        <ul class="my-6 space-y-3.5 text-xs text-slate-600 font-light">
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Sistem Checkout Pembayaran Otomatis</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Fitur Kalkulator Ongkos Kirim</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Dibantu Upload 20 Produk</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Management Stok & Member Page</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Toko%20Gateway" target="_blank"
                       class="block text-center py-3 bg-premium-navy hover:bg-slate-800 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                        Order Toko Gateway
                    </a>
                </div>

                <!-- Custom Website -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Sistem Sesuai Keinginan</span>
                        <h3 class="text-xl font-bold text-premium-navy mt-2">Custom Request</h3>
                        <p class="text-2xl font-black text-premium-navy mt-4">Rp Call Us</p>
                        <p class="text-[10px] text-slate-400 mt-1 border-b border-slate-100 pb-4">Biaya disesuaikan dengan spek projek</p>
                        <ul class="my-6 space-y-3.5 text-xs text-slate-600 font-light">
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> E-Learning / LMS Online</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Booking System & Event Management</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Keamanan Sistem Tingkat Tinggi</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Full Source Code kepemilikan</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20untuk%20konsultasi%20Paket%20Custom%20Website" target="_blank"
                       class="block text-center py-3 bg-premium-navy hover:bg-slate-800 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                        Hubungi Tim Kami
                    </a>
                </div>
            </div>

            <!-- DESAIN PACKAGES -->
            <div x-show="activeTab === 'desain'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" style="display: none;">
                <!-- Identity Branding -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Branding Awal Bisnis</span>
                        <h3 class="text-xl font-bold text-premium-navy mt-2">Identity Branding</h3>
                        <p class="text-2xl font-black text-premium-navy mt-4">Rp 300.000</p>
                        <p class="text-[10px] text-slate-400 mt-1 border-b border-slate-100 pb-4">Sekali Bayar</p>
                        <ul class="my-6 space-y-3.5 text-xs text-slate-600 font-light">
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> 3 Alternatif Konsep Logo</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Palet Warna & Visual Assets</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> File Master Vector (AI/PDF)</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Revisi Maksimal 3x</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20Desain%20Identity%20Branding" target="_blank"
                       class="block text-center py-3 bg-premium-navy hover:bg-slate-800 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                        Order Paket Branding
                    </a>
                </div>

                <!-- UI/UX Figma Design -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Rancangan Aplikasi & Web</span>
                        <h3 class="text-xl font-bold text-premium-navy mt-2">UI/UX Design Studio</h3>
                        <p class="text-2xl font-black text-premium-navy mt-4">Rp 1.500.000</p>
                        <p class="text-[10px] text-slate-400 mt-1 border-b border-slate-100 pb-4">Sekali Bayar</p>
                        <ul class="my-6 space-y-3.5 text-xs text-slate-600 font-light">
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Hingga 8 Halaman Screen</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Wireframe & User Flow</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Prototype Interaktif Figma</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-premium-emerald mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Design System (Asset Library)</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281214019947?text=Halo%20HA%20Creative,%20saya%20tertarik%20dengan%20Paket%20UI/UX%20Design%20Figma" target="_blank"
                       class="block text-center py-3 bg-premium-navy hover:bg-slate-800 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
                        Order Desain UI/UX
                    </a>
                </div>

                <!-- Jasa Sosial Media Management -->
                <div class="bg-white p-8 rounded-2xl border-2 border-premium-navy shadow-md flex flex-col justify-between hover:shadow-lg transition relative">
                    <span class="absolute -top-3 left-6 bg-premium-emerald text-white text-[9px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">POPULER</span>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-premium-navy">Optimasi Akun Bisnis</span>
                        <h3 class="text-xl font-bold text-premium-navy mt-2">Social Media Management</h3>
                        <p class="text-2xl font-black text-premium-navy mt-4">Rp 800.000</p>
                        <p class="text-[10px] text-slate-400 mt-1 border-b border-slate-100 pb-4">Per Bulan (Instagram/TikTok)</p>
                        <ul class="my-6 space-y-3.5 text-xs text-slate-600 font-light">
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
