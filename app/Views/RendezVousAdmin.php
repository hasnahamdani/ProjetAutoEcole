
<?php $this->extend('layouts/admin'); ?>

<?php $this->section('dashboard_content'); ?>
<main class="table" id="customers_table">
    
    <section class="table__header">
        <!-- Champ de recherche -->
        <div class="input-group">
            <input type="search" placeholder="Rechercher..." />
            <img src="images/search.png" alt="search icon">
        </div>
    </section>

    <!-- Tableau des moniteurs -->
    <section class="table__body">
    <div class="export__file">
         
            <label class="pdf">Exporter sous &nbsp; &#10140;</label>
            <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
             </div>
        <table>
            <thead>
                <tr>
                    <th>NOM <span class="icon-arrow">&UpArrow;</span></th>
                    <th>email <span class="icon-arrow">&UpArrow;</span></th>
                    <th>Téléphone <span class="icon-arrow">&UpArrow;</span></th>
                    <th>Adresse <span class="icon-arrow">&UpArrow;</span></th>
                    <th>Ville <span class="icon-arrow">&UpArrow;</span></th>
                    <th>CIN <span class="icon-arrow">&UpArrow;</span></th>
                    <th>Date de naissance <span class="icon-arrow">&UpArrow;</span></th>
                    <th>rendez-Vous <span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
    <?php if (!empty($RendezVous) && is_array($RendezVous)): ?>
        <?php foreach ($RendezVous as $rendezvous): ?>
            <tr>
                <td><?= esc($rendezvous['nom']) ?></td>
                <td><?= esc($rendezvous['email']) ?></td>
                <td><?= esc($rendezvous['tele']) ?></td>
                <td><?= esc($rendezvous['address']) ?></td>
                <td><?= esc($rendezvous['city']) ?></td>
                <td><?= esc($rendezvous['cin']) ?></td>
                <td><?= esc($rendezvous['dateNaissance']) ?></td>
                <td><?= esc($rendezvous['rendezVous']) ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">Aucun rendez-vous trouvé.</td>
        </tr>
    <?php endif; ?>
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<script src="script.js"></script>
<script>
  /**
Responsive HTML Table With Pure CSS - Web Design/UI Design

Code written by:
👨🏻‍⚕️ @Coding Design (Jeet Saru)

> You can do whatever you want with the code. However if you love my content, you can **SUBSCRIBED** my YouTube Channel.

🌎link: www.youtube.com/codingdesign 
*/

const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}

// 2. Sorting | Ordering data of HTML table

table_headings.forEach((head, i) => {
    let sort_asc = true;
    head.onclick = () => {
        table_headings.forEach(head => head.classList.remove('active'));
        head.classList.add('active');

        document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
        table_rows.forEach(row => {
            row.querySelectorAll('td')[i].classList.add('active');
        })

        head.classList.toggle('asc', sort_asc);
        sort_asc = head.classList.contains('asc') ? false : true;

        sortTable(i, sort_asc);
    }
})


function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}

// 3. Converting HTML table to PDF

// Sélectionne uniquement le tableau
const table = document.querySelector('section.table__body table');

// 3. Exporter en PDF
const pdf_btn = document.querySelector('#toPDF');
pdf_btn.onclick = () => {
    const html_code = `
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid #ddd;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        ${table.outerHTML}
    </body>
    </html>`;

    const new_window = window.open();
    new_window.document.write(html_code);
    setTimeout(() => {
        new_window.print();
        new_window.close();
    }, 400);
};


const downloadFile = function (data, fileType, fileName = '') {
    const a = document.createElement('a');
    a.download = fileName;
    const mime_types = {
        'json': 'application/json',
        'csv': 'text/csv',
        'excel': 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    }
    a.href = `
        data:${mime_types[fileType]};charset=utf-8,${encodeURIComponent(data)}
    `;
    document.body.appendChild(a);
    a.click();
    a.remove();
}
</script>
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


<?php $this->endSection(); ?>

