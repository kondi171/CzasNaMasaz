document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.hamburger-btn');
    const dropdown = document.querySelector('.nav-list');
    const curtain = document.body;
    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
        dropdown.classList.toggle('dropdown');
        curtain.classList.toggle('curtain');
    });
});


