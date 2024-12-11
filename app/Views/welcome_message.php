
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto école</title>
  <meta name="title" content="Autofix - Auto Maintenance & Repair Service">
  <meta name="description" content="This is a vehicle repair html template made by codewithsadee">
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

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,600,0,0" />

  <link rel="stylesheet" href="/css/style.css">

  <link rel="preload" as="image" href="/uploads/hero-banner.png">
  <link rel="preload" as="image" href="/uploads/hero-bg.jpg">

</head>

<body>


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