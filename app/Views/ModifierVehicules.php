<?php $this->extend('layouts/admin'); ?>

<?php $this->section('dashboard_content'); ?>
<section class="container2">
    <header>Modifier un véhicule</header>
    <form action="<?= base_url('/Vehicules/update/' . $Vehicules['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="form first">
            <div class="details personal">
                <div class="fields">
                    <div class="input-field">
                        <label for="Nom">Nom :</label>
                        <input type="text" id="Nom" name="Nom" value="<?= esc($Vehicules['Nom']) ?>" required>
                    </div>

                    <div class="input-field">
                        <label for="Modele">Modèle :</label>
                        <input type="number" id="Modele" name="Modele" value="<?= esc($Vehicules['Modele']) ?>" required>
                    </div>

                    <div class="input-field">
                        <label for="DateAchat">Date d'achat :</label>
                        <input type="date" id="DateAchat" name="DateAchat" value="<?= esc($Vehicules['DateAchat']) ?>" required>
                    </div>

                    <div class="input-field">
                        <label for="Matricule">Matricule :</label>
                        <input type="text" id="Matricule" name="Matricule" value="<?= esc($Vehicules['Matricule']) ?>" required>
                    </div>

                    <div class="input-field">
                        <label for="Image">Image </label>
                        <?php if (!empty($Vehicules['Image'])): ?>
                            <div class="image-preview" id="current-image-preview">
                                <img src="<?= base_url('uploads/' . esc($Vehicules['Image'])) ?>" alt="Image actuelle du véhicule" id="current-image" style="max-width: 200px; max-height: 150px; object-fit: cover;">
                            </div>
                        <?php endif; ?>

                        <input type="file" id="Image" name="Image" onchange="previewImage(event)">

                        <div class="new-image-preview" id="new-image-preview" style="display:none;">
                            <img id="new-image" src="" alt="Nouvelle image du véhicule" style="max-width: 200px; max-height: 150px; object-fit: cover;">
                        </div>
                    </div>
                </div> <!-- Fermeture de .fields -->
            </div> <!-- Fermeture de .details.personal -->

            <button type="button" class="nextBtn" onclick="history.back();">
                <span class="btnText">Retour</span>
            </button>

            <button type="submit" class="nextBtn">
                <span class="btnText">Mettre à jour</span>
            </button>
        </div> 
    </form>
</section>
<script>
    function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function() {
                        const newImagePreview = document.getElementById('new-image-preview');
            const newImage = document.getElementById('new-image');
            newImagePreview.style.display = 'block';             newImage.src = reader.result; 
                        const currentImagePreview = document.getElementById('current-image-preview');
            currentImagePreview.style.display = 'none';
        };

        if (file) {
            reader.readAsDataURL(file);         }
    }
</script>

<style>
.container2{
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container2 header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}
.container2 header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}
.container2 form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.container2 form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}


form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container2 form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container2 form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}

.container2 form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}

form .buttons{
    display: flex;
    align-items: center;
}

@media (max-width: 750px) {
    .container2 form{
        overflow-y: scroll;
    }
    .container2 form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}

</style>
<?= $this->endSection(); ?>
