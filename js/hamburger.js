document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.hamburger-btn');
    const dropdown = document.querySelector('.nav-list');
    const articles = document.querySelector('.articles-item');
    const about = document.querySelector('.about-item');
    const offer = document.querySelector('.offer-item');
    const contact = document.querySelector('.contact-item');

    const curtain = document.body;
    const yOffset = -(window.innerHeight / 10);

    const toggleMenu = () => {
        if (window.innerWidth <= 1024) {
            burger.classList.toggle('active');
            dropdown.classList.toggle('dropdown');
            curtain.classList.toggle('curtain');
        }
    }

    burger.addEventListener('click', () => {
        toggleMenu();
    });

    articles.addEventListener('click', () => {
        const y = document.querySelector('section.articles').getBoundingClientRect().top + window.pageYOffset + yOffset;
        window.scrollTo({ top: y, behavior: 'smooth' });
        toggleMenu();
    });
    about.addEventListener('click', () => {
        const y = document.querySelector('section.about').getBoundingClientRect().top + window.pageYOffset + yOffset;
        window.scrollTo({ top: y, behavior: 'smooth' });
        toggleMenu();
    });
    offer.addEventListener('click', () => {
        const y = document.querySelector('section.offer').getBoundingClientRect().top + window.pageYOffset + yOffset;
        window.scrollTo({ top: y, behavior: 'smooth' });
        toggleMenu();
    });
    contact.addEventListener('click', () => {
        const y = document.querySelector('section.contact').getBoundingClientRect().top + window.pageYOffset + yOffset;
        window.scrollTo({ top: y, behavior: 'smooth' });
        toggleMenu();
    });
});


