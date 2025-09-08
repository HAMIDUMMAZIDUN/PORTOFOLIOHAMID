const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    const icon = hamburger.querySelector('i');
    icon.classList.toggle('fa-bars');
    icon.classList.toggle('fa-times');
});

const sections = document.querySelectorAll('section[id]');
const navAnchors = document.querySelectorAll('nav .nav-links a');

const updateActiveNavLink = () => {
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        if (window.scrollY >= sectionTop - 90) { // Offset for fixed navbar
            current = section.getAttribute('id');
        }
    });

    navAnchors.forEach(a => {
        a.classList.remove('active');
        if (a.getAttribute('href') === '#' + current) {
            a.classList.add('active');
        }
    });
};

// Update on initial load and on scroll
window.addEventListener('load', updateActiveNavLink);
window.addEventListener('scroll', updateActiveNavLink);

document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        if (navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
            const icon = hamburger.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });
});

document.querySelectorAll('.service-item').forEach(item => {
    item.addEventListener('click', () => {
        // Hapus kelas 'active' dari semua item lain
        document.querySelectorAll('.service-item').forEach(otherItem => {
            if (otherItem !== item && otherItem.classList.contains('active')) {
                otherItem.classList.remove('active');
                otherItem.querySelector('i').classList.remove('fa-minus');
                otherItem.querySelector('i').classList.add('fa-plus');
            }
        });

        // Toggle kelas 'active' pada item yang diklik
        item.classList.toggle('active');
        const icon = item.querySelector('i');
        icon.classList.toggle('fa-plus');
        icon.classList.toggle('fa-minus');
    });
});
