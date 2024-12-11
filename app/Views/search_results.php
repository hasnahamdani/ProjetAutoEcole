<!-- app/Views/search_results.php -->

<?php $this->extend('layouts/admin'); ?>

<?php $this->section('dashboard_content'); ?>
<style>
  
.search-results {
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
    padding: 20px;
    margin: 30px auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 1200px;
    color: #333;
}


.search-results h2 {
    font-size: 28px;
    color: #0056b3;
    margin-bottom: 20px;
    text-align: center;
    font-weight: bold;
}


.search-results h3 {
    font-size: 24px;
    color: #007bff;
    margin-top: 30px;
    border-bottom: 2px solid #007bff;
    padding-bottom: 5px;
}


.search-results ul {
    list-style: none;
    padding: 0;
    margin: 0;
}


.search-results li {
    font-size: 18px;
    color: #555;
    background-color: #ffffff;
    padding: 12px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ddd;
    transition: background-color 0.3s, transform 0.3s;
}


.search-results li:hover {
    background-color: #f0f8ff;
    transform: translateX(5px);
}


.search-results p {
    font-size: 16px;
    color: #888;
    text-align: center;
    font-style: italic;
}


.search-results .no-results {
    font-size: 18px;
    color: #999;
    text-align: center;
    padding: 20px;
    background-color: #f1f1f1;
    border-radius: 5px;
    border: 1px dashed #ccc;
}

</style>
<div class="search-results">
    <h2>Résultats de recherche pour : <?= esc($query) ?></h2>

    <!-- Afficher les résultats des véhicules -->
    <?php if (!empty($vehicles)): ?>
        <h3>Véhicules</h3>
        <ul>
            <?php foreach ($vehicles as $vehicle): ?>
                <li>
                    <a href="<?= site_url('Vehicules') ?>"><?= esc($vehicle['nom']) ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun véhicule trouvé.</p>
    <?php endif; ?>

    <!-- Afficher les résultats des moniteurs -->
    <?php if (!empty($moniteurs)): ?>
        <h3>Moniteurs</h3>
        <ul>
            <?php foreach ($moniteurs as $moniteur): ?>
                <li>
                    <a href="<?= site_url('Moniteurs') ?>"><?= esc($moniteur['nom']) ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun moniteur trouvé.</p>
    <?php endif; ?>

    <!-- Afficher les résultats des candidats -->
    <?php if (!empty($candidats)): ?>
        <h3>Candidats</h3>
        <ul>
            <?php foreach ($candidats as $candidat): ?>
                <li>
                    <a href="<?= site_url('Candidats/')?>"><?= esc($candidat['nom']) ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun candidat trouvé.</p>
    <?php endif; ?>
</div>

<?php $this->endSection(); ?>
