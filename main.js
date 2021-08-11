document.querySelector('.menu-btn').addEventListener('click', () => {
    document.querySelector('.nav-menu').classList.toggle('show');
});

ScrollReveal().reveal('.showcase');
ScrollReveal().reveal('.destacados', { delay: 500});
ScrollReveal().reveal('.destacados-banner-one', { delay: 500});
ScrollReveal().reveal('.destacados-banner-2', { delay: 500});

