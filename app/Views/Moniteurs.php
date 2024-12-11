<?php $this->extend('layouts/admin'); ?>

<?php $this->section('dashboard_content'); ?>




<main class="table">
<button class="nextBtn" id="ajouterMoniteur"> <span class="btnText">Ajouter un moniteur</span>  </button>
<br><br>
            <section class="table__header">
              
             
               
                    <div class="export__file-options">
                        <label><strong>Exporter sous &nbsp; &#10140;</strong></label>
                        <label for="export-file" id="toPDF">PDF <img src="uploads/pdf.png" alt=""  width="25px; height:25px;"></label>
                  
                </div>
            </section>

            <section class="table__body"  id="customers_table">
                <table>
                    <thead>
                        <tr>
                        <th>NOM</th>
                        <th>CIN </th>
                        <th>Télé </th>
                        <th>Type </th>
                        <th>Date C.A.P </th>
                        <th>Numéro C.A.P </th>
                        <th>Action </th>
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
                            </td>
                    
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

</main>
<section class="container" id="candidats_table" style="display: none;">
    <span class="close-btn" id="closeModal">&times;</span>
    <h1>Ajouter un Moniteur</h1>
    
        <form action="/Moniteurs" method="post" class="form">
            <div class="details personal">
                <div class="fields">
                    <div class="input-field">
                        <label for="nom">Nom:</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>

                    <div class="input-field">
                        <label for="cin">CIN:</label>
                        <input type="text" id="cin" name="cin" required>
                    </div>

                    <div class="input-field">
                        <label for="tele">Téléphone:</label>
                        <input type="text" id="tele" name="tele" required>
                    </div>

                    <div class="input-field">
                        <label for="type">Type:</label>
                        <select id="type" name="type" required>
                            <option value="Pratique">Pratique</option>
                            <option value="Théorique">Théorique</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label for="dateCAP">Date C.A.P:</label>
                        <input type="date" id="dateCAP" name="dateCAP" required>
                    </div>

                    <div class="input-field">
                        <label for="numCAP">Numéro C.A.P:</label>
                        <input type="number" id="numCAP" name="numCAP" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="nextBtn">
                    <span class="btnText">Ajouter</span>
                </button>
        </form>
  
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
        const ajouterCandidatLink = document.getElementById('ajouterMoniteur');
        const candidatsTable = document.getElementById('candidats_table');
        const closeModal = document.getElementById('closeModal');

                ajouterCandidatLink.addEventListener('click', (e) => {
            e.preventDefault();             candidatsTable.style.display = 'block';         });

                closeModal.addEventListener('click', () => {
            candidatsTable.style.display = 'none';         });

                window.addEventListener('click', (e) => {
            if (e.target === candidatsTable) {
                candidatsTable.style.display = 'none';
            }
        });
    });

    const pdf_btn = document.querySelector('#toPDF');
        const customers_table = document.querySelector('#customers_table');

        const toPDF = function(customers_table) {
        const cloned_table = customers_table.cloneNode(true);

        cloned_table.querySelectorAll('thead th:last-child, tbody tr td:last-child').forEach(el => el.remove());

        const html_code = `
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/moniteurPdf.css">
    </head>
    <body>
        <main class="table">${cloned_table.innerHTML}</main>
    </body>
    </html>`;

        const new_window = window.open();
    new_window.document.write(html_code);

    setTimeout(() => {
        new_window.print();
        new_window.close();
    }, 400);
};

pdf_btn.onclick = () => {
    toPDF(customers_table);
};




</script>


<?php $this->endSection(); ?>