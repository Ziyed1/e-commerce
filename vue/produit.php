<?php include('header.php');?>


<body>
    
<div class="cart" id="cart">
        <?php require('../vue/panier.php');?>
</div>

        <div class="Container-Product">

                <div class="product-image">
                        <img src="../image/cat2.png" alt="" class="product-pic">
                </div>

                <div class="dots">
                     <a href="#!" class="active"><i>1</i></a>
                     <a href="#!"><i>2</i></a>   
                     <a href="#!"><i>3</i></a>   
                     <a href="#!"><i>4</i></a>     
                </div>
        </div>

        <div class="product-details">
                <header>
                        <h1 class="title">Schafter V12 (blindée)</h1>
                        <span class="colorCat">mint green</span>
                        <div class="price">
                                <span class="before">15000€</span>
                                <span class="en-ce-moment">13000€</span>
                        </div>
                        <div class="rate">
                            <a href="#!" class="active">☆</a> 
                            <a href="#!" class="active">☆</a>    
                            <a href="#!" class="active">☆</a>    
                            <a href="#!">☆</a> 
                            <a href="#!">☆</a>          
                        </div>
                </header>
                <article>
                        <h5>Description</h5>
                        <p>Lorem ipsum dolor sit emat, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        ut labore et doloer magna aliqua.</p>
                </article>
                <div class="controls">
                        <div class="color">
                                <h5>Couleur</h5>
                                <ul>
                                        <li><a href="#!" class="colors color-bdot1 active"></a>Bleu</li>
                                        <li><a href="#!" class="colors color-bdot2"></a>Vert</li>
                                        <li><a href="#!" class="colors color-bdot3"></a>Rouge</li>
                                        <li><a href="#!" class="colors color-bdot4"></a></li>
                                        <li><a href="#!" class="colors color-bdot5"></a></li>
                                </ul>
                        </div>
                        <div class="options">
                                <h5>Options</h5>
                                <a href="#!" class="option">Siège cuire</a>
                        </div>
                        <div class="quantity">
                                <h5>Quantité</h5>
                                <a href="#!" class="option">(1)</a>
                        </div>
                </div>
                <div class="footer">
                        <button type="button">
                                <span>Ajouter au panier</span>
                        </button>
                        <a href="#!"></a>
                </div>
        </div>









 <!-- SCROLL UP -->
 <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>

    <!-- SWIPER JS -->
    <script src="../js/swiper-bundle.min.js"></script>

    <!-- MAIN JS -->
    <script src="../js/main.js"></script>
</body>   