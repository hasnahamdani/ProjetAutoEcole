<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto école</title>
  <meta name="title" content="Autofix - Auto Maintenance & Repair Service">
  <meta name="description" content="This is a vehicle repair html template made by codewithsadee">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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

  <link rel="preload" as="image" href="/uploads/hero-banner.png">
  <link rel="preload" as="image" href="/uploads/hero-bg.jpg">
  <link rel="stylesheet" href="/css/rendez_vous.css">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>


  <header class="header">
    <div class="container">
  
      <a href="#" class="logo">
        <img src="/uploads/logo3.png" width="128" height="63" alt="logo">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">
          <li><a href="/" class="navbar-link">Home</a></li>
          <li><a href="/RendezVous" class="navbar-link">Services</a></li>
          <li><a href="/About" class="navbar-link">About</a></li>
          <li><a href="/Contact" class="navbar-link">Contact</a></li>
        </ul>
      </nav>

      <a href="/login" class="btn btn-primary">
        <span class="span">Connexion admin</span>
        <span class="material-symbols-rounded">arrow_forward</span>
      </a>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
       
      </button>

    </div>
  </header>
 
<div class="container2">
<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
      <?= session()->getFlashdata('success') ?>
    </div>
  <?php endif; ?>
  <div class="title">Prenez un rendez-vous :</div>
  <form action="/RendezVous" method="post">
    <div class="user-details">
      <div class="input-box">
        <span class="details">Nom :</span>
        <input type="text" placeholder="Entrez votre nom" required name="nom">
      </div>
      <div class="input-box">
        <span class="details">Email :</span>
        <input type="email" placeholder="exemple@exemple.com" required name="email">
      </div>
      <div class="input-box">
        <span class="details">Téléphone :</span>
        <input type="number" placeholder="Entrez votre numéro de téléphone" required name="tele">
      </div>
      <div class="input-box">
        <span class="details">Adresse :</span>
        <input type="text" placeholder="Entrez votre adresse" required name="address">
      </div>
      <div class="input-box">
        <span class="details">Ville :</span>
        <input type="text" placeholder="Entrez votre ville" required name="city">
      </div>
      <div class="input-box">
        <span class="details">CIN :</span>
        <input type="text" placeholder="Entrez votre CIN" required name="cin">
      </div>
      <div class="input-box">
        <span class="details">Date de naissance :</span>
        <input type="date" required name="dateNaissance">
      </div>
      <div class="input-box">
        <span class="details">Rendez-vous :</span>
        <input type="date" id="appointment-date" placeholder="Choisissez une date" name="rendezVous">
      </div>
    </div>
    <div class="button">
      <input type="submit" value="Envoyer">
    </div>
  </form>
</div>

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
$(document).ready(function () {
  $.ajax({
    url: '/rendezvous', // Remplacez par le bon endpoint
    method: 'GET',
    success: function (response) {
      const disabledDates = response.map(dateString => {
        const [year, month, day] = dateString.split('-').map(num => parseInt(num, 10));
        return new Date(year, month - 1, day); // Mois est 0-indexé
      });

      const dateSelectionCount = {};

      flatpickr("#appointment-date", {
        enableTime: false,
        dateFormat: "Y-m-d",
        minDate: "today",
        disable: disabledDates, // Liste des dates désactivées
        onDayCreate: function (_, __, ___, dayElem) {
          const date = dayElem.dateObj;
          const dateString = formatDate(date);

          // Si la date a été sélectionnée 3 fois, on l'ajoute à la classe 'blocked-date'
          if (dateSelectionCount[dateString] >= 3) {
            dayElem.classList.add('blocked-date');
          }

                    if (isDateDisabled(date, disabledDates)) {
            dayElem.classList.add('blocked-date');
          }
        },
        onChange: function (selectedDates) {
          selectedDates.forEach(date => {
            const dateString = formatDate(date);

                        dateSelectionCount[dateString] = (dateSelectionCount[dateString] || 0) + 1;

                        if (dateSelectionCount[dateString] >= 3) {
              setTimeout(() => flatpickr("#appointment-date").redraw(), 0);             }
          });
        }
      });

            function formatDate(date) {
        return `${date.getFullYear()}-${(date.getMonth() + 1).toString().padStart(2, '0')}-${date.getDate().toString().padStart(2, '0')}`;
      }

            function isDateDisabled(date, disabledDates) {
        return disabledDates.some(disabledDate =>
          disabledDate.getFullYear() === date.getFullYear() &&
          disabledDate.getMonth() === date.getMonth() &&
          disabledDate.getDate() === date.getDate()
        );
      }
    }
  });
});
</script>



</body>


</html>
