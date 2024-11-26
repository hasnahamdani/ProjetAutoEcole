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
                    <option value="Pratique">Pratique</option>
                    <option value="Théorique">Théorique</option>
                </select>

                <label for="dateCAP">Date C.A.P:</label>
                <input type="date" id="dateCAP" name="dateCAP" required>

                <label for="numCAP">Numéro C.A.P:</label>
                <input type="number" id="numCAP" name="numCAP" required>

                <button type="submit" class="submit-btn">Ajouter</button>
            </form>
        </div>
        
        <!-- Champ de recherche -->
        <div class="input-group">
            <input type="search" placeholder="Rechercher..." />
            <img src="images/search.png" alt="search icon">
        </div>
    </section>

    <!-- Tableau des moniteurs -->
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th>NOM <span class="icon-arrow">&UpArrow;</span></th>
                    <th>CIN <span class="icon-arrow">&UpArrow;</span></th>
                    <th>Télé <span class="icon-arrow">&UpArrow;</span></th>
                    <th>Type <span class="icon-arrow">&UpArrow;</span></th>
                    <th>Date C.A.P <span class="icon-arrow">&UpArrow;</span></th>
                    <th>Numéro C.A.P <span class="icon-arrow">&UpArrow;</span></th>
                    <th>Action <span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($moniteurs as $moniteur): ?>
                    <tr>
                        <td><?= esc($moniteur['nom']) ?></td>
                        <td><?= esc($moniteur['cin']) ?></td>
                        <td><?= esc($moniteur['tele']) ?></td>
                        <td><?= esc($moniteur['type']) ?></td>
                        <td><?= esc($moniteur['dateCAP']) ?></td>
                        <td><?= esc($moniteur['numCAP']) ?></td>
                        <td>
                            <a href="<?= base_url('Moniteurs/modifier/'.$moniteur['id']) ?>" class="material-symbols-outlined">
                                <span class="material-symbols-outlined">edit</span>
                            </a>
                            <a href="<?= base_url('Moniteurs/supprimer/'.$moniteur['id']) ?>" 
                               class="material-symbols-outlined" 
                               onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce moniteur ?');">
                                <span class="material-symbols-outlined">delete</span>
                            </a>
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
    width: 155px;
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
    background-color: deepskyblue;
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

/* Style de la table */
.table__body tbody tr {
    transition: background-color 0.2s;
}

.table__body tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Cache les lignes avec la classe hide */
.hide {
    display: none;
}
</style>

<link rel="stylesheet" href="/css/table.css">


<script src="script.js"></script>
<script>
const searchInput = document.querySelector('.input-group input');
const tableRows = document.querySelectorAll('tbody tr');

// Fonction de recherche dans le tableau
function searchTable() {
    const searchData = searchInput.value.toLowerCase();

    tableRows.forEach((row, i) => {
        const rowData = row.textContent.toLowerCase();
        const matches = rowData.includes(searchData);

        // Ajoute ou retire la classe hide en fonction des correspondances
        row.classList.toggle('hide', !matches);

        // Alterne la couleur de fond pour les lignes visibles
        if (matches) {
            row.style.backgroundColor = (i % 2 === 0) ? 'transparent' : '#f3f3f3';
        }
    });
}

// Ajout de l'événement input pour déclencher la recherche
searchInput.addEventListener('input', searchTable);
</script>
<?php $this->endSection();?>
