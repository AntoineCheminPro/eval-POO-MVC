<?php ob_start()?>

<form method="POST" action="<?= URL ?>logements/gvalid">
  <div class="form-group">
    <label for="title">Nom du logement</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="nom du logement">
  </div>
  <div class="form-group">
    <label for="city">ville</label>
    <input type="number" class="form-control" id="city" name="city" placeholder="ville">
  </div>
  <button type="submit" class="btn btn-success">Ajouter</button>
</form>

<?php

$content = ob_get_clean();
$title="Ajouter un logement";
require_once "base.html.php";

?>
