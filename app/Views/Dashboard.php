<?php $this->extend('layouts/admin'); ?>

<?php $this->section('dashboard_content'); ?>

<div class="dashboard">
    <div class="card orange">
    <h3><?= isset($total_vehicules) ? $total_vehicules : '0' ?></h3>

        <p>Total Véhicules</p>
        <div class="footer">
    <a href="/Vehicules" class="change-text">Voir plus</a>
    <span class="arrow">&#x2191;</span>
</div>
    </div>
    <div class="card green">
    <h3><?= isset($total_moniteurs) ? $total_moniteurs : '0' ?></h3>
        <p>Total Moniteurs</p>
        <div class="footer">
    <a href="/Moniteurs" class="change-text">Voir plus</a>
    <span class="arrow">&#x2191;</span>
</div>
    </div>
    <div class="card red">
    <h3><?= isset($total_candidats) ? $total_candidats : '0' ?></h3>
        <p>Total Candidats</p>
        <div class="footer">
    <a href="/Candidats" class="change-text">Voir plus</a>
    <span class="arrow">&#x2191;</span>
    </div>

    </div>
    <div class="card blue">
   <h3><?= isset($total_today) ? $total_today : '0' ?></h3>
        <p>Nouveaux rendez vous</p>
        <div class="footer">
    <a href="/RendezVousAdmin" class="change-text">Voir plus</a>
    <span class="arrow">&#x2191;</span>
    </div>
    </div>

</div>
<canvas id="myChart"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  var jours = <?= isset($jours) ? $jours : '[]'; ?>;
  var datasets = <?= isset($datasets) ? $datasets : '[]'; ?>;

        var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',         data: {
            labels: jours,
            datasets: datasets
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                },
            },
        }
    });
</script>


<?php $this->endSection(); ?>