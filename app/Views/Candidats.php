<?php $this->extend('layouts/admin'); ?>

<?php $this->section('dashboard_content'); ?>
<main class="table" id="candidats_table">
    <section class="table__header">
        <h1>Ajouter un Candidat</h1>
        
        <!-- Formulaire Ajouter Candidat en haut de la page -->
        <div class="add-candidat-form">
            <form action="/CandidatsA" method="post" class="form-inline" enctype="multipart/form-data">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>

                <label for="cin">CIN:</label>
                <input type="text" id="cin" name="cin" required>

                <label for="tele">Téléphone:</label>
                <input type="text" id="tele" name="tele" required>

                <label for="tele">Image:</label>
                <input type="file" id="image" name="image" required>
                <label for="dateInscription">Date d'inscription:</label>
                <input type="date" id="dateInscription" name="dateInscription" required>

                <label for="moniteur_id">Moniteur:</label>
<select id="moniteur_id" name="moniteur_id" required>
    <option value="">Sélectionnez un moniteur</option>
    <?php foreach ($moniteurs as $moniteur): ?>
        <option value="<?= $moniteur['id']; ?>"><?= $moniteur['nom']; ?></option>
    <?php endforeach; ?>
</select>

                <button type="submit" class="submit-btn">Ajouter</button>
            </form>
        </div>

       
    </section>

    <!-- Tableau des candidats -->
    <section class="table__body">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>CIN</th>
                <th>Téléphone</th>
                <th>Image</th>
                <th>Date d'inscription</th>
                <th>Moniteur</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($candidats as $candidat): ?>
                <tr>
                    <td><?= esc($candidat['nom']) ?></td>
                    <td><?= esc($candidat['cin']) ?></td>
                    <td><?= esc($candidat['tele']) ?></td>
                   <td><img src="<?= base_url('uploads/' . $candidat['image']); ?>" alt="Image du candidat"></td> 
                    <td><?= esc($candidat['dateInscription']) ?></td>
                    <td><?= esc($candidat['moniteur_nom']) ?></td>
                    <td>
                        <a href="<?= base_url('Candidats/modifier/'.$candidat['id']) ?>" class="status delivered">Modifier</a>
                        <a href="<?= base_url('Candidats/supprimer/'.$candidat['id']) ?>" class="status cancelled" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce candidat ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>


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
</main>

<style>
/* Style des labels du formulaire */
.add-candidat-form label {
    font-weight: bold;
    font-size: 0.9rem;
    color: #333;
    margin-right: 0.5rem;
}

/* Style des champs d'entrée du formulaire */
.add-candidat-form input[type="text"],
.add-candidat-form input[type="date"],
.add-candidat-form input[type="number"],
.add-candidat-form select {
    width: 155px; /* Ajustement pour 3 colonnes */
    padding: 0.6rem;
    border-radius: 0.3rem;
    border: 1px solid #ddd;
    transition: border-color 0.2s ease-in-out;
}

/* Effet focus pour les champs d'entrée */
.add-candidat-form input[type="text"]:focus,
.add-candidat-form input[type="date"]:focus,
.add-candidat-form input[type="number"]:focus,
.add-candidat-form select:focus {
    border-color: deepskyblue;
    outline: none;
}

/* Bouton de soumission */
.add-candidat-form .submit-btn {
    background-color: deepskyblue;
    color: white;
    padding: 0.7rem 1.2rem;
    border: none;
    border-radius: 0.3rem;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.2s ease-in-out;
}

.add-candidat-form .submit-btn:hover {
    background-color: #5a00a3;
}
</style>
<link rel="stylesheet" href="/css/table.css">
<?php $this->endSection(); ?>
