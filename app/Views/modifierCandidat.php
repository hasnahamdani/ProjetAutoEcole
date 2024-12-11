<?php $this->extend('layouts/admin'); ?>

<?php $this->section('dashboard_content'); ?>

<div class="container2">

    <header>Modifier un Candidat</header>

    <form action="<?= base_url('Candidats/update/' . $candidat['id']) ?>" method="post" enctype="multipart/form-data">
        <div class="form first">
            <div class="details personal">
                <div class="fields">
                    <div class="input-field">
                        <label>Nom complet:</label>
                        <input type="text" name="nom" value="<?= set_value('nom', $candidat['nom']) ?>" required>
                    </div>
                    <div class="input-field">
                        <label>Adresse:</label>
                        <input type="text" name="adresse" value="<?= set_value('adresse', $candidat['adresse']) ?>" required>
                    </div>
                    <div class="input-field">
                        <label>Date d'inscription:</label>
                        <input type="date" name="dateInscription" value="<?= set_value('dateInscription', $candidat['dateInscription']) ?>" required>
                    </div>
                    <div class="input-field">
                        <label>Prix en DH:</label>
                        <input type="number" name="prix" value="<?= set_value('prix', $candidat['prix']) ?>" required>
                    </div>
                    <div class="input-field">
                        <label>Téléphone:</label>
                        <input type="number" name="tele" value="<?= set_value('tele', $candidat['tele']) ?>" required>
                    </div>
                    <div class="input-field">
                        <label>CIN:</label>
                        <input type="text" name="cin" value="<?= set_value('cin', $candidat['cin']) ?>" required>
                    </div>
                    <div class="input-field">
                        <label>Age:</label>
                        <input type="number" name="age" value="<?= set_value('age', $candidat['age']) ?>" required>
                    </div>
                    <div class="input-field">
                        <label>Votre image:</label>
                        <?php if (!empty($candidat['image']) && file_exists(FCPATH . 'uploads/' . $candidat['image'])): ?>
                            <img id="previewImage" src="<?= base_url('uploads/' . $candidat['image']) ?>" alt="Image du candidat" style="max-width: 150px; max-height: 150px;">
                        <?php endif; ?>
                        <input type="file" name="image" id="imageInput">
                    </div>
                    <div class="details ID">
                    <span class="title">Informations de moniteurs:</span>
                    <div class="fields">
             <label>Moniteur Pratique:</label>
         <select name="moniteur_pratique_id" required>
        <?php foreach ($moniteursPratique as $moniteur): ?>
            <option value="<?= $moniteur['id'] ?>" <?= $moniteur['id'] == $candidat['moniteur_pratique_id'] ? 'selected' : '' ?>>
                <?= $moniteur['nom'] ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>

           
                <label>Moniteur Théorique:</label>
                <select name="moniteur_theorique_id" required>
                    <?php foreach ($moniteursTheorique as $moniteur): ?>
                        <option value="<?= $moniteur['id'] ?>" <?= $moniteur['id'] == $candidat['moniteur_theorique_id'] ? 'selected' : '' ?>>
                            <?= $moniteur['nom'] ?>
                        </option>
                    <?php endforeach; ?>
                    </select>
                    </div>
                </div>
            </div>

            <div class="buttons">
                <button type="button" class="nextBtn" onclick="history.back();">
                    <span class="btnText">Retour</span>
                </button>
                <button type="submit" class="nextBtn">
                    <span class="btnText">Modifier</span>
                </button>
            </div>
        </div>
    </form>
</div>

<script>
        document.getElementById('imageInput').addEventListener('change', function(event) {
        const file = event.target.files[0];         const previewImage = document.getElementById('previewImage'); 
        if (file) {
            const reader = new FileReader();             reader.onload = function(e) {
                previewImage.src = e.target.result;                 previewImage.style.display = 'block';             };
            reader.readAsDataURL(file);         } else {
                        previewImage.style.display = 'none';
        }
    });
</script>
<style>
/* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

.container2 {
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.container2 header {
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

.container2 header::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}

.container2 form {
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
    padding-bottom: 20px;
}

.container2 form .fields {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

.input-field {
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}

.input-field label {
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}

.input-field input, select {
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

.buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.nextBtn {
    background-color: #4070f4;
    border: none;
    color: #fff;
    padding: 10px 20px;
    font-size: 14px;
    border-radius: 5px;
    cursor: pointer;
}

.nextBtn:hover {
    background-color: #265df2;
}

@media (max-width: 750px) {
    .container2 form {
        overflow-y: scroll;
    }
    .container2 form::-webkit-scrollbar {
        display: none;
    }

    .input-field {
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    .input-field {
        width: 100%;
    }
}
</style>

<?php $this->endSection(); ?>