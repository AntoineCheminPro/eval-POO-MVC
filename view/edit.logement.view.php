<?php ob_start() ?>

<form method="POST" action="<?= URL ?>games/editvalid">

    <div class="form-group">
        <label for="title">Nom du logement</label>
        <input type="text" class="form-control" value="<?= $logement->getTitle() ?>" name="title" id="title" placeholder="Le nom de ce logement...">
    </div>
    <div class="form-group">
        <label for="nbPlayers">Ville</label>
        <input type="number" class="form-control" value="<?= $logement->getCity() ?>" name="city" id="city" placeholder="La ville du logement...">
    </div>
    <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
        <h6>Ajouter une photo</h6>
        <label for="fileUpload">Fichier :</label>
        <input type="file" name="photo" id="fileUpload">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
    </form> -->
    <!-- <div class="form-group">
                <label for="formFile" class="form-label mt-4">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
            </div>   -->
    <input type="hidden" name="id-logement" value="<?= $logement->getId() ?>">
    <button type="submit" class="btn btn-warning">Modifier</button>
</form>



<?php

$content = ob_get_clean();
$title = "Edition de : " . $logement->getTitle();
require_once "base.html.php";

?>