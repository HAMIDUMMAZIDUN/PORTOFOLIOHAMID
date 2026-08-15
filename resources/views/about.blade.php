@extends('layouts.public')

@section('title', 'Tentang Saya | Hamid Abdul Aziz - Web Developer')

@section('content')
    <!-- Profile Header -->
    <section class="py-24 bg-white border-b border-slate-200/60 px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <div class="w-36 h-36 bg-slate-100 rounded-full mx-auto mb-8 flex items-center justify-center overflow-hidden border-4 border-white shadow-md">
                <!-- Using placeholder or icon since asset might not be loaded initially -->
                <div class="w-full h-full bg-premium-navy text-white flex items-center justify-center text-4xl font-bold font-sans">
                    HA
                </div>
            </div>
            
            <h1 class="text-4xl font-extrabold text-premium-navy tracking-tight mb-2">Hamid Abdul Aziz</h1>
            <p class="text-base text-slate-500 font-medium font-sans mb-4">Web Developer · Junior IT Support · QA Tester · Creative Visual</p>
            
            <div class="flex justify-center gap-2 flex-wrap mb-8">
                <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-semibold rounded-full border border-slate-200">Laravel</span>
                <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-semibold rounded-full border border-slate-200">PHP</span>
                <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-semibold rounded-full border border-slate-200">HTML/CSS/JS</span>
                <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-semibold rounded-full border border-slate-200">QA Testing</span>
                <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-semibold rounded-full border border-slate-200">Photography</span>
            </div>
            
            <p class="leading-relaxed text-slate-500 mb-10 max-w-2xl mx-auto font-light text-sm md:text-base font-sans">
                Saya adalah seorang <strong>Web Developer</strong> yang berpengalaman membangun aplikasi web berbasis Laravel. Selain itu, saya juga aktif sebagai Junior IT Support, QA Tester, dan Fotografer/Videografer — menjadikan saya sosok yang memahami aspek teknis maupun kreatif secara menyeluruh.
            </p>
            
            <div class="flex justify-center gap-4">
                <a href="https://wa.me/6281214019947" class="px-6 py-2.5 bg-premium-navy hover:bg-slate-800 text-white rounded-lg text-xs font-bold uppercase tracking-wider transition">
                    Hubungi Saya
                </a>
                <a href="{{ asset('cv-hamid.pdf') }}" download="CV_Hamid_Abdul_Aziz.pdf" class="px-6 py-2.5 border border-slate-300 hover:border-premium-navy text-slate-700 hover:text-premium-navy bg-white rounded-lg text-xs font-bold uppercase tracking-wider transition flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    <span>Download CV</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Timeline Experience -->
    <section class="py-24 px-6 bg-slate-50 border-b border-slate-200/60">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-extrabold text-premium-navy mb-16 text-center">Perjalanan Karir</h2>
            
            <div class="border-l-2 border-slate-200 ml-4 space-y-12">
                <!-- Timeline 1 -->
                <div class="relative pl-8">
                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-premium-navy rounded-full border-4 border-slate-50"></div>
                    <div class="bg-white p-8 rounded-2xl border border-slate-200/60 shadow-sm">
                        <span class="text-[10px] font-bold text-premium-emerald tracking-wider uppercase">Agustus - September 2025</span>
                        <h3 class="text-lg font-bold text-premium-navy mt-1">Project Manager & Backend Developer</h3>
                        <p class="text-slate-400 text-xs mb-4">PT DIGI TEKO INDONESIA, Summarecon Bandung</p>
                        <ul class="list-disc list-inside text-xs text-slate-500 space-y-2 font-light font-sans">
                            <li>Memimpin tim dalam pengembangan sistem backend menggunakan Laravel.</li>
                            <li>Melakukan manajemen database MySQL dan integrasi API.</li>
                            <li>Bertanggung jawab atas timeline proyek dan koordinasi tim.</li>
                        </ul>
                    </div>
                </div>

                <!-- Timeline 2 -->
                <div class="relative pl-8">
                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-premium-navy rounded-full border-4 border-slate-50"></div>
                    <div class="bg-white p-8 rounded-2xl border border-slate-200/60 shadow-sm">
                        <span class="text-[10px] font-bold text-premium-emerald tracking-wider uppercase">2025 - Sekarang</span>
                        <h3 class="text-lg font-bold text-premium-navy mt-1">Freelance Photographer & Videographer</h3>
                        <p class="text-slate-400 text-xs mb-4">Self-Employed</p>
                        <ul class="list-disc list-inside text-xs text-slate-500 space-y-2 font-light font-sans">
                            <li>Mendokumentasikan acara pernikahan (Ex: Wedding Salsa & Sidik, Jan 2026 | Ricky & Elsa, Des 2025)</li>
                            <li>Memproduksi konten video pendek untuk media sosial klien.</li>
                            <li>Editing foto dan video menggunakan Adobe Lightroom & Premiere.</li>
                        </ul>
                    </div>
                </div>

                <!-- Timeline 3 -->
                <div class="relative pl-8">
                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-slate-300 rounded-full border-4 border-slate-50"></div>
                    <div class="bg-white p-8 rounded-2xl border border-slate-200/60 shadow-sm">
                        <span class="text-[10px] font-bold text-slate-400 tracking-wider uppercase">Sekarang</span>
                        <h3 class="text-lg font-bold text-premium-navy mt-1">Mahasiswa Tingkat Akhir</h3>
                        <p class="text-slate-400 text-xs mb-4">Sedang Menyusun Skripsi</p>
                        <p class="text-xs text-slate-500 font-light font-sans leading-relaxed">
                            Fokus pada pengembangan aplikasi web/mobile dan implementasi Quality Assurance (QA).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Skills -->
    <section class="py-24 px-6 bg-white border-b border-slate-200/60">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-extrabold text-premium-navy mb-3 text-center">Keahlian Teknis</h2>
            <p class="text-center text-slate-400 text-xs mb-16">Skill yang saya kuasai sebagai Web Developer & IT Creative</p>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <!-- Skill 1 -->
                <div class="p-6 bg-slate-50 rounded-xl border border-slate-200/60 hover:shadow-md transition">
                    <div class="text-premium-navy flex justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                    </div>
                    <h3 class="font-bold text-sm text-premium-navy">Laravel (PHP)</h3>
                    <p class="text-[10px] text-slate-400 mt-1 uppercase tracking-wider font-semibold">Web Dev</p>
                </div>
                <!-- Skill 2 -->
                <div class="p-6 bg-slate-50 rounded-xl border border-slate-200/60 hover:shadow-md transition">
                    <div class="text-premium-navy flex justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    </div>
                    <h3 class="font-bold text-sm text-premium-navy">HTML/CSS/JS</h3>
                    <p class="text-[10px] text-slate-400 mt-1 uppercase tracking-wider font-semibold">Web Dev</p>
                </div>
                <!-- Skill 3 -->
                <div class="p-6 bg-slate-50 rounded-xl border border-slate-200/60 hover:shadow-md transition">
                    <div class="text-premium-navy flex justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>
                    </div>
                    <h3 class="font-bold text-sm text-premium-navy">MySQL</h3>
                    <p class="text-[10px] text-slate-400 mt-1 uppercase tracking-wider font-semibold">Web Dev</p>
                </div>
                <!-- Skill 4 -->
                <div class="p-6 bg-slate-50 rounded-xl border border-slate-200/60 hover:shadow-md transition">
                    <div class="text-premium-navy flex justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="font-bold text-sm text-premium-navy">QA Testing</h3>
                    <p class="text-[10px] text-slate-400 mt-1 uppercase tracking-wider font-semibold">Quality Assurance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Creative Works -->
    <section class="py-24 px-6 bg-slate-50">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-extrabold text-premium-navy mb-16 text-center">Karya Terbaru</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card: Undangan Digital -->
                <a href="https://bybiru.my.id/" target="_blank" class="group relative overflow-hidden aspect-video block shadow-sm rounded-xl border border-slate-200/60 bg-premium-navy">
                    <div class="absolute inset-0 flex items-center justify-center p-6 text-center">
                        <div>
                            <p class="text-slate-300 text-xs font-semibold font-sans tracking-wide">bybiru.my.id</p>
                            <h4 class="text-white font-bold text-sm mt-1">E-Undangan "Biru"</h4>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <span class="text-premium-emerald text-[9px] font-bold tracking-widest uppercase">Web Development</span>
                        <p class="text-white text-xs font-bold leading-snug">Undangan Digital Interaktif</p>
                    </div>
                </a>

                <!-- Card: PT Digi Teko -->
                <a href="https://absensiptdigidemoweb.vercel.app/" target="_blank" class="group relative overflow-hidden aspect-video block shadow-sm rounded-xl border border-slate-200/60 bg-premium-navy">
                    <div class="absolute inset-0 flex items-center justify-center p-6 text-center">
                        <div>
                            <p class="text-slate-300 text-xs font-semibold font-sans tracking-wide">absensiptdigidemoweb.vercel.app</p>
                            <h4 class="text-white font-bold text-sm mt-1">Sistem Absensi PT Digi</h4>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <span class="text-premium-emerald text-[9px] font-bold tracking-widest uppercase">Web Development</span>
                        <p class="text-white text-xs font-bold leading-snug">Project & Attendance System</p>
                    </div>
                </a>

                <!-- Card: Instagram -->
                <a href="https://instagram.com/galerihamidabdulaziz_" target="_blank" class="group relative overflow-hidden aspect-video block shadow-sm rounded-xl border border-slate-200/60 bg-premium-navy">
                    <div class="absolute inset-0 flex items-center justify-center p-6 text-center">
                        <div>
                            <p class="text-slate-300 text-xs font-semibold font-sans tracking-wide">@galerihamidabdulaziz_</p>
                            <h4 class="text-white font-bold text-sm mt-1">Galeri Instagram</h4>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <span class="text-premium-emerald text-[9px] font-bold tracking-widest uppercase">Photography</span>
                        <p class="text-white text-xs font-bold leading-snug">Wedding & Event Portfolio</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection