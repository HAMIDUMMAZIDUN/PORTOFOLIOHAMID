<section id="project" class="py-20 bg-gray-50">
    <div class="container mx-auto px-8 md:px-12">
        <h2 class="text-4xl font-bold text-center mb-12">My <span class="text-primary-600">Projects</span></h2>

        <div class="space-y-4" id="project-accordion">
            
            <div class="project-item bg-white border border-gray-200 rounded-lg overflow-hidden">
                <div class="project-header p-6 cursor-pointer flex justify-between items-center">
                    <h3 class="text-2xl font-semibold"><span class="text-primary-500 mr-2">01.</span> Graphic Design</h3>
                    <i class="fas fa-plus text-xl text-gray-400 transition-transform"></i>
                </div>
                <div class="project-details hidden px-6 pb-6">
                    <p class="text-gray-600 mb-6">Menciptakan identitas visual yang kuat dan materi promosi yang menarik untuk brand Anda. Pilih folder di bawah untuk melihat hasil desain.</p>
                    
                    <div class="folder-tabs border-b border-gray-200 mb-6">
                        <button class="folder-tab active" data-target="#gallery-baju">
                            <i class="fas fa-folder mr-2"></i> Desain Baju
                        </button>
                        <button class="folder-tab" data-target="#gallery-feed">
                            <i class="fas fa-folder mr-2"></i> Feed Instagram
                        </button>
                        <button class="folder-tab" data-target="#gallery-tugas">
                            <i class="fas fa-folder mr-2"></i> Master Tugas
                        </button>
                    </div>

                    <div class="gallery-content">
                        <div id="gallery-baju" class="gallery-pane active">
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                                @forelse ($galleries['baju'] ?? [] as $image)
                                    <div class="gallery-item {{ $loop->iteration > 5 ? 'hidden-image' : '' }}">
                                        <img src="{{ asset($image) }}" alt="Desain Baju" class="w-full h-full object-cover rounded-lg shadow-md">
                                    </div>
                                @empty
                                    <p class="col-span-full text-gray-500">Tidak ada gambar di galeri ini.</p>
                                @endforelse
                            </div>
                            @if(isset($galleries['baju']) && count($galleries['baju']) > 5)
                                <button class="see-all-btn mt-6 bg-primary-500 text-white py-2 px-4 rounded-lg hover:bg-primary-600">See All</button>
                            @endif
                        </div>

                        <div id="gallery-feed" class="gallery-pane">
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                                @forelse ($galleries['feed'] ?? [] as $image)
                                     <div class="gallery-item {{ $loop->iteration > 5 ? 'hidden-image' : '' }}">
                                        <img src="{{ asset($image) }}" alt="Feed Instagram" class="w-full h-full object-cover rounded-lg shadow-md">
                                    </div>
                                @empty
                                    <p class="col-span-full text-gray-500">Tidak ada gambar di galeri ini.</p>
                                @endforelse
                            </div>
                             @if(isset($galleries['feed']) && count($galleries['feed']) > 5)
                                <button class="see-all-btn mt-6 bg-primary-500 text-white py-2 px-4 rounded-lg hover:bg-primary-600">See All</button>
                            @endif
                        </div>

                        <div id="gallery-tugas" class="gallery-pane">
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                                @forelse ($galleries['tugas'] ?? [] as $image)
                                     <div class="gallery-item {{ $loop->iteration > 5 ? 'hidden-image' : '' }}">
                                        <img src="{{ asset($image) }}" alt="Master Tugas" class="w-full h-full object-cover rounded-lg shadow-md">
                                    </div>
                                @empty
                                    <p class="col-span-full text-gray-500">Tidak ada gambar di galeri ini.</p>
                                @endforelse
                            </div>
                             @if(isset($galleries['tugas']) && count($galleries['tugas']) > 5)
                                <button class="see-all-btn mt-6 bg-primary-500 text-white py-2 px-4 rounded-lg hover:bg-primary-600">See All</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // --- LOGIKA UNTUK ACCORDION PROJECT ---
    const accordion = document.getElementById('project-accordion');
    if (accordion) {
        accordion.addEventListener('click', function(e) {
            const header = e.target.closest('.project-header');
            if (!header) return;

            const item = header.parentElement;
            const details = item.querySelector('.project-details');
            const icon = header.querySelector('i');

            details.classList.toggle('hidden');
            icon.classList.toggle('fa-plus');
            icon.classList.toggle('fa-minus');
            item.classList.toggle('is-open');
        });
    }

    // --- LOGIKA UNTUK TABS FOLDER ---
    const allFolderTabs = document.querySelectorAll('.folder-tab');
    allFolderTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const container = this.closest('.project-details');
            
            // Nonaktifkan semua tab & pane di dalam container ini
            container.querySelectorAll('.folder-tab').forEach(t => t.classList.remove('active'));
            container.querySelectorAll('.gallery-pane').forEach(p => p.classList.remove('active'));

            // Aktifkan tab & pane yang diklik
            this.classList.add('active');
            const targetPane = document.querySelector(this.dataset.target);
            if (targetPane) {
                targetPane.classList.add('active');
            }
        });
    });

    // --- LOGIKA UNTUK TOMBOL "SEE ALL" ---
    const allSeeAllButtons = document.querySelectorAll('.see-all-btn');
    allSeeAllButtons.forEach(button => {
        button.addEventListener('click', function() {
            const galleryPane = this.parentElement;
            galleryPane.querySelectorAll('.hidden-image').forEach(image => {
                image.classList.remove('hidden-image');
            });
            this.style.display = 'none'; // Sembunyikan tombol setelah diklik
        });
    });
});
</script>