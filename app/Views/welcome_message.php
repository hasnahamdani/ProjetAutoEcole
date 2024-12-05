<!DOCTYPE html>
<<<<<<< HEAD
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
#HERO
\*-----------------------------------*/

.hero {
position: relative;
padding-block-start: calc(var(--section-padding) + 70px);
text-align: center;
z-index: 1;
overflow: hidden;
}

.hero .container {
display: grid;
gap: 30px;
}

.hero .section-subtitle { text-transform: unset; }

.hero .section-text {
color: var(--white);
margin-block: 14px 18px;
}

.hero .btn { margin-inline: auto; }

.hero-banner { aspect-ratio: var(--width) / var(--height); }

.hero-banner img {
position: absolute;
bottom: 0;
right: 0;
width: 60%;
z-index: -1;
}





/*-----------------------------------*\
#SERVICE
\*-----------------------------------*/

.service-banner { display: none; }

.service { text-align: center; }

.service-list {
gap: 0;
margin-block-end: 40px;
}

.service-card .card-icon {
max-width: max-content;
margin-inline: auto;
margin-block-end: 24px;
}

.service-card .card-text {
line-height: 1.2;
margin-block: 8px;
}

.service .btn { margin-inline: auto; }





/*-----------------------------------*\
#ABOUT
\*-----------------------------------*/

.about {
background-color: var(--space-cadet);
color: var(--white);
text-align: center;
}

.about .container {
display: grid;
gap: 50px;
}

.about .section-title { color: var(--white); }

.about .section-text:nth-child(3) { margin-block: 12px 8px; }

.about-list {
display: grid;
gap: 25px;
margin-block-start: 25px;
}

.about-item {
background-color: var(--oxford-blue-2);
padding: 40px 20px;
transition: var(--transition);
}

.about-item:hover {
background-color: var(--international-orange-engineering);
transform: translateY(-8px);
}

.about-item .strong {
display: block;
line-height: 1.1;
}





/*-----------------------------------*\
#WORK
\*-----------------------------------*/

.work .container { padding-inline: 0; }

.work .section-title { margin-block-end: 24px; }

.work-card { position: relative; }

.work-card .card-content {
background-color: var(--white);
max-width: 90%;
padding: 30px 10px;
margin-block-start: -60px;
margin-inline: auto;
position: relative;
text-align: center;
box-shadow: var(--shadow);
}

.work-card .card-subtitle {
font-family: var(--ff-chakra-petch);
text-transform: uppercase;
color: var(--international-orange-engineering);
font-weight: var(--fw-700);
margin-block-end: 5px;
}

.work-card .card-title { margin-block-end: 10px; }

.work-card .card-btn {
background-color: var(--international-orange-engineering);
color: var(--white);
font-size: 2rem;
margin-inline: auto;
width: 38px;
height: 38px;
display: grid;
place-items: center;
border-radius: var(--radius-circle);
}





/*-----------------------------------*\
#FOOTER
\*-----------------------------------*/

.footer { color: var(--cadet-blue-creyola); }

.footer .shape { display: none; }

.footer-top { background-color: var(--space-cadet); }

.footer-top .container {
display: grid;
gap: 40px;
}

.footer-text { margin-block: 18px 20px; }

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

.footer-list li:not(:first-child) { margin-block-start: 16px; }

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
 * ABOUT
 */

.about-list {
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.about-item { padding-block: 20px; }



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
 * SERVICE
 */

.service-banner {
  display: block;
  position: relative;
}

.service-list { grid-template-columns: repeat(3, 1fr); }

.service-banner img {
  position: absolute;
  top: 0;
  left: -25%;
  margin-block-start: 15%;
  width: 150%;
  transform-origin: top;
}



/**
 * ABOUT
 */
 
.about-banner { max-width: max-content; }

.about-banner,
.about .section-text { margin-inline: auto; }

.about .section-text { max-width: 520px; }



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
        - #HERO
      -->

      <section class="hero has-bg-image" aria-label="home" style="background-image: url('/uploads/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            
            <h1 class="h1 section-title">Conduisez vos rêves avec notre auto-école.</h1>

            <p class="section-text">
            La route vous attend ! Réservez votre rendez-vous aujourd’hui.
            </p>

            <a href="/RendezVous" class="btn">
              <span class="span">Prenez un rendez-vous</span>

              <span class="material-symbols-rounded">arrow_forward</span>
            </a>

          </div>

          <figure class="hero-banner" style="--width: 1228; --height: 789;">
            <img src="/uploads/hero-banner.png" width="1228" height="789" alt="red motor vehicle"
              class="move-anim">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service has-bg-image" aria-labelledby="service-label"
        style="background-image: url('/uploads/service-bg.jpg')">
        <div class="container">

          <p class="section-subtitle :light" id="service-label">Our services</p>

          <h2 class="h2 section-title">We Provide Great Services For your Vehicle</h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="/uploads/services-1.png" width="110" height="110" loading="lazy" alt="Engine Repair">
                </figure>

                <h3 class="h3 card-title">Engine Repair</h3>

                <p class="card-text">
                  Autem velaum iure reare aenderit rui in ea roluptate esse ruam moles
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="/uploads/services-2.png" width="110" height="110" loading="lazy" alt="Brake Repair">
                </figure>

                <h3 class="h3 card-title">Brake Repair</h3>

                <p class="card-text">
                  Autem velaum iure reare aenderit rui in ea roluptate esse ruam moles
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="/uploads/services-3.png" width="110" height="110" loading="lazy" alt="Tire Repair">
                </figure>

                <h3 class="h3 card-title">Tire Repair</h3>

                <p class="card-text">
                  Autem velaum iure reare aenderit rui in ea roluptate esse ruam moles
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="/uploads/services-4.png" width="110" height="110" loading="lazy"
                    alt="Battery Repair">
                </figure>

                <h3 class="h3 card-title">Battery Repair</h3>

                <p class="card-text">
                  Autem velaum iure reare aenderit rui in ea roluptate esse ruam moles
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

            <li class="service-banner">
              <img src="/uploads/services-5.png" width="646" height="380" loading="lazy" alt="Red Car"
                class="move-anim">
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="/uploads/services-6.png" width="110" height="110" loading="lazy"
                    alt="Steering Repair">
                </figure>

                <h3 class="h3 card-title">Steering Repair</h3>

                <p class="card-text">
                  Autem velaum iure reare aenderit rui in ea roluptate esse ruam moles
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

          </ul>

          <a href="#" class="btn">
            <span class="span">View All Services</span>

            <span class="material-symbols-rounded">arrow_forward</span>
          </a>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about has-before" aria-labelledby="about-label">
        <div class="container">

          <figure class="about-banner">
            <img src="/uploads/about-banner.png" width="540" height="540" loading="lazy"
              alt="vehicle repire equipments" class="w-100">
          </figure>

          <div class="about-content">

            <p class="section-subtitle :dark">About Us</p>

            <h2 class="h2 section-title">We’re Commited to Meet the quality</h2>

            <p class="section-text">
              Quis autem vel eum iure reprehenderit qui in ea volu velit esse quam nihil molestiae consequatur, vel
              illum eui dolorem eum fugiat ruo.
            </p>

            <p class="section-text">
              Reprehenderit qui in ea volu velit esse quam nihil moe stiae consequatur, vel illum eui.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">8K+</strong> Happy Clients
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">22+</strong> Instruments
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">50+</strong> Years in market
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">99%</strong> Projects completed
                </p>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #WORK
      -->

      <section class="section work" aria-labelledby="work-label">
        <div class="container">

          <p class="section-subtitle :light" id="work-label">Our Work</p>

          <h2 class="h2 section-title">Latest projects we have done</h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="work-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="/uploads/work-1.jpg" width="350" height="406" loading="lazy" alt="Engine Repair"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Auto Repair</p>

                  <h3 class="h3 card-title">Engine Repair</h3>

                  <a href="#" class="card-btn">
                    <span class="material-symbols-rounded">arrow_forward</span>
                  </a>
                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="work-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="/uploads/work-2.jpg" width="350" height="406" loading="lazy" alt="Car Tyre change"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Auto Repair</p>

                  <h3 class="h3 card-title">Car Tyre change</h3>

                  <a href="#" class="card-btn">
                    <span class="material-symbols-rounded">arrow_forward</span>
                  </a>
                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="work-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="/uploads/work-3.jpg" width="350" height="406" loading="lazy" alt="Battery Adjust"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Auto Repair</p>

                  <h3 class="h3 card-title">Battery Adjust</h3>

                  <a href="#" class="card-btn">
                    <span class="material-symbols-rounded">arrow_forward</span>
                  </a>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          

          <p class="footer-text">
            Rerum necessitatibus saepe eveniet aut et voluptates repudiandae sint et molestiae non recusandae.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <img src="/uploads/facebook.svg" alt="facebook">
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <img src="/uploads/instagram.svg" alt="instagram">
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <img src="/uploads/twitter.svg" alt="twitter">
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="h3">Opening Hours</p>
          </li>

          <li>
            <p class="p">Monday – Saturday</p>

            <span class="span">12.00 – 14.45</span>
          </li>

          <li>
            <p class="p">Sunday – Thursday</p>

            <span class="span">17.30 – 00.00</span>
          </li>

          <li>
            <p class="p">Friday – Saturday</p>

            <span class="span">12.00 – 14.45</span>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="h3">Contact Info</p>
          </li>

          <li>
            <a href="tel:+01234567890" class="footer-link">
              <span class="material-symbols-rounded">call</span>

              <span class="span">+01 2 3456 7890</span>
            </a>
          </li>

          <li>
            <a href="mailto:info@autofix.com" class="footer-link">
              <span class="material-symbols-rounded">mail</span>

              <span class="span">info@autofix.com</span>
            </a>
          </li>

          <li>
            <address class="footer-link address">
              <span class="material-symbols-rounded">location_on</span>

              <span class="span">21 King Street Melbourne, 3000, Australia</span>
            </address>
          </li>

        </ul>

      </div>

      <img src="/uploads/footer-shape-3.png" width="637" height="173" loading="lazy" alt="Shape"
        class="shape shape-3 move-anim">

    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">Copyright 2022, codewithsadee All Rights Reserved.</p>

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

=======
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Responsive Regisration Form </title>
  <style>/* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #4070f4;
}
.formulaire{
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.formulaire header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}
.formulaire header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}
.formulaire form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.formulaire form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
.formulaire form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.formulaire form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.formulaire form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.formulaire form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}
.formulaire form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}

@media (max-width: 750px) {
    .formulaire form{
        overflow-y: scroll;
    }
    .formulaire form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}</style>
</head>
<body>
    <div class="formulaire">
        <header>Registration</header>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Enter your ccupation" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Identity Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>ID Type</label>
                            <input type="text" placeholder="Enter ID type" required>
                        </div>

                        <div class="input-field">
                            <label>ID Number</label>
                            <input type="number" placeholder="Enter ID number" required>
                        </div>

                        <div class="input-field">
                            <label>Issued Authority</label>
                            <input type="text" placeholder="Enter issued authority" required>
                        </div>

                        <div class="input-field">
                            <label>Issued State</label>
                            <input type="text" placeholder="Enter issued state" required>
                        </div>

                        <div class="input-field">
                            <label>Issued Date</label>
                            <input type="date" placeholder="Enter your issued date" required>
                        </div>

                        <div class="input-field">
                            <label>Expiry Date</label>
                            <input type="date" placeholder="Enter expiry date" required>
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

          
        </form>
    </div>

    <script src="script.js"></script>
</body>
>>>>>>> b3da94a285d2918939ed59599fb917cd18b2fb04
</html>