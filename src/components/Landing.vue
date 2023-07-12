<script lang="ts">
import Header from './Header.vue';
import Nav from './Nav.vue';
import Articles from './Articles.vue';
import About from './About.vue';
import Offer from './Offer.vue';
import Contact from './Contact.vue';
import Footer from './Footer.vue';

export default {
    components: {
        Header,
        Nav,
        Articles,
        About,
        Offer,
        Contact,
        Footer
    }
}
</script>
<template>
    <div class="wrapper">
        <Header />
        <Nav />
        <Articles />
        <About />
        <Offer />
        <Contact />
        <Footer />
    </div>
</template>
<style lang="scss" scoped></style>