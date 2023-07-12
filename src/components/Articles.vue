<script lang="ts">

export default {
    components: {

    }
}
</script>
<template>
    <section class="articles">
        <article class="single-article">
            <div class="img-cover">
                <div class="img-content first-article-img"></div>
            </div>
            <div class="article-content">
                <h1>Masaż klasyczny</h1>
                <p>Masaż najbardziej popularny i uniwersalny. W zależności od formy i intensywności może mieć on
                    działanie: lecznicze, relaksacyjne, rozluźniające, pobudzające, czy wzmacniające mięśnie. Ma on
                    zbawienny wpływ na organizm. Działa pobudzająco na tkanki, regenerująco na mięśnie, a także
                    poprawia krążenie. Wykorzystywany jest przede wszystkim w terapii narządów ruchu.
                </p>
            </div>
        </article>
        <article class="single-article">
            <div class="img-cover">
                <div class="img-content second-article-img"></div>
            </div>
            <div class="article-content">
                <h1>Masaż relaksacyjny</h1>
                <p>Masaż relaksacyjny pobudza mięśnie, skórę i układ krążenia, a zarazem wspaniale oddziałuje na
                    układ nerwowy. Równoważy wysyłane przez ciało negatywne reakcje na stres, likwiduje napięcie
                    mięśni, przywraca prawidłowy rytm serca, właściwe krążenie i ciśnienie krwi, a nawet pomaga w
                    walce z bezsennością.</p>
            </div>
        </article>
        <article class="single-article">
            <div class="img-cover">
                <div class="img-content third-article-img"></div>
            </div>
            <div class="article-content">
                <h1>Masaż bańkami</h1>
                <p>Masaż bańką chińską to najskuteczniejszy, nieinwazyjny zabieg redukujący cellulit, nadmierną
                    tkankę tłuszczową oraz ujędrniający skórę.

                    Stosowany jest także w przypadku wielu dolegliwości bólowych, aby zmniejszyć napięcie mięśniowe,
                    uciążliwe dolegliwości bólowe kręgosłupa.</p>
            </div>
        </article>
        <article class="single-article">
            <div class="img-cover">
                <div class="img-content fourth-article-img"></div>
            </div>
            <div class="article-content">
                <h1>Masaż gorącymi kamieniami</h1>
                <p>Zabieg relaksacyjno - leczniczy; pod wpływem wysokiej temperatury kamieni pochodzenia
                    wulkanicznego rozluźniają się mięśnie, poprawia ukrwienie, oczyszcza organizm z toksyn, a co
                    najważniejsze likwiduje stres, uspokaja i poprawia samopoczucie.

                </p>
            </div>
        </article>
        <article class="single-article">
            <div class="img-cover">
                <div class="img-content fifth-article-img"></div>
            </div>
            <div class="article-content">
                <h1>Zalety masażu</h1>
                <p>Jest ich naprawę sporo, zalety masażu nie kończą się na redukcji bólu i ogólnemu odprężeniu. Aby
                    osiągnąć długotrawałe i wyraźne efekty należy systematycznie oddawać się w ręce masażysty.
                    Korzyści których możemy się spodziewać to:</p>
                <ul>
                    <li>usprawnienie przepływu krwi,</li>
                    <li>ujędrnienie skóry,</li>
                    <li>przyśpieszenie procesów regeneracyjnych tkanek,</li>
                    <li>uelastycznienie,rozluźnienie mięśni,</li>
                    <li>zwiększanie ruchomość stawów, wzmocnienie więzadeł,</li>
                    <li>poprawienie jakości snu oraz zapobieganie bezsenności,</li>
                    <li>uśmierzenie wszelakich bóli,</li>
                    <li>łagodzenie skutków stresu,</li>
                    <li>uspokojenie i wyciszenie,</li>
                    <li>pomoc w wyeliminowaniu migrenowych bólów głowy.</li>
                </ul>
            </div>
        </article>
    </section>
</template>
<style lang="scss" scoped>
@import './../assets/scss/variables';

section.articles {
    background-color: $bgColor;
    padding: $sectionSpace 0;

    article.single-article {
        width: 80%;
        margin: $sectionSpace auto;

        &.scroll-top {
            transform: translateX(0) scale(1);
            visibility: visible;
        }

        .img-cover {
            background-color: black;
            width: 70vw;
            height: 70vw;
            border-radius: 50%;
            margin: 0 auto;

            .img-content {
                background-size: cover;
                background-position: 50% 50%;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                box-shadow: .5rem .5rem .8rem .1rem $primaryColor;
                opacity: .6;
            }

            .first-article-img {
                background-image: url(../img/mobile/classic.WebP);
            }

            .second-article-img {
                background-image: url(../img/mobile/relax.WebP);
            }

            .third-article-img {
                background-image: url(../img/mobile/bubbles.WebP);
            }

            .fourth-article-img {
                background-image: url(../img/mobile/rocks.WebP);
            }

            .fifth-article-img {
                background-image: url(../img/mobile/adventages.WebP);
            }
        }

        h1 {
            letter-spacing: 3px;
            font-family: $mainFont;
            font-weight: bold;
            font-size: 1.7rem;
            text-align: center;
            padding: $sectionSpace;
            border-bottom: 3px solid $darkColor;
        }

        p {
            padding: $sectionSpace 0;
            text-align: justify;
            text-align-last: center;
        }

        ul {
            list-style: none;

            li::before {
                content: '';
                display: inline-block;
                margin-right: 1vh;
                margin-bottom: .5vh;
                background-color: $darkColor;
                width: 1vh;
                height: 1vh;
            }
        }
    }
}

@media (max-width: 300px) {
    section.articles {
        article.single-article {
            .img-cover {
                width: 70%;
                height: 20vh;

                .img-content {
                    height: 20vh;
                }
            }

            h1 {
                font-size: 1.2rem;
            }

            p {
                font-size: 1rem;
            }
        }
    }
}

@media (max-height: 300px) and (orientation: landscape) {
    section.articles {
        article.single-article {
            .img-cover {
                width: 60%;
                height: 60vh;

                .img-content {
                    height: 60vh;
                }
            }
        }
    }
}

@media (min-width: 540px) {
    section.articles {
        article.single-article {
            .img-cover {
                width: 70%;
                height: 50vh;

                .img-content {
                    height: 50vh;
                }
            }

            h1 {
                font-size: 2.5rem;
            }

            p {
                font-size: 1.5rem;
            }
        }
    }
}

@media (min-width: 700px) {
    section.articles {
        article.single-article {
            .img-cover {
                width: 70%;
                height: 50vh;

                .img-content {
                    height: 50vh;
                }
            }

            h1 {
                font-size: 3.5rem;
            }

            p {
                font-size: 2rem;
            }
        }
    }
}

@media (min-width: 1024px) {

    section.articles {
        margin-top: 0;
        margin-bottom: 0;
        padding: 3vh;

        article.single-article {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin-bottom: $sectionSpace;
            transform: translateX(1500px) scale(0);
            transition: 1s;
            visibility: hidden;

            .img-cover {
                width: 30%;
                height: 40vh;
                margin-left: $sectionSpace;

                .img-content {
                    height: 40vh;
                }

                .first-article-img {
                    background-image: url(../img/desktop/classic.WebP);
                }

                .second-article-img {
                    background-image: url(../img/desktop/relax.WebP);
                }

                .third-article-img {
                    background-image: url(../img/desktop/bubbles.WebP);
                }

                .fourth-article-img {
                    background-image: url(../img/desktop/rocks.WebP);
                }

                .fifth-article-img {
                    background-image: url(../img/desktop/adventages.WebP);
                }
            }

            .article-content {
                flex-basis: 70%;
                margin-left: $sectionSpace;

                h1 {
                    font-size: 2rem;
                }

                p {
                    font-size: 1.3rem;
                }
            }
        }
    }

    section.articles article:nth-child(2n) .img-cover {
        order: 2;
        margin-right: $sectionSpace;

        .img-content {
            box-shadow: .5rem .5rem .8rem .1rem $primaryColor;
        }
    }
}
</style>