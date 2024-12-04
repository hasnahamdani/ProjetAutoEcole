<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Autofix - Auto Maintenance & Repair Service</title>
  <meta name="title" content="Autofix - Auto Maintenance & Repair Service">
  <meta name="description" content="This is a vehicle repair html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
<style>
    /*-----------------------------------*\
  #style.css
\*-----------------------------------*/

/**
 * copyright 2022 codewithsadee
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

/**
 * colors
 */

--international-orange-engineering: hsl(1, 91%, 37%);
--cadet-blue-creyola: hsl(222, 14%, 69%);
--oxford-blue-1: hsl(222, 47%, 15%);
--oxford-blue-2: hsl(222, 44%, 14%);
--oxford-blue-3: hsl(222, 50%, 11%);
--sonic-silver: hsl(0, 0%, 44%);
--space-cadet: hsl(222, 44%, 18%);
--pastel-pink: hsl(1, 53%, 75%);
--eerie-black: hsl(0, 0%, 15%);
--light-gray: hsl(0, 0%, 80%);
--white: hsl(0, 0%, 100%);

/**
 * typography
 */

--ff-chakra-petch: 'Chakra Petch', sans-serif;
--ff-mulish: 'Mulish', sans-serif;

--fs-1: 3.5rem;
--fs-2: 3rem;
--fs-3: 2.4rem;
--fs-4: 1.8rem;
--fs-5: 1.4rem;
--fs-6: 1.2rem;

--fw-400: 400;
--fw-600: 600;
--fw-700: 700;

/**
 * spacing
 */

--section-padding: 60px;

/**
 * box shadow
 */

--shadow: 0px 0px 100px 0px hsl(216, 9%, 90%);

/**
 * border radius
 */

--radius-pill: 100px;
--radius-circle: 50%;

/**
 * transition
 */

--transition: 0.25s ease;
--cubic-out: cubic-bezier(0.05, 0.83, 0.52, 0.97);

}





/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*,
*::before,
*::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

li { list-style: none; }

a,
img,
span,
button { display: block; }

a {
color: inherit;
text-decoration: none;
}

img { height: auto; }

button {
background: none;
border: none;
font: inherit;
cursor: pointer;
}

address { font-style: normal; }

html {
font-family: var(--ff-mulish);
font-size: 10px;
scroll-behavior: smooth;
}

body {
background-color: var(--white);
color: var(--sonic-silver);
font-size: 1.6rem;
line-height: 1.5;
}

:focus-visible { outline-offset: 4px; }

::-webkit-scrollbar { width: 10px; }

::-webkit-scrollbar-track { background-color: hsl(0, 0%, 98%); }

::-webkit-scrollbar-thumb { background-color: hsl(0, 0%, 80%); }

::-webkit-scrollbar-thumb:hover { background-color: hsl(0, 0%, 70%); }





/*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/

.container { padding-inline: 16px; }

.material-symbols-rounded {
--fs: 1em;
font-variation-settings: 'FILL' 0, 'wght' 600, 'GRAD' 0, 'opsz' 40;
font-size: var(--fs);
width: 1em;
overflow: hidden;
}

.has-bg-image {
background-repeat: no-repeat;
background-size: cover;
background-position: left;
}

.section-subtitle {
max-width: max-content;
font-family: var(--ff-chakra-petch);
font-size: var(--fs-5);
font-weight: var(--fw-600);
text-transform: uppercase;
margin-block-end: 12px;
margin-inline: auto;
}

.section-subtitle::before {
content: "";
display: inline-block;
height: 15px;
width: 30px;
margin-block-end: -2px;
background-repeat: no-repeat;
background-size: contain;
background-position: center;
}

.section-subtitle.\:dark { color: var(--white); }

.section-subtitle.\:dark::before { background-image: url('../images/text-bars-light.png'); }

.section-subtitle.\:light { color: var(--international-orange-engineering); }

.section-subtitle.\:light::before { background-image: url('../images/text-bars-dark.png'); }

.section-title { text-align: center; }

.h1,
.h2,
.h3,
.display-1 {
    position: relative;
    top: 130px;
    left: 200px;
font-family: var(--ff-chakra-petch);
font-weight: var(--fw-700);
text-transform: uppercase;
}

.display-1 { font-size: var(--fs-1); }

.h1 {
color: var(--white);
font-size: var(--fs-2);
line-height: 1.1;
letter-spacing: 1px;
}

.h2,
.h3 {
color: var(--eerie-black);
font-weight: var(--fw-600);
line-height: 1.2;
}

.h2 { font-size: var(--fs-3); }

.h3 { font-size: var(--fs-4); }

.btn {
background-color: var(--international-orange-engineering);
color: var(--white);
max-width: max-content;
font-family: var(--ff-chakra-petch);
font-weight: var(--fw-600);
text-transform: uppercase;
display: flex;
align-items: center;
gap: 8px;
padding: 12px 20px;
border: 1px solid transparent;
border-radius: var(--radius-pill);
transition: var(--transition);
will-change: transform;
}

.btn:is(:hover, :focus-visible) {
transform: translateY(-5px);
background-color: var(--oxford-blue-3);
border-color: var(--white);
}

.move-anim { animation: moving 2s ease-in-out infinite alternate; }

@keyframes moving {
0% { transform: translateY(0); }
100% { transform: translateY(10px); }
}

.section { padding-block: var(--section-padding); }

.btn-link {
font-family: var(--ff-chakra-petch);
text-transform: uppercase;
color: var(--international-orange-engineering);
font-weight: var(--fw-700);
}

.w-100 { width: 100%; }

.img-holder {
aspect-ratio: var(--width) / var(--height);
background-color: var(--light-gray);
overflow: hidden;
}

.img-cover {
width: 100%;
height: 100%;
object-fit: cover;
}

.has-scrollbar {
display: flex;
align-items: center;
gap: 30px;
overflow-x: auto;
scroll-snap-type: inline mandatory;
padding-block-end: 20px;
}

.scrollbar-item {
min-width: 100%;
scroll-snap-align: start;
}

.has-scrollbar::-webkit-scrollbar { height: 16px; }

.has-scrollbar::-webkit-scrollbar-track {
background-color: var(--pastel-pink);
border-radius: 20px;
}

.has-scrollbar::-webkit-scrollbar-thumb {
background-color: var(--international-orange-engineering);
border-radius: 20px;
border: 3px solid var(--pastel-pink);
}

.has-scrollbar::-webkit-scrollbar-button { width: 15%; }





/*-----------------------------------*\
#HEADER
\*-----------------------------------*/

.header .btn { display: none; }

.header {
position: absolute;
top: 0;
left: 0;
width: 100%;
padding: 40px 15px;
padding-inline-start: 40px;
z-index: 4;
}

.header .container {
display: flex;
justify-content: space-between;
align-items: center;
}

.logo img { width: 100px; }

.nav-toggle-icon {
width: 30px;
height: 2px;
background-color: var(--white);
transition: var(--transition);
}

.nav-toggle-icon:not(:last-child) { margin-block-end: 7px; }

.nav-toggle-btn.active .icon-2 {
opacity: 0;
transform: translateX(-10px);
}

.nav-toggle-btn.active .icon-1 { transform: rotate(45deg) translate(8px, 8px); }

.nav-toggle-btn.active .icon-3 { transform: rotate(-45deg) translate(4px, -4px); }

.navbar {
position: absolute;
top: 100px;
right: 30px;
background-color: var(--international-orange-engineering);
min-width: max-content;
width: 30%;
transform: translateY(20px);
opacity: 0;
visibility: hidden;
transition: 0.25s var(--cubic-out);
z-index: 2;
}

.navbar.active {
transform: translateY(0);
opacity: 1;
visibility: visible;
transition-duration: 0.5s;
}

.navbar-link {
font-family: var(--ff-chakra-petch);
font-size: var(--fs-5);
text-transform: uppercase;
color: var(--white);
padding: 10px 20px;
transition: var(--transition);
}

.navbar-link:is(:hover, :focus-visible) {
background-color: var(--white);
color: var(--international-orange-engineering);
}








/*-----------------------------------*\
#FOOTER
\*-----------------------------------*/

.footer { 
   
    color: var(--cadet-blue-creyola); }

.footer .shape { display: none; }

.footer-top {
    
    position: relative;
    height: 800px;
    background-color: var(--space-cadet); }

.footer-top .container {
   
display: grid;
gap: 40px;
}

.footer-text { 
    
    margin-block: 18px 20px; }

.social-list {
    
display: flex;
gap: 8px;
}

.social-link {
background-color: var(--oxford-blue-3);
padding: 14px;
border-radius: var(--radius-circle);
transition: var(--transition);
}

.social-link:is(:hover, :focus-visible) {
background-color: var(--international-orange-engineering);
transform: translateY(-5px);
}

.footer .h3 {
   
color: var(--white);
margin-block-end: 18px;
}

.footer-list .p {
    
   
color: var(--white);
font-weight: var(--fw-400);
margin-block-end: 7px;
}

.footer-list li:not(:first-child) {
    
    position: relative;
    top: 160px;
    left: 200px;
    margin-block-start: 16px; }

.footer-link {
   
display: flex;
align-items: center;
gap: 10px;
}

.footer-link:is(:hover, :focus-visible) { color: var(--international-orange-engineering); }

.footer-link .material-symbols-rounded {
flex-shrink: 0;
font-size: 1.8rem;
color: var(--international-orange-engineering);
}

.footer-bottom {
background-color: var(--oxford-blue-1);
padding-block: 20px;
}

.copyright {
text-align: center;
font-size: var(--fs-6);
}





/*-----------------------------------*\
#MEDIA QUERIES
\*-----------------------------------*/

/**
* responsive for large than 575px screen
*/

@media (min-width: 575px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-2: 4rem;
  --fs-3: 2.8rem;
  --fs-4: 2rem;

}



/**
 * REUSED STYLE
 */

.container {
    
  max-width: 540px;
  width: 100%;
  margin-inline: auto;
}

.section-subtitle { --fs-5: 1.6rem; }

.h2 { font-weight: var(--fw-700); }



/**
 * HERO
 */

.hero .container { max-width: unset; }

.hero-content {
  max-width: 520px;
  margin-inline: auto;
}

.hero .section-text { font-size: 1.8rem; }



/**
 * SERVICE
 */

.service .section-title { margin-block-end: 30px; }

.service-list {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
  margin-block-end: 40px;
}




/**
 * WORK
 */

.scrollbar-item { min-width: calc(50% - 15px); }



/**
 * FOOTER
 */

.footer-top {
  position: relative;
  overflow: hidden;
}

.footer-top .container { grid-template-columns: 1fr 1fr; }

.footer .shape-3 {
  display: block;
  position: absolute;
  bottom: -30px;
  right: 0;
}

}





/**
* responsive for large than 768px screen
*/

@media (min-width: 768px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-1: 4rem;
  --fs-2: 5rem;
  --fs-3: 3.4rem;

}



/**
 * REUSED STYLE
 */

.container,
.hero-content { max-width: 720px; }

.btn { padding: 16px 32px; }

.section-subtitle { --fs-5: 1.8rem; }

.section-title:not(.h1) {
  max-width: 500px;
  margin-inline: auto;
}



/**
 * HERO
 */

.hero { --section-padding: 120px; }

.hero .section-text { margin-block-end: 30px; }





/**
 * FOOTER
 */

.footer-top .container { grid-template-columns: 1fr 0.9fr 0.9fr; }

.copyright { --fs-6: 1.4rem; }

}





/**
* responsive for large than 992px screen
*/

@media (min-width: 992px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-2: 4.4rem;
  --fs-3: 3.8rem;
  --fs-4: 2.2rem;

  /**
   * spacing
   */

  --section-padding: 100px;

}



/**
 * REUSED STYLE
 */

.container { max-width: 960px; }

.section-text,
.card-text { font-size: 1.8rem; }



/**
 * HEADER
 */

.nav-toggle-btn { display: none; }

.header .container { gap: 30px; }

.navbar,
.navbar.active {
  all: unset;
  display: block;
  margin-inline-start: auto;
}

.navbar-list { display: flex; }

.navbar-link {
  position: relative;
  font-size: unset;
}

.navbar-link:is(:hover, :focus-visible) {
  background: none;
  color: var(--white);
}

.navbar-link::after {
  content: url("../images/nav-before-img.png");
  position: absolute;
  bottom: -8px;
  left: 50%;
  transform: translateX(-50%);
  opacity: 0;
}

.navbar-link:is(:hover, :focus-visible)::after { opacity: 1; }

.header .btn {
  display: flex;
  padding: 12px 24px;
  font-size: var(--fs-5);
}



/**
 * HERO
 */

.hero {
  text-align: left;
  padding-block-end: 80px;
}

.hero .container {
  max-width: 960px;
  grid-template-columns: 1fr 1fr;
}

.hero :is(.section-subtitle, .btn) { margin-inline: 0; }

.hero .section-title { text-align: left; }

.hero-banner img { width: 35%; }



/**
 * SERVICE
 */

.service-card .card-text {
  padding-inline: 25px;
  line-height: 1.45;
  margin-block-end: 15px;
}

.service-list li:nth-child(-2n+3) { margin-block-start: 90px; }

.service-list li:nth-child(4) { margin-inline-end: 60px; }

.service-list li:nth-child(6) { margin-inline-start: 60px; }

.service-banner img {
  left: -55%;
  margin-block-start: -30%;
  width: 210%;
}



/**
 * ABOUT
 */

.about {
  position: relative;
  z-index: 1;
}

.about,
.about .section-title { text-align: left; }

.about .container {
  grid-template-columns: 1fr 0.75fr;
  gap: 30px;
}

.about .section-subtitle { margin-inline: 0; }

.about-banner,
.about-banner .w-100 { margin-inline: auto 0; }

.about-banner .w-100 { width: 40%; }

.about-item { text-align: center; }

.about::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background-image: url('../images/about-abs-banner.png');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: right;
  z-index: -1;
}



/**
 * WORK
 */

.has-scrollbar { overflow-x: visible; }

.scrollbar-item { min-width: calc(33.33% - 20px); }

}





/**
* responsive for large than 1200px screen
*/

@media (min-width: 1200px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-2: 5rem;
  --fs-3: 4.6rem;

}



/**
 * REUSED STYLE
 */

.container,
.hero .container { max-width: 1140px; }

.btn { padding: 18px 36px; }

.btn .material-symbols-rounded { --fs: 1.3em; }



/**
 * HEADER
 */

.header { padding-block: 25px; }

.logo img { width: 128px; }

.header .btn {
  font-size: unset;
  padding-block: 15px;
}



/**
 * HERO
 */

.hero { padding-block: 250px 180px; }

.hero .container { grid-template-columns: 1fr 0.9fr; }

.hero .section-text {
  font-size: 2rem;
  padding-inline-end: 120px;
}

.hero-banner img { width: 50%; }



/**
 * SERVICE
 */

.service .section-title { max-width: 700px; }

.service-list { margin-block-end: 70px; }

.service-list li:nth-child(2) .card-text {
  padding-inline: 50px;
}

.service-list li:nth-child(-2n+3) {
  margin-block-start: 110px;
}

.service-list li:is(:nth-child(1), :nth-child(6)) {
  margin-inline-start: 75px;
}

.service-list li:is(:nth-child(3), :nth-child(4)) {
  margin-inline-end: 75px;
}

.service-banner img {
  width: max-content;
  left: -41%;
}



/**
 * WORK
 */

.work-card .card-btn {
  font-size: 2.4rem;
  width: 55px;
  height: 55px;
}



/**
 * FOOTER
 */

.footer-top { padding-block: 150px; }

.footer-top .container { padding-inline-start: 25%; }

.footer-bottom {
  position: relative;
  padding-block: 30px;
  z-index: 1;
}

.footer :is(.shape-1, .shape-2) {
  display: block;
  position: absolute;
  bottom: 0;
  width: 50%;
  pointer-events: none;
  z-index: -1;
}

.footer .shape-1 { left: -100px; }

.footer .shape-2 { left: -50px; }

}





/**
* responsive for large than 1400px screen
*/

@media (min-width: 1400px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-2: 6rem;

  /**
   * spacing
   */

  --section-padding: 140px;

}



/**
 * REUSED STYLE
 */

:is(.header, .hero) .container { max-width: 1280px; }

.section-subtitle::before {
  height: 20px;
  margin-inline-end: 5px;
}



/**
 * HEADER
 */

.header .btn { padding: 18px 36px; }



/**
 * HERO
 */

.hero { padding-block: 280px; }

.hero .section-text { padding-inline-end: 90px; }

.hero-banner img { width: 60%; }



/**
 * ABOUT
 */

.about::before { width: 55%; }

.about-banner .w-100 { width: 50%; }



/**
 * FOOTER
 */

.footer-top .container { padding-inline-start: 20%; }

}
</style>
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Mulish&display=swap"
  rel="stylesheet">
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,600,0,0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Mulish&display=swap"
    rel="stylesheet">

  <!-- 
    - material icon font
  -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,600,0,0" />

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="/uploads/hero-banner.png">
  <link rel="preload" as="image" href="/uploads/hero-bg.jpg">

</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header">
    <div class="container">

      <a href="#" class="logo">
        <img src="/uploads/logo3.png" width="128" height="63" alt="autofix home">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="/" class="navbar-link">Home</a>
          </li>
          <li>
            <a href="/RendezVous" class="navbar-link">Services</a>
          </li>
          <li>
            <a href="/About" class="navbar-link">About</a>
          </li>

        

          <li>
            <a href="/Contact" class="navbar-link">Contact</a>
          </li>

        </ul>
      </nav>

      <a href="/login" class="btn btn-primary">
        <span class="span">Connexion admin</span>

        <span class="material-symbols-rounded">arrow_forward</span>
      </a>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <span class="nav-toggle-icon icon-1"></span>
        <span class="nav-toggle-icon icon-2"></span>
        <span class="nav-toggle-icon icon-3"></span>
      </button>

    </div>
  </header>





  <main>
    <article>

    


     


  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

       

        <ul class="footer-list">

          <li>
            <p class="h3">Heures d'ouverture</p>
          </li>

          <li>
            <p class="p">Lundi – Samedi</p>

            <span class="span">09.00 – 17.00</span>
          </li>

         

        </ul>

        <ul class="footer-list">

          <li>
            <p class="h3">Information de Contact </p>
          </li>

          <li>
            <a href="tel:+01234567890" class="footer-link">
              <span class="material-symbols-rounded">call</span>

              <span class="span">+212 645364735</span>
            </a>
          </li>

          <li>
            <a href="mailto:info@autofix.com" class="footer-link">
              <span class="material-symbols-rounded">mail</span>

              <span class="span">AutoMaestro@gmail.com</span>
            </a>
          </li>

          <li>
            <address class="footer-link address">
              <span class="material-symbols-rounded">location_on</span>

              <span class="span">Hay Dakhla, Agadir</span>
            </address>
          </li>

        </ul>

      </div>

      <img src="/uploads/footer-shape-3.png" width="637" height="173" loading="lazy" alt="Shape"
        class="shape shape-3 move-anim">

    </div>

    <div class="footer-bottom">
      <div class="container">

       

        <img src="/uploads/footer-shape-2.png" width="778" height="335" loading="lazy" alt="Shape"
          class="shape shape-2">

        <img src="/uploads/footer-shape-1.png" width="805" height="652" loading="lazy" alt="Red Car"
          class="shape shape-1 move-anim">

      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
<script>
    'use strict';



/**
 * MOBILE NAVBAR TOGGLE
 */

const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelector("[data-nav-toggler]");

navToggler.addEventListener("click", function () {
  navbar.classList.toggle("active");
  this.classList.toggle("active");
});
</script>
</body>

</html>