
<script lang="ts">

export default {
    components: {

    }
}
</script>
<template>
    <section class="contact">
        <h1>Kontakt</h1>
        <form class="overlay" method="POST" action="https://formspree.io/f/mgepypzr">
            <h2>Napisz do mnie!</h2>
            <label for="name">
                <span class="label-span">Imię:</span>
                <input name="name" type="text" placeholder="Podaj imię...">
            </label>
            <label for="email">
                <span class="label-span">E-mail:</span>
                <input name="email" type="email" placeholder="Podaj e-mail...">
            </label>
            <label for="phone">
                <span class="label-span">Nr telefonu:</span>
                <input name="phone" type="text" placeholder="Podaj nr telefonu...">
            </label>
            <label for="message">
                <span class="label-span">Wiadomość:</span>
                <textarea name="message" maxlength="300" cols="30" rows="10"></textarea>
            </label>
            <button class="main-btn" id="send-btn">Wyślij</button>
            <div class="iferror">
                W przypadku nie powodzenia wysłania wiadomości, jestem dostępny również:
            </div>
            <div class="social-media">
                <div class="social-mail">
                    <b class="fa fa-envelope" aria-hidden="true"></b>
                    <span class="mail">marcin.kasinski@opoczta.pl
                    </span>
                </div>
                <div class="social-phone">
                    <b class="fa fa-phone" aria-hidden="true"></b>
                    <span class="phone">+ 48 799 868 297</span>
                </div>
            </div>
        </form>
        <br />
    </section>
</template>
<style lang="scss" scoped>
@import './../assets/scss/variables';

section.contact {
    background-color: $greyColor;
    background-image: url(../img/mobile/contact.WebP);
    background-repeat: no-repeat;
    background-position: 50% 50%;
    background-size: cover;

    h1 {
        text-align: center;
        letter-spacing: .4vh;
        font-family: $mainFont;
        font-weight: bold;
        font-size: 3rem;
        padding: $sectionSpace/2 0;
        border-bottom: 3px solid $primaryColor;
        text-transform: uppercase;
        color: $bgColor;
        margin: 0;

        &::first-letter {
            color: $primaryColor;
            text-shadow: 1px 1px 1px $darkColor;
        }
    }

    form.overlay {
        width: 80%;
        margin: $sectionSpace auto 0 auto;
        padding: $sectionSpace 0;
        background-color: $primaryColor;
        opacity: .9;
        border-radius: 3px;
        box-shadow: 1px 1px 10px 1px $darkColor;

        h2 {
            font-family: $mainFont;
            text-align: center;
            border-bottom: 2px solid $darkColor;
            padding-bottom: 10px;
        }

        .label-span {
            display: block;
            text-align: center;
            padding: 10px 0;
        }

        input {
            width: 70%;
            display: block;
            margin: 0 auto;
            border-radius: 3px;
            padding: 5px;
            background-color: $bgColor;
            border: 1px solid $primaryColor;

            &::placeholder {
                text-align: center;
                font-size: 1.2rem;
            }
        }

        .main-btn {
            margin: $sectionSpace auto $sectionSpace/2 auto;
        }

        textarea {
            display: block;
            margin: 0 auto;
            border-radius: 3px;
            padding: 5px;
            background-color: $bgColor;
            border: 1px solid $primaryColor;
            min-width: 90%;
            max-width: 90%;
            min-height: 40vh;
            max-height: 40vh;
        }
    }

    .iferror {
        text-align: center;
        padding: .5rem;
    }

    .social-media {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

        .social-mail,
        .social-phone {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        b {
            padding-right: 1rem;
            line-height: 150%;
        }

        b,
        span {
            font-size: 1.3rem;
            color: $darkColor !important;
            text-decoration: none !important;
        }
    }
}

@media (max-width: 280px) {
    section.contact {
        .social-media {

            b,
            span {
                font-size: 1rem;
            }
        }
    }
}

@media (min-width: 700px) {
    section.contact {
        background-image: url(../img/desktop/contact.WebP);

        form.overlay {
            .social-media {

                i,
                span {
                    font-size: 1.4rem;
                }
            }
        }
    }
}

@media (min-width: 1024px) {
    section.contact {
        form.overlay {
            width: 50%;
            margin: $sectionSpace auto;
        }
    }
}</style>