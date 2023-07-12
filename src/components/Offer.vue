
<script lang="ts">


export default {
    components: {

    }
}
</script>
<template>
    <section class="offer">
        <h1>Oferta</h1>
        <div class="offer-wrapper">
            <div class="main-offer">
                <h2 class="offer-title">Masaż Klasyczny</h2>
                <button id="classic" class="main-btn">Pokaż</button>
                <div class="modal classic-modal">
                    <h3>Masaż Klasyczny</h3>
                    <div class="description">
                        Do wykonania Masażu Klasycznego całego ciała wymagane jest minimum 90 minut.
                    </div>
                    <div class="info-wrapper">
                        <div class="time">
                            <div class="time-wrapper">
                                <h4>Czas Trwania</h4>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div>60 minut</div>
                            <div>90 minut</div>
                        </div>
                        <div class="price">
                            <div class="price-wrapper">
                                <h4>Cena</h4>
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <div>80 zł</div>
                            <div>120 zł</div>
                        </div>
                    </div>
                    <i class="fa fa-times-circle close-btn" aria-hidden="true"></i>
                </div>
            </div>
            <div class="main-offer">
                <h2 class="offer-title">Masaż Relaksacyjny</h2>
                <button id="relax" class="main-btn">Pokaż</button>
                <div class="modal relax-modal">
                    <h3>Masaż Relaksacyjny</h3>
                    <div class="info-wrapper">
                        <div class="time">
                            <div class="time-wrapper">
                                <h4>Czas Trwania</h4>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div>30 minut</div>
                            <div>60 minut</div>
                        </div>
                        <div class="price">
                            <div class="price-wrapper">
                                <h4>Cena</h4>
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <div>40 zł</div>
                            <div>80 zł</div>
                        </div>
                    </div>
                    <i class="fa fa-times-circle close-btn" aria-hidden="true"></i>
                </div>
            </div>
            <div class="main-offer">
                <h2 class="offer-title">Masaż Bańkami</h2>
                <button id="bubbles" class="main-btn">Pokaż</button>
                <div class="modal bubbles-modal">
                    <h3>Masaż Bańkami</h3>
                    <div class="info-wrapper">
                        <div class="time">
                            <div class="time-wrapper">
                                <h4>Czas Trwania</h4>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div>30 minut</div>
                            <div>60 minut</div>
                        </div>
                        <div class="price">
                            <div class="price-wrapper">
                                <h4>Cena</h4>
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <div>40 zł</div>
                            <div>80 zł</div>
                        </div>
                    </div>
                    <i class="fa fa-times-circle close-btn" aria-hidden="true"></i>
                </div>
            </div>
            <div class="main-offer">
                <h2 class="offer-title">Masaż Gorącymi Kamieniami</h2>
                <button id="rocks" class="main-btn">Pokaż</button>
                <div class="modal rocks-modal">
                    <h3>Masaż Gorącymi Kamieniami</h3>
                    <div class="description">
                        Do wykonania Masażu Gorącymi Kamieniami całego ciała wymagane jest minimum 60 minut.
                    </div>
                    <div class="info-wrapper">
                        <div class="time">
                            <div class="time-wrapper">
                                <h4>Czas Trwania</h4>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div>30 minut</div>
                            <div>60 minut</div>
                        </div>
                        <div class="price">
                            <div class="price-wrapper">
                                <h4>Cena</h4>
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <div>60 zł</div>
                            <div>120 zł</div>
                        </div>
                    </div>
                    <i class="fa fa-times-circle close-btn" aria-hidden="true"></i>
                </div>
            </div>
            <div class="main-offer">
                <h2 class="offer-title">Masaż Częściowy - Plecy</h2>
                <button id="back" class="main-btn">Pokaż</button>
                <div class="modal back-modal">
                    <h3>Masaż Pleców/Pleców Bańkami</h3>
                    <div class="description">
                        W ofercie wykonanie masażu pleców jak i pleców bańkami.
                    </div>
                    <div class="info-wrapper">
                        <div class="time">
                            <div class="time-wrapper">
                                <h4>Czas Trwania</h4>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div>30 minut</div>
                        </div>
                        <div class="price">
                            <div class="price-wrapper">
                                <h4>Cena</h4>
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <div>40 zł</div>
                        </div>
                    </div>
                    <i class="fa fa-times-circle close-btn" aria-hidden="true"></i>
                </div>
            </div>
            <div class="main-offer">
                <h2 class="offer-title">Masaż Częściowy - Twarz</h2>
                <button id="face" class="main-btn">Pokaż</button>
                <div class="modal face-modal">
                    <h3>Masaż Twarzy</h3>
                    <div class="info-wrapper">
                        <div class="time">
                            <div class="time-wrapper">
                                <h4>Czas Trwania</h4>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div>30 minut</div>
                        </div>
                        <div class="price">
                            <div class="price-wrapper">
                                <h4>Cena</h4>
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <div>40 zł</div>
                        </div>
                    </div>
                    <i class="fa fa-times-circle close-btn" aria-hidden="true"></i>
                </div>
            </div>
            <div class="main-offer">
                <h2 class="offer-title">Masaż Częściowy - Twarz, Szyja i Dekolt</h2>
                <button id="others-top" class="main-btn">Pokaż</button>
                <div class="modal others-top-modal">
                    <h3>Masaż Twarzy, Szyi i Dekoltu</h3>
                    <div class="info-wrapper">
                        <div class="time">
                            <div class="time-wrapper">
                                <h4>Czas Trwania</h4>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div>40 minut</div>
                        </div>
                        <div class="price">
                            <div class="price-wrapper">
                                <h4>Cena</h4>
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <div>50 zł</div>
                        </div>
                    </div>
                    <i class="fa fa-times-circle close-btn" aria-hidden="true"></i>
                </div>
            </div>
            <div class="main-offer">
                <h2 class="offer-title">Masaż Częściowy - Barki, obręcz barkowa i miedzyłopatkowa</h2>
                <button id="others-bottom" class="main-btn">Pokaż</button>
                <div class="modal others-bottom-modal">
                    <h3>Masaż Barków, obręczy barkowej i miedzyłopatkowej</h3>
                    <div class="info-wrapper">
                        <div class="time">
                            <div class="time-wrapper">
                                <h4>Czas Trwania</h4>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div>30 minut</div>
                        </div>
                        <div class="price">
                            <div class="price-wrapper">
                                <h4>Cena</h4>
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <div>40 zł</div>
                        </div>
                    </div>
                    <i class="fa fa-times-circle close-btn" aria-hidden="true"></i>
                </div>
            </div>
            <div class="main-offer">
                <h2 class="offer-title">Masaż Częściowy - Nogi</h2>
                <button id="legs" class="main-btn">Pokaż</button>
                <div class="modal legs-modal">
                    <h3>Masaż nóg</h3>
                    <div class="info-wrapper">
                        <div class="time">
                            <div class="time-wrapper">
                                <h4>Czas Trwania</h4>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div>30 minut</div>
                        </div>
                        <div class="price">
                            <div class="price-wrapper">
                                <h4>Cena</h4>
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <div>40 zł</div>
                        </div>
                    </div>
                    <i class="fa fa-times-circle close-btn" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="aside-description">
            Do każdego masażu podchodzę indywidualnie. Po rozmowie wspólnie wykreujemy drogę działania.
            Dla stałych klientów przewidziane rabaty.
        </div>
    </section>
</template>
<style lang="scss" scoped>
@import './../assets/scss/variables';
@import './../assets/scss/mixins';

section.offer {
    background-color: $primaryColor;

    h1 {
        text-align: center;
        letter-spacing: .4vh;
        font-family: $mainFont;
        font-weight: bold;
        font-size: 3rem;
        padding: $sectionSpace/2 0;
        border-bottom: 3px solid $darkColor;
        text-transform: uppercase;
        margin: 0;

        &::first-letter {
            color: $bgColor;
            text-shadow: 1px 1px 1px $darkColor;
        }
    }

    .main-offer {
        padding: $sectionSpace/2;

        .offer-title {
            text-align: left;
            text-shadow: 1px -1px 0 $bgColor,
                -1px 1px 0 $bgColor,
                1px 1px 0 $bgColor,
                -1px -1px 0 $bgColor;
        }

        .main-btn {
            width: 50%;
            margin-right: 5%;
            margin-bottom: 5%;
        }

        &:nth-of-type(odd) {
            background-color: lighten($primaryColor, 10%);

            button.main-btn {
                margin-right: 0;
                margin-left: 5%;
            }
        }
    }

    .description {
        width: 100%;
        text-align: center;
        padding: $sectionSpace;
        border-top: 2px solid $darkColor;
    }

    .aside-description {
        width: 80%;
        text-align: center;
        padding: $sectionSpace 0;
        margin: 0 10%;
    }

    .modal {
        @include popUpModal;
        display: none;
        background-color: $bgColor;
        color: $darkColor;
        box-shadow: .2rem .2rem .2rem 0 $supportColor;

        h3 {
            font-size: 1rem;
            text-align: center;
            padding: 1rem 0 1rem 1rem;
            border-bottom: 3px solid $darkColor;
        }

        .info-wrapper {
            display: flex;
            justify-content: space-evenly;
            margin: 1rem auto;
        }

        .time-wrapper,
        .price-wrapper {
            display: flex;
            margin-bottom: 1rem;

            .fa-clock-o,
            .fa-money {
                display: block;
                font-size: 1rem;
                padding-left: .5rem;
            }
        }

        .fa-times-circle {
            position: absolute;
            font-size: 2rem;
            right: -1rem;
            top: -1.3rem;
            color: $greyColor;
            padding-left: 1rem;
        }
    }

    .active {
        display: block;
    }
}

@media (min-width: 700px) {
    section.offer {
        .modal {

            .time-wrapper,
            .price-wrapper {

                .fa-clock-o,
                .fa-money {
                    font-size: 2rem;
                }
            }
        }
    }
}

@media (min-width: 1024px) {
    section.offer {
        .aside-description {
            width: 100%;
            margin: 0;
            background-color: lighten($primaryColor, 10%);
            padding: $sectionSpace;
        }

        h1 {
            font-size: 4rem;
            border-bottom: 3px solid $darkColor;
        }

        .offer-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 0;
        }

        .main-offer {
            width: 50%;

            h2.offer-title {
                font-size: 3rem;
                text-align: center;
                margin-bottom: $sectionSpace;
            }

            h3 {
                display: none;
            }

            .description {
                border: none;
                text-align: justify;
            }

            .info-wrapper {
                padding: $sectionSpace 0;
                border-top: 2px solid $darkColor;
            }

            .modal {
                display: block;
                position: relative;
                z-index: 0;
                font-family: $asideFont;
                background-color: transparent;
                box-shadow: none;
                color: $bgColor;
                text-shadow: 1px -1px 0 $darkColor,
                    -1px 1px 0 $darkColor,
                    1px 1px 0 $darkColor,
                    -1px -1px 0 $darkColor;
            }

            .main-btn {
                display: none;
            }

            .close-btn {
                display: none;
            }

            &:nth-of-type(odd) {
                background-color: transparent;
            }

            &:first-of-type,
            &:nth-of-type(4n),
            &:nth-of-type(5) {
                background-color: lighten($primaryColor, 10%);
            }
        }
    }
}
</style>