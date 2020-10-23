document.addEventListener('DOMContentLoaded', () => {
    const slideList = [{
        desktop: "../img/desktop/header1.WebP",
        mobile: "../img/mobile/header1.WebP"
    },
    {
        desktop: "../img/desktop/header2.WebP",
        mobile: "../img/mobile/header2.WebP"
    },
    {
        desktop: "../img/desktop/header3.WebP",
        mobile: "../img/mobile/header3.WebP"
    }];
    const authorImgContent = [{
        desktop: "../img/desktop/Marcin-Desktop.WebP",
        mobile: "../img/mobile/Marcin-Mobile.WebP"
    }];

    let active = 0;
    const time = 4000;
    const image = document.querySelector('img.main-slide');
    const dots = [...document.querySelectorAll('.dots i')];
    const leftAngle = document.querySelector('.fa-angle-left');
    const rightAngle = document.querySelector('.fa-angle-right');
    const authorImg = document.querySelector('.author-img');
    const offset = window.innerWidth >= 1024 ? true : false;

    if (offset) {
        image.src = slideList[active].desktop;
        authorImg.src = authorImgContent[0].desktop;
    } else {
        image.src = slideList[active].mobile;
        authorImg.src = authorImgContent[0].mobile;
    }

    const changeDot = () => {
        const activeDot = dots.findIndex(dot => dot.classList.contains('active-dot'));
        dots[activeDot].classList.remove('active-dot');
        dots[active].classList.add('active-dot');
    }

    const autoChangeSlide = () => {
        active++;
        const offset = window.innerWidth >= 1024 ? true : false;
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
        changeDot();
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
    dots.forEach((dot, index) => {
        index++;
        dot.addEventListener('click', () => {
            window.clearInterval(sliderInterval);
            if (index === 1) active = 2;
            if (index === 2) active = 0;
            if (index === 3) active = 1;
            autoChangeSlide();
            sliderInterval = setInterval(autoChangeSlide, time);
        });
    });
});