<?php ob_start() ?>

<form method="POST" action="<?= URL ?>logements/lvalid">
  <div class="form-group">
    <label for="title">Nom du logement</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="nom du logement">
  </div>
  <div class="form-group">
    <label for="city">ville</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="ville">
  </div>
  <div class="form-group">
    <label for="postalCode">code postal</label>
    <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="code postal">
  </div>
  <div class="form-group">
    <label for="adress">Adresse</label>
    <input type="text" class="form-control" id="adress" name="adress" placeholder="Adresse">
  </div>
  <div class="form-group">
    <label for="area">surface en m²</label>
    <input type="number" class="form-control" id="area" name="area" placeholder="surface en m²">
  </div>
  <div class="form-group">
    <label for="price">prix</label>
    <input type="number" class="form-control" id="price" name="price" placeholder="prix">
  </div>
  <div class="form-group">
    <label for="logement_type">type de logement</label>
    <input type="text" class="form-control" id="logement_type" name="logement_type" placeholder="type de logement">
  </div>
  <div class="form-group">
    <label for="logement_description">description</label>
    <input type="text" class="form-control" id="logement_description" name="logement_description" placeholder="description">
  </div>
  <div class="form-group">
    <label for="photo">photo</label>
    <input type="text" class="form-control" id="photo" name="photo" placeholder="photo">
  </div>
  <div class="container text-center">
  <button type="submit" class="btn btn-success m-4 P-4">Ajouter</button>
  </div>
</form>

<?php

$content = ob_get_clean();
$title = "Ajouter un logement";
require_once "base.html.php";

?>