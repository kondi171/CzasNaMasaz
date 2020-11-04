<?php session_start(); $nav = true; ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="Masaż, Masaż Klasyczny, Masaż Relaksacyjny, Masaż Poszczególnych Części Ciała, Masaż Bańkami, Masaż Gorącymi Kamieniami, Możliwość Dojazdu, Kielce, Powiat Kielecki, Powiat Konecki, Tanio, Marcin Kasiński">
    <meta name="description"
        content="Wykonanie masażu poszczególnych części ciała w wersji klasycznej oraz relaksacyjnej. Tanie i profesjonalne wykonanie z możliwością dojazdu na terenie powiatu Kieleckiego i Koneckiego.">
    <meta name="author" content="Konrad Nowak">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.min.css">
    <title>CzasNaMasaż.pl</title>
</head>

<body <?php if(isset($_SESSION['success']) || isset($_SESSION['error'])) echo 'class="curtain"';?>>
    <div class="wrapper">
        <div class="success-modal<?php if(isset($_SESSION['success'])) echo ' active-modal';?>">
            <h3>Udało się!</h3>
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
            <div class="description">Operacja Wykonana!</div>
            <?php 
                if(isset($_SESSION['success'])) $nav = false;
                unset($_SESSION['success']); ?> 
            <i class="fa fa-times-circle close-btn" aria-hidden="true"></i>
        </div>
        <div class="error-modal<?php if(isset($_SESSION['error'])) echo ' active-modal';?>">
            <h3>Coś poszło nie tak...</h3>
            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
            <div class="description">Nie udało się, spróbuj ponownie.</div>
            <ul class="description">
            <?php 
                if(isset($_SESSION['dbProblem'])) {
                    echo ' <li>Błąd serwera!</li>';
                    unset($_SESSION['dbProblem']);
                }
                if(isset($_SESSION['errorName'])) {
                    echo '<li>'.$_SESSION['errorName'].'</li>';
                    unset($_SESSION['errorName']);
                }
                if(isset($_SESSION['errorMail'])) {
                    echo '<li>'.$_SESSION['errorMail'].'</li>';
                    unset($_SESSION['errorMail']);
                }
                if(isset($_SESSION['errorPhone'])) {
                    echo '<li>'.$_SESSION['errorPhone'].'</li>';
                    unset($_SESSION['errorPhone']);
                }
                if(isset($_SESSION['errorMessage'])) {
                    echo '<li>'.$_SESSION['errorMessage'].'</li>';
                    unset($_SESSION['errorMessage']);
                }
                if(isset($_SESSION['error'])) $nav = false;
                unset($_SESSION['error']);
            ?> 
            </ul>
            <i class="fa fa-times-circle close-btn" aria-hidden="true"></i>
        </div>    
        <header class="main-header slide-1">
            <h1>Czas Na Masaż</h1>
            <nav class="img-nav">
                <img class="main-slide" src="img/mobile/header1.WebP" alt="slajd nagłówkowy">
                <i class="fa fa-angle-left"></i>
                <i class="fa fa-angle-right"></i>
                <div class="dots">
                    <i class="first-dot active-dot"></i>
                    <i class="second-dot"></i>
                    <i class="third-dot"></i>
                </div>
            </nav>
        </header>
        <nav class="main-nav<?php if((!isset($_SESSION['success']) || !isset($_SESSION['error'])) && $nav != true) echo ' modal-active';?>">
            <div class="hamburger-btn">
                <div class="top-paddle"></div>
                <div class="middle-paddle"></div>
                <div class="bottom-paddle"></div>
            </div>
            <h1 id="scrollTop">Czas<span>Na</span>Masaż<span>.pl</span></h1>
            <ul class="nav-list">
                <li class="item-list articles-item">Artykuły</li>
                <li class="item-list about-item">O mnie</li>
                <li class="item-list offer-item">Oferta</li>
                <li class="item-list contact-item">Kontakt</li>
            </ul>
        </nav>
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
        <section class="about">
            <img src="img/desktop/Marcin-Desktop.WebP" alt="" class="author-img">
            <div class="about-wrapper">
                <h1 class="author-name">Marcin Kasiński</h1>
                <p class="about-me">Witaj!
                    Nazywam się Marcin Kasiński. Jestem absolwentem Akademii Sztuki Masażu <strong>MENOS</strong>.
                    Masaż dla mnie to nie tylko praca, ale też pasja w której mogę się spełniać. Lubię pomagać ludziom
                    przezwyciężyć ich dolegliwości lub pomóc się zrelaksować.
                    Do każdego masażu podchodzę indywidualnie, oferując szeroki, profesjonalny wachlarz masaży.
                    <strong>Zapraszam do kontaktu!</strong></p>
            </div>
        </section>
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
        <section class="contact">
            <h1>Kontakt</h1>
            <form class="overlay" method="POST" action="php/contact.php">
                <h2>Napisz do mnie!</h2>
                <label for="name">
                    <span class="label-span">Imię:</span>
                    <input name="name" value="<?php if(isset($_SESSION['rememberName'])) echo $_SESSION['rememberName']; unset($_SESSION['rememberName']); ?>" type="text" placeholder="Podaj imię...">
                </label>
                <label for="email">
                    <span class="label-span">E-mail:</span>
                    <input name="email" value="<?php if(isset($_SESSION['rememberMail'])) echo $_SESSION['rememberMail']; unset($_SESSION['rememberMail']); ?>" type="email" placeholder="Podaj e-mail...">
                </label>
                <label for="phone">
                    <span class="label-span">Nr telefonu:</span>
                    <input name="phone" value="<?php if(isset($_SESSION['rememberPhone'])) echo $_SESSION['rememberPhone']; unset($_SESSION['rememberMail']); ?>" type="text" placeholder="Podaj nr telefonu...">
                </label>
                <label for="message">
                    <span class="label-span">Wiadomość:</span>
                    <textarea name="message" maxlength="300" cols="30" rows="10"><?php if(isset($_SESSION['rememberMessage'])) echo $_SESSION['rememberMessage']; unset($_SESSION['rememberMessage']); ?></textarea>
                </label>
                <button class="main-btn" id="send-btn">Wyślij</button>
                <div class="social-media">
                    <div class="social-mail">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span class="mail">marcin.kasinski@opoczta.pl
                        </span>
                    </div>
                    <div class="social-phone">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span class="phone">+ 48 799 868 297</span>
                    </div>
                </div>
            </form>
            </br>
        </section>
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
                Icons made by <a target="_blank" href="https://www.flaticon.com/authors/iconixar"
                    title="iconixar">iconixar</a> from <a target="_blank" href="https://www.flaticon.com/"
                    title="Flaticon"> www.flaticon.com</a>
            </div>
            <div class="author">WebMaster Konrad Nowak - Kondi.171@wp.pl</div>
        </footer><
   </div>
    <script src="js/hamburger.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/modals.js"></script>
    <script src="js/scrollTop.js"></script>
</body>

</html>