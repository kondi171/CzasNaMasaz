<script lang="ts">
export default {
    components: {

    }
}
</script>

<template>
    <section class="about">
        <img src="img/desktop/Marcin-Desktop.WebP" alt="" class="author-img">
        <div class="about-wrapper">
            <h1 class="author-name">Marcin Kasiński</h1>
            <p class="about-me">Witaj!
                Nazywam się Marcin Kasiński. Jestem absolwentem Akademii Sztuki Masażu <strong>MENOS</strong>.
                Masaż dla mnie to nie tylko praca, ale też pasja w której mogę się spełniać. Lubię pomagać ludziom
                przezwyciężyć ich dolegliwości lub pomóc się zrelaksować.
                Do każdego masażu podchodzę indywidualnie, oferując szeroki, profesjonalny wachlarz masaży.
                <strong>Zapraszam do kontaktu!</strong>
            </p>
        </div>
    </section>
</template>

<style lang="scss" scoped>
@import './../assets/scss/variables';

section.about {
    background-color: $supportColor;

    img.author-img {
        display: block;
        width: 50%;
        height: 50%;
        padding-top: $sectionSpace;
        margin: 0 auto;
    }

    h1.author-name {
        font-family: $mainFont;
        font-weight: bold;
        text-align: center;
        padding: 1rem 0;
        letter-spacing: .4vh;

        &::before,
        &::after {
            font-size: 2rem;
            content: '-';
        }
    }

    p.about-me {
        display: block;
        width: 95%;
        padding: $sectionSpace;
        padding-top: 0;
        margin: 0 auto;
        text-align: justify;
        text-align-last: center;
    }
}

@media (min-width: 540px) {
    section.about {
        img.author-img {
            width: 30%;
            height: 30%;
        }
    }
}

@media (min-width: 1024px) {
    section.about {
        height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;

        img.author-img {
            transform: translateX(-20%);
            flex-basis: 30%;
            width: 50vh;
            height: 70vh;
        }

        .about-wrapper {
            transform: translateX(-10%);
        }

        h1.author-name {
            font-size: 4rem;
            margin-bottom: 1vh;
        }

        p.about-me {
            width: 100%;
            margin: 0 auto 1rem auto;
            font-size: 1.6rem;
            line-height: 150%;
        }
    }
}
</style>
