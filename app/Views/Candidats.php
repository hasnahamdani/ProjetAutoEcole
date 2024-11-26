<?php $this->extend('layouts/admin'); ?>

<?php $this->section('dashboard_content'); ?>
<main class="table" id="customers_table">
    <section class="table__header">
        <h1>Customer's Orders</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
            <img src="images/search.png" alt="">
        </div>
        <div class="export__file">
            <label for="export-file" class="export__file-btn" title="Export File"></label>
            <input type="checkbox" id="export-file">
            <div class="export__file-options">
                <label>Export As &nbsp; &#10140;</label>
                <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
            </div>
        </div>
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> NOM  <span class="icon-arrow">&UpArrow;</span></th>
                    <th> CIN <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Télé <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Type <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Date C.A.P <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Numéro C.A.P <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($moniteurs as $moniteur): ?>
                    <tr>
                        <td><?= esc($moniteur['nom']) ?></td>
                        <td><?= esc($moniteur['cin']) ?></td>
                        <td><?= esc($moniteur['tele']) ?></td>
                        <td><?= $moniteur['type'] ? 'Pratique' : 'Théorique' ?></td>
                        <td><?= esc($moniteur['dateCAP']) ?></td>
                        <td><?= esc($moniteur['numCAP']) ?></td>
                        <td>
                            <p class="status delivered">Modifier</p>
                            <p class="status cancelled">Supprimer</p>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>
<script src="script.js"></script>
<link rel="stylesheet" href="/css/table.css">
<?php $this->endSection(); ?>
