
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
        
    </div>
        <!-- Champ de recherche -->
        <div class="input-group">
            <input type="search" placeholder="Rechercher..." />
            <img src="images/search.png" alt="search icon">
        </div>
    </section>

    <!-- Tableau des moniteurs -->
    <section class="table__body">
    <div class="export__file">
            
                
                
            <label class="pdf">Export As &nbsp; &#10140;</label>
            <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
            <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
            <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
            <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
        </div>
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

// 4. Converting HTML table to JSON

const json_btn = document.querySelector('#toJSON');

const toJSON = function (table) {
    let table_data = [],
        t_head = [],

        t_headings = table.querySelectorAll('th'),
        t_rows = table.querySelectorAll('tbody tr');

    for (let t_heading of t_headings) {
        let actual_head = t_heading.textContent.trim().split(' ');

        t_head.push(actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase());
    }

    t_rows.forEach(row => {
        const row_object = {},
            t_cells = row.querySelectorAll('td');

        t_cells.forEach((t_cell, cell_index) => {
            const img = t_cell.querySelector('img');
            if (img) {
                row_object['customer image'] = decodeURIComponent(img.src);
            }
            row_object[t_head[cell_index]] = t_cell.textContent.trim();
        })
        table_data.push(row_object);
    })

    return JSON.stringify(table_data, null, 4);
}

json_btn.onclick = () => {
    const json = toJSON(customers_table);
    downloadFile(json, 'json', 'table_data.json');
}

// 5. Converting HTML table to CSV File

const csv_btn = document.querySelector('#toCSV');

const toCSV = function (table) {
    // Code For SIMPLE TABLE
    // const t_rows = table.querySelectorAll('tr');
    // return [...t_rows].map(row => {
    //     const cells = row.querySelectorAll('th, td');
    //     return [...cells].map(cell => cell.textContent.trim()).join(',');
    // }).join('\n');

    const t_heads = table.querySelectorAll('th'),
        tbody_rows = table.querySelectorAll('tbody tr');

    const headings = [...t_heads].map(head => {
        let actual_head = head.textContent.trim().split(' ');
        return actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase();
    }).join(',') + ',' + 'image name';

    const table_data = [...tbody_rows].map(row => {
        const cells = row.querySelectorAll('td'),
            img = decodeURIComponent(row.querySelector('img').src),
            data_without_img = [...cells].map(cell => cell.textContent.replace(/,/g, ".").trim()).join(',');

        return data_without_img + ',' + img;
    }).join('\n');

    return headings + '\n' + table_data;
}

csv_btn.onclick = () => {
    const csv = toCSV(customers_table);
    downloadFile(csv, 'csv', 'table_data.csv');
}

// 6. Converting HTML table to EXCEL File

const excel_btn = document.querySelector('#toEXCEL');

const toExcel = function (table) {
    // Code For SIMPLE TABLE
    // const t_rows = table.querySelectorAll('tr');
    // return [...t_rows].map(row => {
    //     const cells = row.querySelectorAll('th, td');
    //     return [...cells].map(cell => cell.textContent.trim()).join('\t');
    // }).join('\n');

    const t_heads = table.querySelectorAll('th'),
        tbody_rows = table.querySelectorAll('tbody tr');

    const headings = [...t_heads].map(head => {
        let actual_head = head.textContent.trim().split(' ');
        return actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase();
    }).join('\t') + '\t' + 'image name';

    const table_data = [...tbody_rows].map(row => {
        const cells = row.querySelectorAll('td'),
            img = decodeURIComponent(row.querySelector('img').src),
            data_without_img = [...cells].map(cell => cell.textContent.trim()).join('\t');

        return data_without_img + '\t' + img;
    }).join('\n');

    return headings + '\n' + table_data;
}

excel_btn.onclick = () => {
    const excel = toExcel(customers_table);
    downloadFile(excel, 'excel', 'table_data.xlsx');
}

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

