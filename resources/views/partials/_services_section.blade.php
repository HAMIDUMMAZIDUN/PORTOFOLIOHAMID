<section id="services">
    <div class="container">
        {{-- Service Item: Graphic Design --}}
        <div class="service-item">
            <div class="service-header">
                <span>01.</span> Graphic Design
                <i class="fa-solid fa-plus"></i>
            </div>
            <div class="details">
                <div class="service-desc" style="margin-bottom: 20px;">
                    Menciptakan identitas visual yang kuat dan materi promosi yang menarik untuk brand Anda. Pilih folder di bawah untuk melihat hasil desain.
                </div>
                
                <div class="portfolio-container">
                    {{-- TABS FOLDER --}}
                    <div class="folder-tabs">
                        <button class="folder-tab active" data-target="#gallery-baju">
                            <i class="fa-solid fa-folder"></i> Desain Baju
                        </button>
                        <button class="folder-tab" data-target="#gallery-feed">
                            <i class="fa-solid fa-folder"></i> Feed Instagram
                        </button>
                        <button class="folder-tab" data-target="#gallery-tugas">
                            <i class="fa-solid fa-folder"></i> Master Tugas
                        </button>
                    </div>

                    {{-- KONTEN GALERI --}}
                    <div class="gallery-content">
                        {{-- Galeri Desain Baju --}}
                        <div id="gallery-baju" class="gallery-pane active">
                            <div class="design-gallery">
                                @forelse ($galleries['baju'] ?? [] as $image)
                                    <img src="{{ asset($image) }}" alt="Desain Baju">
                                @empty
                                    <p>Tidak ada gambar di galeri ini.</p>
                                @endforelse
                            </div>
                        </div>

                        {{-- Galeri Feed Instagram --}}
                        <div id="gallery-feed" class="gallery-pane">
                            <div class="design-gallery">
                                @forelse ($galleries['feed'] ?? [] as $image)
                                    <img src="{{ asset($image) }}" alt="Feed Instagram">
                                @empty
                                    <p>Tidak ada gambar di galeri ini.</p>
                                @endforelse
                            </div>
                        </div>

                        {{-- Galeri Master Tugas --}}
                        <div id="gallery-tugas" class="gallery-pane">
                            <div class="design-gallery">
                                @forelse ($galleries['tugas'] ?? [] as $image)
                                    <img src="{{ asset($image) }}" alt="Master Tugas">
                                @empty
                                    <p>Tidak ada gambar di galeri ini.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Service Item: Web Apps --}}
        <div class="service-item">
            <div class="service-header">
                <span>02.</span> Web Apps
                <i class="fa-solid fa-plus"></i>
            </div>
            <div class="details">
                <div class="service-tags">
                    <span>Cross-Platform</span>
                    <span>Web App</span>
                    <span>Prototyping</span>
                </div>
                <div class="service-desc">Mendesain aplikasi yang fungsional dan estetis di berbagai platform.</div>
                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80" class="service-img" alt="App Design">
            </div>
        </div>

        {{-- Service Item: Website Design --}}
        <div class="service-item">
            <div class="service-header">
                <span>03.</span> Website Design
                <i class="fa-solid fa-plus"></i>
            </div>
            <div class="details">
                <div class="service-desc">Membangun website modern dan responsif yang sesuai dengan identitas brand Anda.</div>
            </div>
        </div>
    </div>
</section>