/* SHOW MENU */
const navMenu = document.getElementById('nav-menu'),
      navToggle =  document.getElementById('nav-toggle'), 
      navClose = document.getElementById('nav-close');


/* MENU SHOW */
/* Si le navToggle existe, alors :  */       
if(navToggle){
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu')
    })
}

/* MENU HIDDEN */
/* Si le navClose existe, alors : */
if(navClose){
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })
}

/* REMOVE MENU MOBILE */
const navLink = document.querySelectorAll('.nav__link');

function linkAction(){
    const navMenu = document.getElementById('nav-menu');
    /* Quand on clique sur chaque catégories, on retire le menu */
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/* --------------- CHANGE BACKGROUND HEADER --------------- */
function scrollHeader() {
    const header = document.getElementById('header')
    // Quand le scroll est supérieur a 50px en hauteur, on ajoute le scroll-header
    if(this.scrollY >= 50){
        header.classList.add('scroll-header');
    } else {
        header.classList.remove('scroll-header')
    }
}
window.addEventListener('scroll',scrollHeader)


