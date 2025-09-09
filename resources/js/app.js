import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {

    // --- LOGIKA 1: SCROLLSPY UNTUK NAVIGASI AKTIF ---
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-links a.nav-link');

    // Hanya jalankan jika ada section dan nav-link di halaman
    if (sections.length > 0 && navLinks.length > 0) {
        const setActiveLink = () => {
            let scrollY = window.pageYOffset;

            sections.forEach(current => {
                const sectionHeight = current.offsetHeight;
                // Offset (misal: 70) agar link aktif pas dengan tinggi navbar
                const sectionTop = current.offsetTop - 70;
                const sectionId = current.getAttribute('id');

                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    navLinks.forEach(link => {
                        // Hapus 'active' dari semua link dulu
                        link.classList.remove('active');
                        // Tambahkan 'active' ke link yang cocok
                        if (link.getAttribute('href') === '#' + sectionId) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        };
        
        // Panggil fungsi saat scroll dan saat halaman pertama kali dimuat
        window.addEventListener('scroll', setActiveLink);
        setActiveLink(); // Untuk set status aktif saat load
    }


    // --- LOGIKA 2: TAB UNTUK GALERI PORTOFOLIO ---
    const folderTabs = document.querySelectorAll('.folder-tab');
    const galleryPanes = document.querySelectorAll('.gallery-pane');

    // Hanya jalankan jika ada elemen tab di halaman
    if (folderTabs.length > 0 && galleryPanes.length > 0) {
        folderTabs.forEach(tab => {
            tab.addEventListener('click', (event) => {
                // Mencegah event 'click' dari elemen lain (misal: service-item) ikut terpicu
                event.stopPropagation();

                // Hapus kelas 'active' dari semua tab dan panel
                folderTabs.forEach(item => item.classList.remove('active'));
                galleryPanes.forEach(pane => pane.classList.remove('active'));

                // Tambahkan kelas 'active' ke tab yang baru diklik
                tab.classList.add('active');

                // Tampilkan panel galeri yang sesuai
                const targetPaneId = tab.getAttribute('data-target');
                const targetPane = document.querySelector(targetPaneId);
                if (targetPane) {
                    targetPane.classList.add('active');
                }
            });
        });
    }

});