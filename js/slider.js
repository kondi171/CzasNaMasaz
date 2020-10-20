document.addEventListener('DOMContentLoaded', () => {
    const slideList = [{
        desktop: "../img/desktop/header1.jpg",
        mobile: "../img/mobile/header1.jpg"
    },
    {
        desktop: "../img/desktop/header2.jpg",
        mobile: "../img/mobile/header2.jpg"
    },
    {
        desktop: "../img/desktop/header3.jpg",
        mobile: "../img/mobile/header3.jpg"
    }];

    let active = 0;
    const time = 8000;
    const image = document.querySelector('img.main-slide');
    const dots = [...document.querySelectorAll('.dots i')];
    const leftAngle = document.querySelector('.fa-angle-left');
    const rightAngle = document.querySelector('.fa-angle-right');
    const offset = window.innerWidth >= 1024 ? true : false;

    if (offset) image.src = slideList[active].desktop;
    else image.src = slideList[active].mobile;

    const changeDot = () => {
        const activeDot = dots.findIndex(dot => dot.classList.contains('active-dot'));
        dots[activeDot].classList.remove('active-dot');
        dots[active].classList.add('active-dot');
    }

    const autoChangeSlide = () => {
        active++;
        const offset = window.innerWidth >= 1024 ? true : false;
        console.log(offset);
        if (active === slideList.length) active = 0;
        if (offset) image.src = slideList[active].desktop;
        else image.src = slideList[active].mobile;
        slider();
    }
    const slider = () => {
        image.animate([
            { opacity: '.3' },
            { opacity: '1' }
        ], {
            duration: 1000,
            iterations: 1
        });
        changeDot()
    }

    let sliderInterval = setInterval(autoChangeSlide, time);

    leftAngle.addEventListener('click', () => {
        window.clearInterval(sliderInterval);
        const offset = window.innerWidth <= 1024 ? true : false;
        if (active === 0) active = slideList.length;
        if (offset) image.src = slideList[--active].desktop;
        else image.src = slideList[--active].mobile;
        slider();
        sliderInterval = setInterval(autoChangeSlide, time);
    });
    rightAngle.addEventListener('click', () => {
        window.clearInterval(sliderInterval);
        autoChangeSlide();
        sliderInterval = setInterval(autoChangeSlide, time);
    });
});