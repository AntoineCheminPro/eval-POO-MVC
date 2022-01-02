<?php ob_start() ?>

<form method="POST" action="<?= URL ?>logements/editvalid" enctype="multipart/form-data">>

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
    <div class="form-group">
        <label for="logement_type">type de logement</label>
        <input type="text" class="form-control" value="<?= $logement->getLogementType() ?>" id="logement_type" name="logement_type" placeholder="type de logement">
    </div>
    <div class="form-group">
        <label for="logement_description">description</label>
        <input type="text" class="form-control" value="<?= $logement->getLogementDescription() ?>" id="logement_description" name="logement_description" placeholder="description">
    </div>
    <!-- <div class="form-group">
        <label for="photo">photo</label>
        <input type="text" class="form-control" value="<?= $logement->getPhoto() ?>" id="photo" name="photo" placeholder="photo">
    </div> -->
    <!-- --------------btn modifier------------------------------ -->
    <input type="hidden" name="id" value="<?= $logement->getId() ?>">
    <div class="container text-center">
    </div>
    
    <!-- ---------------------------Upload image------------------------ -->
    <div>
    <label for="photo"> <h3> Ajouter une photo</h3></label>
    <input type="file" id="photo" name="photo">
    <button type="submit" onclick="imgUpload(<?= $logement->getId() ?>)"class="btn btn-warning m-4 p-4">Modifier</button>
    </div>
</form>

        

<?php

$content = ob_get_clean();
$title = "Edition de : " . $logement->getTitle();
require_once "base.html.php";

?>