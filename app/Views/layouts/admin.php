<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
	<link rel="stylesheet" href="/css/table.css">
	<link rel="stylesheet" href="/css/dashboard.css">
	<title>AutoMaestro</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		 <a href="#" class="logo">
        <img src="/uploads/logo3.png" width="200" height="100" alt="logo">
      </a>
	  <ul class="side-menu top">
    <li class="<?= setActive('Dashboard') ?>">
        <a href="/Dashboard">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text">Tableau de bord</span>
        </a>
    </li>
    <li class="<?= setActive('Vehicules') ?>">
        <a href="/Vehicules">
            <span class="material-symbols-outlined">directions_car</span> <!-- For Vehicles -->
            <span class="text">Véhicules</span>
        </a>
    </li>
    <li class="<?= setActive('Candidats') ?>">
        <a href="/Candidats">
            <span class="material-symbols-outlined">group</span> <!-- For Candidates -->
            <span class="text">Candidats</span>
        </a>
    </li>
    <li class="<?= setActive('Moniteurs') ?>">
        <a href="/Moniteurs" class="<?= setActive('Moniteurs') ?>">
            <span class="material-symbols-outlined">school</span> <!-- For Instructors -->
            <span class="text">Moniteur</span>
        </a>
    </li>
    <li class="<?= setActive('RendezVousAdmin') ?>">
        <a href="/RendezVousAdmin">
            <span class="material-symbols-outlined">event</span> <!-- For Appointments -->
            <span class="text">Les Rendez-Vous</span>
        </a>
    </li>
</ul>
<ul class="side-menu">
    <li>
        <a href="/logout" class="logout">
            <span class="material-symbols-outlined">logout</span> <!-- For Logout -->
            <span class="textlog">Logout</span>
        </a>
    </li>
</ul>

</section>

	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			
			<form action="/search" method="GET">
    <div class="form-input">
        <input type="search" name="query" placeholder="Search..." value="<?= isset($query) ? esc($query) : ''; ?>">
        <button type="submit" class="search-btn">
            <i class='bx bx-search'></i>
        </button>
    </div>
</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>


		</nav>

		<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>
<?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-danger">
        <?= implode('<br>', session()->getFlashdata('errors')) ?>
    </div>
<?php endif; ?>
		<?= $this->renderSection('dashboard_content') ?>
	<script>
		const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

		allSideMenu.forEach(item => {
			const li = item.parentElement;

			item.addEventListener('click', function() {
				allSideMenu.forEach(i => {
					i.parentElement.classList.remove('active');
				})
				li.classList.add('active');
			})
		});


		// TOGGLE SIDEBAR
		const menuBar = document.querySelector('#content nav .bx.bx-menu');
		const sidebar = document.getElementById('sidebar');

		menuBar.addEventListener('click', function() {
			sidebar.classList.toggle('hide');
		})


		const searchButton = document.querySelector('#content nav form .form-input button');
		const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
		const searchForm = document.querySelector('#content nav form');

		searchButton.addEventListener('click', function(e) {
			if (window.innerWidth < 576) {
				e.preventDefault();
				searchForm.classList.toggle('show');
				if (searchForm.classList.contains('show')) {
					searchButtonIcon.classList.replace('bx-search', 'bx-x');
				} else {
					searchButtonIcon.classList.replace('bx-x', 'bx-search');
				}
			}
		})





		if (window.innerWidth < 768) {
			sidebar.classList.add('hide');
		} else if (window.innerWidth > 576) {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
			searchForm.classList.remove('show');
		}


		window.addEventListener('resize', function() {
			if (this.innerWidth > 576) {
				searchButtonIcon.classList.replace('bx-x', 'bx-search');
				searchForm.classList.remove('show');
			}
		})



		const switchMode = document.getElementById('switch-mode');

		switchMode.addEventListener('change', function() {
			if (this.checked) {
				document.body.classList.add('dark');
			} else {
				document.body.classList.remove('dark');
			}
		})
	</script>

	<!-- <script src="/script/script.js"></script> -->
</body>

</html>