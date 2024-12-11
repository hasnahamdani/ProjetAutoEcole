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
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/login.css">

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

     
    </div>
  </header>





  <main>
    
  </main>










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