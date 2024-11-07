<?php $this->extend('layouts/admin'); ?>

<?php $this->section('dashboard_content'); ?>
<main class="table" id="customers_table">
    <section class="table__header">
        <h1>Ajouter un Moniteur</h1>
        
        <!-- Formulaire Ajouter Moniteur en haut de la page -->
        <div class="add-moniteur-form">
           
            <form action="/Moniteurs" method="post" class="form-inline">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>

                <label for="cin">CIN:</label>
                <input type="text" id="cin" name="cin" required>

                <label for="tele">Téléphone:</label>
                <input type="text" id="tele" name="tele" required>

                <label for="type">Type:</label>
                <select id="type" name="type" required>
                    <option value="1">Pratique</option>
                    <option value="0">Théorique</option>
                </select>
                <label for="dateCAP">Date C.A.P:</label>
                <input type="date" id="dateCAP" name="dateCAP" required>

                <label for="numCAP">Numéro C.A.P:</label>
                <input type="number" id="numCAP" name="numCAP" required>

                <button type="submit" class="submit-btn">Ajouter</button>
            </form>
        </div>


    </section>

    <!-- Tableau des moniteurs -->
    <section class="table__body">
        <table>
            <thead>
            <tr>
                    <th> NOM</th>
                    <th> CIN </th>
                    <th> Télé </th>
                    <th> Type </th>
                    <th> Date C.A.P </th>
                    <th> Numéro C.A.P </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($moniteurs as $moniteur): ?>
                    <tr>
                        <td><?= esc($moniteur['nom']) ?></td>
                        <td><?= esc($moniteur['cin']) ?></td>
                        <td><?= esc($moniteur['tele']) ?></td>
                        <td><?= $moniteur['type']?></td>
                        <td><?= esc($moniteur['dateCAP']) ?></td>
                        <td><?= esc($moniteur['numCAP']) ?></td>
                        <td>
                           
                            <a href="<?= base_url('Moniteurs/supprimer/'.$moniteur['id']) ?>" 
       class="material-symbols-outlined" 
       onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce moniteur ?');">
        <span class="material-symbols-outlined">delete</span> 
    </a>
    <span class="material-symbols-outlined">
edit
</span>
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
.add-moniteur-form label {
    font-weight: bold;
    font-size: 0.9rem;
    color: #333;
    margin-right: 0.5rem;
}

/* Style des champs d'entrée du formulaire */
.add-moniteur-form input[type="text"],
.add-moniteur-form input[type="date"],
.add-moniteur-form input[type="number"] {
    width: 155px; /* 3 colonnes ajustées */
    padding: 0.6rem;
    border-radius: 0.3rem;
    border: 1px solid #ddd;
    transition: border-color 0.2s ease-in-out;
}

/* Effet focus pour les champs d'entrée */
.add-moniteur-form input[type="text"]:focus,
.add-moniteur-form input[type="date"]:focus,
.add-moniteur-form input[type="number"]:focus {
    border-color: deepskyblue;
    outline: none;
}

/* Bouton de soumission */
.add-moniteur-form .submit-btn {
    background-color:deepskyblue;
    color: white;
    padding: 0.7rem 1.2rem;
    border: none;
    border-radius: 0.3rem;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.2s ease-in-out;
}

.add-moniteur-form .submit-btn:hover {
    background-color: #5a00a3;
}

</style>
<link rel="stylesheet" href="/css/table.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=edit" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=delete" />
<?php $this->endSection(); ?>
