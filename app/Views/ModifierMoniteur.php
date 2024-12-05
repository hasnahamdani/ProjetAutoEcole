<?= $this->extend('layouts/admin'); ?>
<?= $this->section('dashboard_content'); ?>

<h1>Modifier Moniteur</h1>

<form action="/Moniteurs/update/<?= esc($moniteur['id']) ?>" method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" value="<?= esc($moniteur['nom']) ?>" required>

    <label for="cin">CIN:</label>
    <input type="text" id="cin" name="cin" value="<?= esc($moniteur['cin']) ?>" required>

    <label for="tele">Téléphone:</label>
    <input type="text" id="tele" name="tele" value="<?= esc($moniteur['tele']) ?>" required>

    <label for="type">Type:</label>
    <select id="type" name="type" required>
        <option value="Pratique" <?= ($moniteur['type'] == 1) ? 'selected' : ''; ?>>Pratique</option>
        <option value="Théorique" <?= ($moniteur['type'] == 0) ? 'selected' : ''; ?>>Théorique</option>
    </select>

    <label for="dateCAP">Date C.A.P:</label>
    <input type="date" id="dateCAP" name="dateCAP" value="<?= esc($moniteur['dateCAP']) ?>" required>

    <label for="numCAP">Numéro C.A.P:</label>
    <input type="number" id="numCAP" name="numCAP" value="<?= esc($moniteur['numCAP']) ?>" required>

    <button type="submit">Enregistrer les modifications</button>
</form>

<?= $this->endSection();
?>
