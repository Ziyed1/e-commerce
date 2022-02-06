<?php include('header.php');?>


<body>
    
<div class="cart" id="cart">
        <?php require('../vue/panier.php');?>
</div>


<section class="featured section container" id="products">
    <div class="featured__container grid">
                <article class="featured__card">
                    
                    <img src="../image/cat2.png" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Jazzmaster</h3>
                        <span class="featured__price">1050€</span>
                    </div>

                    <button class="button featured__button">
                        Ajouter au panier
                    </button>
                </article>

                <article class="featured__card">
                    
                    <img src="../image/cat2.png" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Ingersoll</h3>
                        <span class="featured__price">250€</span>
                    </div>

                    <button class="button featured__button">
                        Ajouter au panier
                    </button>
                </article>

                <article class="featured__card">
                    
                    <img src="../image/cat2.png" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Rose gold</h3>
                        <span class="featured__price">890€</span>
                    </div>

                    <button class="button featured__button">
                        Ajouter au panier
                    </button>
                </article>

                <article class="featured__card">
                    
                    <img src="../image/cat2.png" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Jazzmaster</h3>
                        <span class="featured__price">1050€</span>
                    </div>

                    <button class="button featured__button">
                        Ajouter au panier
                    </button>
                </article>

                <article class="featured__card">
                    
                    <img src="../image/cat2.png" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Jazzmaster</h3>
                        <span class="featured__price">1050€</span>
                    </div>

                    <button class="button featured__button">
                        Ajouter au panier
                    </button>
                </article>

                <article class="featured__card">
                    
                    <img src="../image/cat2.png" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Jazzmaster</h3>
                        <span class="featured__price">1050€</span>
                    </div>

                    <button class="button featured__button">
                        Ajouter au panier
                    </button>
                </article>
            </div>
</section>
 
    <!-- SCROLL UP -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>

    <!-- SWIPER JS -->
    <script src="../js/swiper-bundle.min.js"></script>

    <!-- MAIN JS -->
    <script src="../js/main.js"></script>
</body>

    <footer>          
        <?php include('footer.php');?>
    </footer>

</html>