<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="./image/logo.png" type="image/x-icon">

    <!-- BOXICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="./style/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="./style/style.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>WarStock</title>

</head>
<body>

    <!-- HEADER -->
    <header class="header" id="header">
        <?php require('./vue/header.php'); ?>
    </header>
   
    <!-- CART -->
    <div class="cart" id="cart">
        <?=require('./vue/panier.php');?>
    </div>

    <!-- MAIN -->
    <main class="main">
        <!-- HOME -->
        <section class="home" id="home">
            <div class="home__container container grid">
                <div class="home__img-bg">
                    <img src="./image/vehicule.png" alt="" class="home__img">
                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        Facebook
                    </a>
                    <a href="https://twitter.com/Musled75" target="_blank" class="home__social-link">
                        Twitter
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        Instagram
                    </a>
                </div>

                <div class="home__data">
                    <h1 class="home__title">
                        NOUVEAU VEHICULE <br> COLLECTIONS B720 
                    </h1>
                    <p class="home__description">
                        Nouveau stock de véhicule serie B720 arrivé dans nos garages et disponible sur le site.
                    </p>
                    <span class="home__price">1214€</span>

                    <div class="home__btns">
                        <a href="#" class="button button--gray button--small">
                            Découvrir
                        </a>

                        <button class="button home__button">Ajouter au panier</button>
                    </div>
                </div>
            </div>
        </section>


        <!-- FEATURED -->
        <section class="featured section container" id="featured">
            <h2 class="section__title">
                En tête d'achat
            </h2>

            <div class="featured__container grid">
                <article class="featured__card">
                    <span class="featured__tag">Solde</span>
                    
                    <img src="./image/cat2.png" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Jazzmaster</h3>
                        <span class="featured__price">1050€</span>
                    </div>

                    <button class="button featured__button">
                        Ajouter au panier
                    </button>
                </article>

                <article class="featured__card">
                    <span class="featured__tag">Solde</span>
                    
                    <img src="./image/cat2.png" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Ingersoll</h3>
                        <span class="featured__price">250€</span>
                    </div>

                    <button class="button featured__button">
                        Ajouter au panier
                    </button>
                </article>

                <article class="featured__card">
                    <span class="featured__tag">Solde</span>
                    
                    <img src="./image/cat2.png" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Rose gold</h3>
                        <span class="featured__price">890€</span>
                    </div>

                    <button class="button featured__button">
                        Ajouter au panier
                    </button>
                </article>
            </div>
        </section>

        <!-- STORY -->
        <section class="story section container">
            <div class="story__container grid">
                <div class="story__data">
                    <h2 class="section__title story__section-title">
                        Notre activité
                    </h2>

                    <h1 class="story__title">
                        Des véhicules aux normes actuelle
                    </h1>

                    <p class="story__description">
                        Les véhicules vendus respecte les normes euroopéeennes et dispose de technologie dernier cri, à découvrir maintenants.
                    </p>

                    <a href="#" class="button button--small">Découvrir</a>
                </div>

                <div class="story__images">
                    <img src="./image/blindax.jpeg" alt="" class="story__img">
                    <div class="story__square"></div>
                </div>
            </div>
        </section>

        <!-- PRODUITS -->
        <section class="products section container" id="products">
            <h2 class="section__title">
                Nos Véhicules
            </h2>

            <div class="products__container grid">
                <article class="products__card">
                    <a href="./vue/catégorie.php"><img src="./image/cat2.png" alt="" class="products__img"></a>
                    
                    <h3 class="products__title">Véhicules Blindés</h3>

                </article>

                <article class="products__card">
                <a href="./vue/catégorie.php"><img src="./image/cat2.png" alt="" class="products__img"></a>

                    <h3 class="products__title">Véhicules légers</h3>

                </article>

                <article class="products__card">
                <a href="./vue/catégorie.php"><img src="./image/cat2.png" alt="" class="products__img"></a>

                    <h3 class="products__title">Véhicules Lourds</h3>

                </article>

                <article class="products__card">
                <a href="./vue/catégorie.php"><img src="./image/cat2.png" alt="" class="products__img"></a>

                    <h3 class="products__title">Camion, Pick-up</h3>

                </article>

                <article class="products__card">
                <a href="./vue/catégorie.php"><img src="./image/cat2.png" alt="" class="products__img"></a>

                    <h3 class="products__title">Motos</h3>

                </article>

                <article class="products__card">
                <a href="./vue/catégorie.php"><img src="./image/cat2.png" alt="" class="products__img"></a>

                    <h3 class="products__title">Pièces, Accessoires</h3>

                </article>
            </div>
        </section>

        <!-- TESTIMONIAL -->
        <section class="testimonial section container">
            <div class="testimonial__container grid">
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left' ></i>
                            </div>

                            <p class="testimonial__description">
                                Les meilleurs véhicules blindés sont sur ce site. WarStock apporte la même attention 
                                aux détails et à la sécurité que si c'était l'une de ses luxueuses limousines. Les prix
                                 sont au niveau de la production et reste très compétitif sur le marcher.
                            </p>
                            <h3 class="testimonial__date">27 mars 2021</h3>

                            <div class="testimonial__perfil">
                                <img src="./image/testimonial1.jpg" alt="" class="testimonial__perfil-img">

                                <div class="testimonial__perfil-data">
                                    <span class="testimonial__perfil-name">Lee Joe</span>
                                    <span class="testimonial__perfil-detail">PDG d'entreprise</span>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left' ></i>
                            </div>

                             <p class="testimonial__description">
                                 Véhicule parfait, les meilleurs du marché !
                             </p>
                            <h3 class="testimonial__date">10 mai 2021</h3>

                            <div class="testimonial__perfil">
                                 <img src="./image/testimonial2.jpg" alt="" class="testimonial__perfil-img">

                                <div class="testimonial__perfil-data">
                                      <span class="testimonial__perfil-name">NJR</span>
                                      <span class="testimonial__perfil-detail">Paris ballon d'or</span>
                                </div>
                           </div>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left' ></i>
                            </div>

                            <p class="testimonial__description">
                                Voiture aux normes et en très bon état. Conduite très appréciable de par sa qualité.
                            </p>
                            <h3 class="testimonial__date">28 Janvier 2022</h3>

                            <div class="testimonial__perfil">
                                <img src="./image/testimonial3.jpg" alt="" class="testimonial__perfil-img">

                                <div class="testimonial__perfil-data">
                                    <span class="testimonial__perfil-name">Jordan</span>
                                    <span class="testimonial__perfil-detail">Architect logiciel IBM</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-next">
                        <i class='bx bx-right-arrow-alt' ></i>
                    </div>
                    
                    <div class="swiper-button-prev">
                        <i class='bx bx-left-arrow-alt' ></i>
                    </div>
                </div>

                <div class="testimonial__images">
                    <div class="testimonial__square"></div>
                    <img src="./image/moto.jpg" alt="" class="testimonial__img">
                </div>
            </div>
        </section>

        <!-- NEW -->
        <section class="new section container" id="new">
            <h2 class="section__title">
                Nouveauté 
            </h2>

            <div class="new__container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        <article class="new__card swiper-slide">
                            <span class="new__tag">Nouveau</span>

                            <img src="./image/cat2.png" alt="" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Logines rose</h3>
                                <span class="new__price">980€</span>
                            </div>

                            <button class="button new__button">Ajouter au panier</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">Nouveau</span>

                            <img src="./image/cat2.png" alt="" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Jazzmaster</h3>
                                <span class="new__price">1150€</span>
                            </div>

                            <button class="button new__button">Ajouter au panier</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">Nouveau</span>

                            <img src="./image/cat2.png" alt="" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Dreyfuss gold</h3>
                                <span class="new__price">1590€</span>
                            </div>

                            <button class="button new__button">Ajouter au panier</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">Nouveau</span>

                            <img src="./image/cat2.png" alt="" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Portuguese rose</h3>
                                <span class="new__price">1590€</span>
                            </div>

                            <button class="button new__button">Ajouter au panier</button>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- NEWSLETTER -->
        <section class="newsletter section container">
            <div class="newsletter__bg grid">
                <div>
                    <h2 class="newsletter__title">
                        Inscrivez vous a notre <br> Newsletter
                    </h2>
                    <p class="newsletter__description">
                        Ne manquer pas nos offres du moment. Abonnez vous à notre
                        Newsletter pour avoir les meilleurs offres, coupons, cadeau 
                        et réduction.
                    </p>
                </div>

                <form action="" class="newsletter__subscribe">
                    <input type="email" placeholder="Entrer votre email" class="newsletter__input">
                    <button class="button">
                        S'inscrire
                    </button>
                </form>
            </div>
        </section>

    </main>

     <!-- FOOTER -->
     <footer class="footer section">
        <?php require('./vue/footer.php'); ?>
     </footer>

    <!-- SCROLL UP -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>

    <!-- SWIPER JS -->
    <script src="./js/swiper-bundle.min.js"></script>

    <!-- MAIN JS -->
    <script src="./js/main.js"></script>
</body>
</html>
