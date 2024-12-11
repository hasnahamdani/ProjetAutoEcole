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
    <link rel="stylesheet" href="/css/rendez_vous.css">
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

      <section class="section work" aria-labelledby="work-label">
        <div class="container">

         

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              
              <div class="work-card">
                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="/uploads/work-1.jpg" width="350" height="406" loading="lazy" alt="Engine Repair"
                    class="img-cover">
                </figure>

                <div class="card-content">
            
                  <h3 class="h3 card-title">Prenez un rendez-vous</h3>

                  <a href="/RendezVous" class="card-btn">
                    <span class="material-symbols-rounded" >arrow_forward</span>
                  </a>
                </div>

              </div>
            </li>

            <li class="scrollbar-item">
            <h2 class="h2 section-title"  style="color:white;">AutoMaestro :</h2>

              <div class="work-card" style="color:black;background-color:white; padding: 60px;">

               <strong>Bienvenue sur AutoMaestro, où votre réussite sur la route commence !
                 Depuis 2017, nous nous engageons à offrir une formation de qualité qui allie
                  professionnalisme, pédagogie et sécurité. Notre équipe d'instructeurs certifiés est là pour
                   vous accompagner à chaque étape, que vous soyez débutant ou en quête de perfectionnement. 
                   Grâce à nos méthodes modernes et à nos outils numériques, nous vous garantissons une expérience
                    d’apprentissage efficace et adaptée à vos besoins. Faites confiance à AutoMaestro
                     pour faire de vous un conducteur confiant et responsable !</strong>

              </div>
            </li>

            

          </ul>

        </div>
      </section>

    </article>
  </main>

<script>
    'use strict';


const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelector("[data-nav-toggler]");

navToggler.addEventListener("click", function () {
  navbar.classList.toggle("active");
  this.classList.toggle("active");
});
</script>
</body>

</html>