<script lang="ts">

export default {
    components: {
    }
}
</script>
<template>
    <footer class="footer">
        <div class="sources">
            <h5>Źródła</h5>
            Obraz <a target="_blank"
                href="https://pixabay.com/pl/users/rhythmuswege-185829/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=285587">
                Jürgen Rübig</a> z <a target="_blank"
                href="https://pixabay.com/pl/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=285587">
                Pixabay</a>
            Obraz <a target="_blank"
                href="https://pixabay.com/pl/users/Mariolh-62451/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=567021">
                Mariolh</a> z <a target="_blank"
                href="https://pixabay.com/pl/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=567021">
                Pixabay</a>
            Obraz <a target="_blank"
                href="https://pixabay.com/pl/users/rhythmuswege-185829/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=285590">
                Jürgen Rübig</a> z <a target="_blank"
                href="https://pixabay.com/pl/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=285590">
                Pixabay</a>
            Obraz <a target="_blank"
                href="https://pixabay.com/pl/users/whitesession-4645995/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2768833">
                Angelo Esslinger</a> z <a target="_blank"
                href="https://pixabay.com/pl/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2768833">
                Pixabay</a>
            Obraz <a target="_blank"
                href="https://pixabay.com/pl/users/nnoeki-609630/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=589774">
                Nico H.</a> z <a target="_blank"
                href="https://pixabay.com/pl/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=589774">
                Pixabay</a>
            Obraz <a target="_blank"
                href="https://pixabay.com/pl/users/kerdkanno-1334070/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=906141">
                Seksak Kerdkanno</a> z <a target="_blank"
                href="https://pixabay.com/pl/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=906141">
                Pixabay</a>
            Obraz <a target="_blank"
                href="https://pixabay.com/pl/users/socialbutterflymmg-5413276/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3184610">
                Social Butterfly</a> z <a target="_blank"
                href="https://pixabay.com/pl/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3184610">
                Pixabay</a>
            Obraz <a target="_blank"
                href="https://pixabay.com/pl/users/guvo59-9285194/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3715860">
                Gundula Vogel</a> z <a target="_blank"
                href="https://pixabay.com/pl/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3715860">
                Pixabay</a>
            Obraz <a target="_blank"
                href="https://pixabay.com/pl/users/satynek-8757289/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3984013">
                Ada K</a> z <a target="_blank"
                href="https://pixabay.com/pl/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3984013">
                Pixabay</a>
            Icons made by <a target="_blank" href="https://www.flaticon.com/authors/iconixar" title="iconixar">iconixar</a>
            from <a target="_blank" href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
        </div>
        <div class="author">WebMaster Konrad Nowak - Kondi.171@wp.pl</div>
    </footer>
</template>
<style lang="scss" scoped>
@import './../assets/scss/variables';

footer.footer {
    color: $greyColor;
    background-color: $darkColor;
    text-align: center;

    .sources {
        width: 90%;
        padding: .3rem;
        margin: auto;

        a {
            text-decoration: none;
            padding: .3rem;
            color: $primaryColor;

            &:visited {
                color: $supportColor;
            }
        }
    }

    .author {
        padding: .3rem 0;
        background-color: #000;
    }
}
</style>