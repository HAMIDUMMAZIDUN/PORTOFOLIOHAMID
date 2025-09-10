<section id="project" class="py-20 bg-gray-900">
    <div class="container mx-auto px-8 md:px-12">
        <h2 class="text-4xl font-bold text-center mb-12 text-white">My <span class="font-extrabold">Projects</span></h2>

        <div class="space-y-4" id="project-accordion">
            
            @forelse ($galleries as $index => $project)
                {{-- Pastikan tidak ada class 'is-open' di sini --}}
                <div class="project-item bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <div class="project-header p-6 cursor-pointer flex justify-between items-center">
                        <h3 class="text-2xl font-semibold"><span class="text-blue-500 mr-2">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span> {{ $project['title'] }}</h3>
                        <i class="fas fa-plus text-xl text-gray-400 transition-transform"></i>
                    </div>
                    {{-- Div di bawah ini yang akan disembunyikan/ditampilkan oleh CSS & JS --}}
                    <div class="project-details">
                        <div class="px-6 pb-6">
                            <p class="text-gray-600 mb-6">Berikut adalah beberapa hasil karya dari proyek {{ $project['title'] }}. Klik pada gambar untuk melihat lebih detail.</p>
                            
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                                @forelse ($project['images'] as $image)
                                    <div class="gallery-item {{ $loop->iteration > 5 ? 'hidden-image' : '' }}">
                                        <a href="{{ asset($image) }}" class="gallery-lightbox-item">
                                            <img src="{{ asset($image) }}" alt="{{ $project['title'] }} - Image {{ $loop->iteration }}" class="w-full h-40 object-cover rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                                        </a>
                                    </div>
                                @empty
                                    <p class="col-span-full text-gray-500 text-center py-4">Tidak ada gambar di galeri ini.</p>
                                @endforelse
                            </div>

                            @if(count($project['images']) > 5)
                                <button class="see-all-btn mt-6 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700">See All</button>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="bg-white text-center p-8 rounded-lg">
                    <p class="text-gray-500">Belum ada proyek yang ditambahkan.</p>
                </div>
            @endforelse

        </div>
    </div>
</section>

<style>
    .project-details {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease-in-out;
    }
    .project-item.is-open .project-details {
        max-height: 1000vh;
        transition: max-height 1s ease-in-out;
    }
    .project-item.is-open .project-header i {
        transform: rotate(45deg);
    }
    .hidden-image {
        display: none;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const accordion = document.getElementById('project-accordion');
    if (accordion) {
        // Logika Accordion
        accordion.addEventListener('click', function(e) {
            const header = e.target.closest('.project-header');
            if (!header) return;
            
            const item = header.parentElement;
            const wasOpen = item.classList.contains('is-open');

            // Tutup semua item terlebih dahulu
            accordion.querySelectorAll('.project-item').forEach(otherItem => {
                otherItem.classList.remove('is-open');
            });

            // Jika item yang diklik sebelumnya tidak terbuka, maka buka sekarang
            if (!wasOpen) {
                item.classList.add('is-open');
            }
        });

        // Logika Tombol "See All"
        accordion.querySelectorAll('.see-all-btn').forEach(button => {
            button.addEventListener('click', function() {
                const container = this.previousElementSibling;
                container.querySelectorAll('.hidden-image').forEach(image => {
                    image.classList.remove('hidden-image');
                });
                this.style.display = 'none';
            });
        });

        // Logika Lightbox
        accordion.addEventListener('click', function(e){
            const link = e.target.closest('.gallery-lightbox-item');
            if(!link) return;
            
            e.preventDefault();
            basicLightbox.create(`<img src="${link.href}" style="max-width: 90vw; max-height: 90vh;">`).show();
        });
    }
});
</script>