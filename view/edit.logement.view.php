<?php ob_start() ?>

<form method="POST" action="<?= URL ?>logements/editvalid" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Nom du logement</label>
        <input type="text" class="form-control" value="<?= $logement->getTitle() ?>" name="title" id="title" placeholder="Le nom de ce logement...">
    </div>
    <div class="form-group">
        <label for="city">Ville</label>
        <input type="text" class="form-control" value="<?= $logement->getCity() ?>" name="city" id="city" placeholder="La ville du logement...">
    </div>
    <div class="form-group">
        <label for="postalCode">Code postal</label>
        <input type="text" class="form-control" value="<?= $logement->getPostalCode() ?>" name="postalCode" id="postalCode" placeholder="Code postal">
    </div>
    <div class="form-group">
        <label for="adress">Adresse</label>
        <input type="text" class="form-control" value="<?= $logement->getAdress() ?>" name="adress" id="adress" placeholder="Adresse">
    </div>
    <div class="form-group">
        <label for="area">surface en m²</label>
        <input type="number" class="form-control" value="<?= $logement->getArea() ?>" id="area" name="area" placeholder="surface en m²">
    </div>
    <div class="form-group">
        <label for="price">prix</label>
        <input type="number" class="form-control" value="<?= $logement->getPrice() ?>" id="price" name="price" placeholder="prix">
    </div>
    <div class="form-group m-4">
        <label for="logement_description">description</label>
        <input type="text" class="form-control" value="<?= $logement->getLogementDescription() ?>" id="logement_description" name="logement_description" placeholder="description">
    </div>

    <!-- --------------------Radio buttons -------------------------- -->
    <div class="form-check">
        <input class="form-check-input " type="radio" value="Maison" id="logement_type" name="logement_type" checked>
        <label class="form-check-label" for="flexCheckDefault">
            Maison
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input " type="radio" value="Appartement" id="logement_type" name="logement_type" >
        <label class="form-check-label" for="flexCheckChecked">
            Appartement
        </label>
    </div>

    <!-- ---------------------------Upload image------------------------ -->
    <div class="container text-center">
        <input type="hidden" name="id" value="<?= $logement->getId() ?>">
        <label for="photo">
            <h3> Ajouter une photo</h3>
        </label>
        <input type="file" id="photo" name="photo">
        <button type="submit" onclick="imgUpload(<?= $logement->getId() ?>)" class="btn btn-warning m-4 p-4">Modifier</button>
    </div>
</form>

<?php

$content = ob_get_clean();
$title = "Edition de : " . $logement->getTitle();
require_once "base.html.php";

?>