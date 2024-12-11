<?php $this->extend('layouts/admin'); ?>

<?php $this->section('dashboard_content'); ?>
<button class="nextBtn" id="ajouterVehicule"> <span class="btnText">Ajouter un vehicule</span>  </button>
<section class="container" id="candidats_table" style="display: none;">
<span class="close-btn" id="closeModal">&times;</span>
    <h1>Ajouter un vehicule</h1>
     <form action="<?= base_url('/Vehicules/ajouter') ?>" method="post" enctype="multipart/form-data" class="form-inline">
        <?= csrf_field() ?>
        <div class="details personal">
                <div class="fields">
                <div class="input-field">
                <label for="Image">Image:</label>
                <input type="file" id="Image" name="Image" required>
            </div>

            <div class="input-field">
                <label for="Nom">Nom:</label>
                <input type="text" id="Nom" name="Nom" required>
            </div>

            <div class="input-field">
                <label for="Modele">Modèle:</label>
                <input type="number" id="Modele" name="Modele" required>
            </div>

            <div class="input-field">
                <label for="DateAchat">Date d'achat:</label>
                <input type="date" id="DateAchat" name="DateAchat" required>
            </div>

            <div class="input-field">
                <label for="Matricule">Matricule:</label>
                <input type="text" id="Matricule" name="Matricule" required>
            </div>
            </div>
                </div>
                <button type="submit" class="nextBtn">
                    <span class="btnText">Ajouter</span>
                </button>
        </form>
  
</section>

 <div class="formulaire">
    <div class="main-card">
        <div class="cards">
        <?php if (!empty($vehicules)): ?>
            <?php foreach ($vehicules as $vehicule): ?>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                            <img src="<?= base_url('uploads/' . esc($vehicule['Image'])) ?>" alt="Image du véhicule" class="vehicle-image">
                            </div>
                            
                                <div class="job"><strong><?= esc($vehicule['Nom']) ?></strong></div>
                                <div class="popup-name"><strong>Modèle:</strong> <?= esc($vehicule['Modele']) ?></div>
                                <div class="popup-name"><strong>Date d'achat:</strong><?= esc($vehicule['DateAchat']) ?></div>
                                <div class="popup-name"><strong>Matricule:</strong><?= esc($vehicule['Matricule']) ?></div>
                            
                            <div class="icon-container">
                                <a href="<?= base_url('Vehicules/modifier/' . $vehicule['id']) ?>" class="action-link">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>
                                <a href="<?= base_url('Vehicules/supprimer/' . $vehicule['id']) ?>" class="action-link" onclick="return confirm('Confirmer la suppression ?')">
                                    <span class="material-symbols-outlined">delete</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun véhicule trouvé.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<script>
     const ajouterCandidatLink = document.getElementById('ajouterVehicule');
        const candidatsTable = document.getElementById('candidats_table');
        const closeModal = document.getElementById('closeModal');

        
        ajouterCandidatLink.addEventListener('click', (e) => {
            e.preventDefault(); 
            candidatsTable.style.display = 'block'; 
        });

        
        closeModal.addEventListener('click', () => {
            candidatsTable.style.display = 'none'; 
        });

        
        window.addEventListener('click', (e) => {
            if (e.target === candidatsTable) {
                candidatsTable.style.display = 'none';
            }
        }); 

</script>
<?php $this->endSection(); ?>
