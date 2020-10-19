document.addEventListener('DOMContentLoaded', () => {

    const articles = document.querySelectorAll('article.single-article');
    const numberOfArticles = articles.length;
    const yOffset = -(window.innerHeight / 10);
    console.log(articles);
    articles.forEach(article => {
        //if (window.scrollY > 600) {
        article.classList.add('scroll-top');
        //}
    });
    console.log(window.scrollY);
    //console.log(articles.scrollTop);
});