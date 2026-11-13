@extends('layouts.public')

@section('title', 'Tentang Saya')

@section('content')
    <!-- Profile Header / Hero (Mini Hero Dark - Yoggui Style) -->
    <section class="hero-dark relative isolate pt-32 pb-20 px-6 rounded-b-[2.5rem] sm:rounded-b-[3.5rem] text-white text-center overflow-hidden">
        <div class="max-w-3xl mx-auto relative z-10">
            <span class="eyebrow mb-4">Profil & Riwayat Hidup</span>
            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">
                Hamid Abdul Aziz — <span class="text-gradient">Curriculum Vitae</span>
            </h1>
            <p class="text-white/70 font-light text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                S1 Teknik Informatika, Universitas Komputer Indonesia. Lulusan Ilmu Komputer yang selalu memperbarui pengalaman di bidang Pemrograman Website dan Aplikasi Android — berbasis di Bandung, Jawa Barat.
            </p>
            <div class="flex flex-wrap justify-center gap-3 mt-6 text-xs">
                <a href="tel:081214019947" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-white/10 ring-1 ring-white/20 font-semibold hover:bg-white/20 transition">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    081214019947
                </a>
                <a href="mailto:hamidabdulaziz36@gmail.com" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-white/10 ring-1 ring-white/20 font-semibold hover:bg-white/20 transition">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    hamidabdulaziz36@gmail.com
                </a>
                <a href="https://www.linkedin.com/in/hamid-abdul-aziz/" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-sky-500/20 ring-1 ring-sky-400/40 font-semibold text-sky-300 hover:bg-sky-500/30 transition">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    LinkedIn
                </a>
            </div>
        </div>
    </section>

    <!-- Experience & Timeline Section (Yoggui Experience Style) -->
    <section class="py-24 px-6 bg-slate-50 dark:bg-[#020617] border-b border-slate-200/60 dark:border-white/5">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div>
                    <p class="eyebrow mb-2">Riwayat & CV</p>
                    <h2 class="section-title text-slate-900 dark:text-white">Pengalaman <span class="text-gradient">Profesional</span></h2>
                </div>
                <div class="flex flex-col gap-3">
                    <p class="text-slate-500 dark:text-slate-400 max-w-md font-light text-sm">
                        Pengalaman membangun sistem web, infrastruktur IT, dan platform digital sejak 2022.
                    </p>
                    <a href="https://drive.google.com/file/d/1XF5AqXUPARTom1QgcTpluF7BCM4zcm/view?usp=sharing"
                       target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-slate-300 dark:border-white/15 text-slate-700 dark:text-slate-300 hover:border-sky-400 hover:text-sky-400 dark:hover:text-sky-300 font-bold text-xs uppercase tracking-wider transition self-start">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Unduh CV Lengkap
                    </a>
                </div>
            </div>

            <!-- Timeline Career List (Full Width) -->
            <div class="exp-list w-full">

                    {{-- ==================== PENGALAMAN KERJA ==================== --}}
                    <div class="mb-6">
                        <span class="text-[10px] font-black uppercase tracking-widest text-sky-400 block mb-4">Pengalaman Kerja</span>
                    </div>

                    {{-- 1. PT LSP Manajemen Pendidikan Islam --}}
                    <div class="exp-row group">
                        <div class="flex items-center gap-4">
                            <div class="exp-logo">
                                <span>LSP</span>
                            </div>
                            <div class="min-w-0">
                                <h3 class="exp-company">PT.LSP Manajemen Pendidikan Islam</h3>
                                <p class="exp-period">Apr – Okt 2026 &middot; <span>Staff IT &bull; Jl. Gedebage Selatan, Bandung</span></p>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed">
                            Mengelola dan memelihara seluruh infrastruktur situs web serta sistem informasi LSP MPI. Bertanggung jawab atas stabilitas server, pembuatan konten portal sertifikasi, keamanan data, serta memberikan dukungan teknis (IT Support) untuk kelancaran operasional digital organisasi.
                        </p>
                        <ul class="flex flex-wrap gap-2 mt-1">
                            <li class="exp-tag">Server Management</li>
                            <li class="exp-tag">IT Support</li>
                            <li class="exp-tag">Keamanan Data</li>
                            <li class="exp-tag">Portal Sertifikasi</li>
                        </ul>
                    </div>

                    {{-- 2. PT Digi Tekno Indonesia --}}
                    <div class="exp-row group">
                        <div class="flex items-center gap-4">
                            <div class="exp-logo">
                                <span>DTI</span>
                            </div>
                            <div class="min-w-0">
                                <h3 class="exp-company">PT. Digi Tekno Indonesia</h3>
                                <p class="exp-period">Ags – Sep 2025 &middot; <span>Magang &bull; Sumarecon Komplek Magna, Bandung</span></p>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed">
                            Software & Hardware Engineer Intern — merancang dan mengembangkan Sistem Presensi Digital Berbasis IoT (ESP32/Arduino & RFID) yang terintegrasi secara real-time dengan web dashboard backend untuk otomasi presensi dan rekap kehadiran karyawan.
                        </p>
                        <ul class="flex flex-wrap gap-2 mt-1">
                            <li class="exp-tag">IoT / ESP32</li>
                            <li class="exp-tag">Arduino & RFID</li>
                            <li class="exp-tag">Web Dashboard</li>
                            <li class="exp-tag">Laravel</li>
                        </ul>
                    </div>

                    {{-- 3. Freelance Website --}}
                    <div class="exp-row group">
                        <div class="flex items-center gap-4">
                            <div class="exp-logo">
                                <span>FL</span>
                            </div>
                            <div class="min-w-0">
                                <h3 class="exp-company">Freelance Web Developer</h3>
                                <p class="exp-period">Jan 2025 – Sekarang &middot; <span>Fullstack Developer &bull; Bandung, Jawa Barat</span></p>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed">
                            Menyediakan jasa pengembangan aplikasi web <em>full-stack</em> kustom berbasis Laravel, PHP, MySQL, JavaScript, Tailwind CSS & Bootstrap. Proyek unggulan: <strong>Eduva Space</strong> (platform manajemen properti mahasiswa), <strong>Digital Certificate Generator Web System</strong>, dan <strong>Digital Wedding Guestbook & RSVP Platform</strong>.
                        </p>
                        <ul class="flex flex-wrap gap-2 mt-1">
                            <li class="exp-tag">Laravel</li>
                            <li class="exp-tag">PHP</li>
                            <li class="exp-tag">MySQL</li>
                            <li class="exp-tag">Tailwind CSS</li>
                            <li class="exp-tag">JavaScript</li>
                        </ul>
                    </div>

                    {{-- ==================== PENDIDIKAN ==================== --}}
                    <div class="mt-10 mb-6">
                        <span class="text-[10px] font-black uppercase tracking-widest text-sky-400 block mb-4">Jenjang Pendidikan</span>
                    </div>

                    {{-- Universitas Komputer Indonesia --}}
                    <div class="exp-row group">
                        <div class="flex items-center gap-4">
                            <div class="exp-logo">
                                <span>UNIKOM</span>
                            </div>
                            <div class="min-w-0">
                                <h3 class="exp-company">Universitas Komputer Indonesia</h3>
                                <p class="exp-period">Ags 2022 – Ags 2026 &middot; <span>S1 Teknik Informatika &bull; IPK 3.05 &bull; Coblong, Bandung</span></p>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed">
                            Aplikasi Ujian Berbasis Android (Flutter & Firestore) — merancang dan membangun aplikasi ujian mobile berbasis Flutter, Dart, dan Cloud Firestore. Implementasi keamanan tinggi menggunakan Native Screen Pinning API dan panel pemantauan multi-peran (multi-role monitoring) yang telah diuji oleh 403 pengguna.
                        </p>
                        <ul class="flex flex-wrap gap-2 mt-1">
                            <li class="exp-tag">Flutter</li>
                            <li class="exp-tag">Dart</li>
                            <li class="exp-tag">Firebase</li>
                            <li class="exp-tag">Android</li>
                        </ul>
                    </div>

                    {{-- ==================== KEAHLIAN & PENCAPAIAN ==================== --}}
                    <div class="mt-10 mb-6">
                        <span class="text-[10px] font-black uppercase tracking-widest text-sky-400 block mb-4">Skills & Pencapaian</span>
                    </div>

                    <div class="exp-row group">
                        <div class="flex items-center gap-4">
                            <div class="exp-logo">
                                <span>🏆</span>
                            </div>
                            <div class="min-w-0">
                                <h3 class="exp-company">Proyek & Sertifikasi</h3>
                                <p class="exp-period">2019 – 2026 &middot; <span>Berbagai Platform & Lembaga</span></p>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed mb-3">
                            <strong>Proyek (2026):</strong> Sistem Web Buku Undangan Pernikahan, Sistem Web LSP Manajemen Pendidikan Islam, Sistem Admin berbasis Arduino untuk pengawas ujian.
                        </p>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed mb-3">
                            <strong>Soft Skills:</strong> Analytical Thinking, Critical Thinking, Logical Thinking, Leadership, Teamwork, Integrity & Project Management.
                        </p>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-light leading-relaxed">
                            <strong>Sertifikasi:</strong> From Business Idea to Action — King's College London (2019) &bull; Business Development — Hari Senin Mini School (2021) &bull; AI for Business (AI-HUSTLER) — BisnAI Academy (2022).
                        </p>
                        <ul class="flex flex-wrap gap-2 mt-3">
                            <li class="exp-tag">Project Management</li>
                            <li class="exp-tag">AI for Business</li>
                            <li class="exp-tag">Leadership</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Quick Call to Action -->
    <section class="py-20 px-6 bg-slate-50 dark:bg-[#020617] text-center">
        <div class="max-w-3xl mx-auto">
            <h3 class="text-2xl sm:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Siap Memulai Projek Bersama?</h3>
            <p class="text-slate-500 dark:text-slate-400 font-light text-sm mb-8">Diskusikan kebutuhan website atau branding usaha Anda secara santai dan gratis.</p>
            <a href="{{ route('home') }}#contact" class="cta-btn">
                <span>Hubungi Hamid via WhatsApp</span>
                <span class="cta-btn-icon"><i data-lucide="arrow-right" class="cta-btn-arrow"></i></span>
            </a>
        </div>
    </section>
@endsection
