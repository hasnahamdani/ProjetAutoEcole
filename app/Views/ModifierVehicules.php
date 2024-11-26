<form action="<?= base_url('/Vehicules/update/' . $Vehicules['id']) ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    
    <label for="Nom">Nom :</label>
    <input type="text" id="Nom" name="Nom" value="<?= esc($Vehicules['Nom']) ?>" required>

    <label for="Modele">Modèle :</label>
    <input type="number" id="Modele" name="Modele" value="<?= esc($Vehicules['Modele']) ?>" required>

    <label for="DateAchat">Date d'achat :</label>
    <input type="date" id="DateAchat" name="DateAchat" value="<?= esc($Vehicules['DateAchat']) ?>" required>

    <label for="Matricule">Matricule :</label>
    <input type="text" id="Matricule" name="Matricule" value="<?= esc($Vehicules['Matricule']) ?>" required>

    <label for="Image">Image (optionnelle) :</label>
    <?php if (!empty($Vehicules['Image'])): ?>
        <div class="image-preview" id="current-image-preview">
            <img src="<?= base_url('uploads/' . esc($Vehicules['Image'])) ?>" alt="Image actuelle du véhicule" id="current-image" style="max-width: 200px; max-height: 150px; object-fit: cover;">
        </div>
    <?php endif; ?>

    <input type="file" id="Image" name="Image" onchange="previewImage(event)">

    <div class="new-image-preview" id="new-image-preview" style="display:none;">
        <img id="new-image" src="" alt="Nouvelle image du véhicule" style="max-width: 200px; max-height: 150px; object-fit: cover;">
    </div>

    <button type="submit">Mettre à jour</button>
</form>

<script>
    function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function() {
            // Afficher la nouvelle image en aperçu
            const newImagePreview = document.getElementById('new-image-preview');
            const newImage = document.getElementById('new-image');
            newImagePreview.style.display = 'block'; // Afficher la section de prévisualisation
            newImage.src = reader.result; // Mettre à jour l'image avec le contenu du fichier

            // Cacher l'image actuelle si une nouvelle image est sélectionnée
            const currentImagePreview = document.getElementById('current-image-preview');
            currentImagePreview.style.display = 'none';
        };

        if (file) {
            reader.readAsDataURL(file); // Charger l'image sélectionnée en base64
        }
    }
</script>
