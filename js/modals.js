document.addEventListener('DOMContentLoaded', () => {
    //Overlay
    const bodyOverlay = document.body;
    const nav = document.querySelector('nav.main-nav');

    //btn's
    const classicBtn = document.getElementById('classic');
    const relaxBtn = document.getElementById('relax');
    const bubblesBtn = document.getElementById('bubbles');
    const rocksBtn = document.getElementById('rocks');
    const backBtn = document.getElementById('back');
    const faceBtn = document.getElementById('face');
    const othersTopBtn = document.getElementById('others-top');
    const othersBottomBtn = document.getElementById('others-bottom');
    const legsBtn = document.getElementById('legs');
    const closeBtn = document.querySelectorAll('.close-btn');
    //Modal's
    const classicModal = document.querySelector('.classic-modal');
    const relaxModal = document.querySelector('.relax-modal');
    const bubblesModal = document.querySelector('.bubbles-modal');
    const rocksModal = document.querySelector('.rocks-modal');
    const backModal = document.querySelector('.back-modal');
    const faceModal = document.querySelector('.face-modal');
    const othersTopModal = document.querySelector('.others-top-modal');
    const othersBottomModal = document.querySelector('.others-bottom-modal');
    const legsModal = document.querySelector('.legs-modal');
    const successModal = document.querySelector('.success-modal');
    const errorModal = document.querySelector('.error-modal');
    const toogleModals = () => {
        bodyOverlay.classList.toggle('curtain');
        nav.classList.toggle('modal-active');
    }
    //Listeners
    classicBtn.addEventListener('click', () => {
        toogleModals();
        classicModal.classList.add('active');
    });
    relaxBtn.addEventListener('click', () => {
        toogleModals();
        relaxModal.classList.add('active');
    });
    bubblesBtn.addEventListener('click', () => {
        toogleModals();
        bubblesModal.classList.add('active');
    });
    rocksBtn.addEventListener('click', () => {
        toogleModals();
        rocksModal.classList.add('active');
    });
    backBtn.addEventListener('click', () => {
        toogleModals();
        backModal.classList.add('active');
    });
    faceBtn.addEventListener('click', () => {
        toogleModals();
        faceModal.classList.add('active');
    });
    othersTopBtn.addEventListener('click', () => {
        toogleModals();
        othersTopModal.classList.add('active');
    });
    othersBottomBtn.addEventListener('click', () => {
        toogleModals();
        othersBottomModal.classList.add('active');
    });
    legsBtn.addEventListener('click', () => {
        toogleModals();
        legsModal.classList.add('active');
    });
    closeBtn.forEach(btn => {
        btn.addEventListener('click', () => {
            toogleModals();
            classicModal.classList.remove('active');
            relaxModal.classList.remove('active');
            bubblesModal.classList.remove('active');
            rocksModal.classList.remove('active');
            backModal.classList.remove('active');
            faceModal.classList.remove('active');
            othersTopModal.classList.remove('active');
            othersBottomModal.classList.remove('active');
            legsModal.classList.remove('active');
            errorModal.classList.remove('active-modal');
            successModal.classList.remove('active-modal');
        });
    });
});