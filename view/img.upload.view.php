<?php require_once "Model/ImgManager.php" ?>

<form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id-logement?" value="<?= $logement->getId() ?>">
    <label for="file"> <h3> Ajouter une photo</h3></label>
    <input type="file" name="file">
    <button type="submit" onclick="imgUpload(<?= $logement->getId() ?>)">Enregistrer</button>
</form>