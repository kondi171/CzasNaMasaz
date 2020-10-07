document.addEventListener('DOMContentLoaded', () => {
    const time = 4000;
    let activeSlide = 1;
    const numberofSlide = 3;
    const header = document.querySelector('header.main-header');
    const dots = document.querySelectorAll('.dots i');
    const leftAngle = document.querySelector('.fa-angle-left');
    const rightAngle = document.querySelector('.fa-angle-right');
    // podziel na dwie osobne funkcje odpowiedzialne za kropeczki i slajd, dzieki temu pozbędziemy się redundancji kodu.
    const slider = () => {
        if (activeSlide >= numberofSlide) {
            dots[numberofSlide - 1].classList.remove('active-dot');
            header.classList.remove(`slide-${activeSlide}`);
            activeSlide = 1;
            dots[activeSlide - 1].classList.add('active-dot');
            header.classList.add(`slide-${activeSlide}`);
        } else {
            header.classList.remove(`slide-${activeSlide}`);
            header.classList.add(`slide-${++activeSlide}`);
            dots[activeSlide - 1].classList.add('active-dot');
            dots[activeSlide - 2].classList.remove('active-dot');
        }
    }

    const sliderInterval = window.setInterval(slider, time);

    dots[0].addEventListener('click', function () {
        window.clearInterval(sliderInterval);
        dots.forEach(dot => {
            dot.classList.remove('active-dot');
        })
        this.classList.add('active-dot');
        header.classList.remove(`slide-${activeSlide}`);
        header.classList.add(`slide-1`);
        window.setInterval(slider, time);
    });

    leftAngle.addEventListener('click', () => {
        window.clearInterval(sliderInterval);
    });
    rightAngle.addEventListener('click', () => {
        window.clearInterval(sliderInterval);
    });
});