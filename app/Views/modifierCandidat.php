<?php $this->extend('layouts/admin'); ?>

<?php $this->section('dashboard_content'); ?>
<form action="<?= base_url('Candidats/update/' . $candidat['id']) ?>" method="post" enctype="multipart/form-data">
    <input type="text" name="nom" value="<?= set_value('nom', $candidat['nom']) ?>" required>
    <input type="text" name="cin" value="<?= set_value('cin', $candidat['cin']) ?>" required>
    <input type="text" name="tele" value="<?= set_value('tele', $candidat['tele']) ?>" required>
    <label for="image">Image:</label>
        <?php if (!empty($candidat['image']) && file_exists(FCPATH . 'uploads/' . $candidat['image'])): ?>
            <img src="<?= base_url('uploads/' . $candidat['image']) ?>" alt="Image du candidat" style="max-width: 150px; max-height: 150px;">
        <?php endif; ?>
        <input type="file" name="image">
    <input type="date" name="dateInscription" value="<?= set_value('dateInscription', $candidat['dateInscription']) ?>" required>
    <input type="number" name="prix" value="<?= set_value('prix', $candidat['prix']) ?>" required>
    <input type="number" name="age" value="<?= set_value('age', $candidat['age']) ?>" required>
    <input type="text" name="adresse" value="<?= set_value('adresse', $candidat['adresse']) ?>" required>
    <select name="moniteur_id" required>
        <?php foreach ($moniteursPratique as $moniteur): ?>
            <option value="<?= $moniteur['id'] ?>" <?= set_select('moniteur_id', $moniteur['id'], $moniteur['id'] == $candidat['moniteur_id']) ?>>
                <?= $moniteur['nom'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Modifier</button>
</form>
<?php $this->endSection(); ?>
