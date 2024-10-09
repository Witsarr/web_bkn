window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');

    if (window.scrollY > 10) {
        navbar.classList.remove('initial');
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
        navbar.classList.add('initial');
    }
});