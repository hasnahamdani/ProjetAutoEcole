
<?php $this->extend('layouts/admin'); ?>

<?php $this->section('dashboard_content'); ?>
<main class="table">
    
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
                    <th>NOM </th>
                    <th>email </th>
                    <th>Téléphone </th>
                    <th>Adresse </th>
                    <th>Ville </th>
                    <th>CIN </th>
                    <th>Date de naissance </th>
                    <th>rendez-Vous </th>
                    <th>Action </th>
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
                <td>
                <a href="<?= base_url('Rendez/supprimer/'.$rendezvous['id']) ?>" 
                                class="material-symbols-outlined" 
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rendez_vous ?');">
                                    <span class="material-symbols-outlined">delete</span>
                                </a>
                </td>
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

  
</main>



<script>
 
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

