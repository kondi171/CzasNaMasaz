document.addEventListener('DOMContentLoaded', () => {

    const articles = document.querySelectorAll('article.single-article');
    const mainLogo = document.getElementById('scrollTop');
    const numberOfArticles = articles.length;
    const yOffset = window.innerHeight;
    window.addEventListener('scroll', () => {
        for (i = 1; i <= numberOfArticles; i++) {
            if (window.scrollY > ((yOffset / 2.2) * i)) {
                articles[i - 1].classList.add('scroll-top');
            }
        }
    });
    mainLogo.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
