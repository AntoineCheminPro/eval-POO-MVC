<?php ob_start()?>

<form method="POST" action="<?= URL ?>games/editvalid">

        <div class="form-group">
            <label for="title">Nom du logement</label>
            <input type="text" class="form-control" value="<?=$logement->getTitle()?>" name="title" id="title" placeholder="Le nom de cecity...">
        </div>
        <div class="form-group">
            <label for="city">Ville</label>
            <input type="number" class="form-control"  value="<?=$logement->getcity()?>" name="city" id="city" placeholder="La ville de ce logement...">
        </div>
        <input type="hidden" name="id-logement" value="<?=$logement->getId()?>">
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>



<?php

    $content = ob_get_clean();
    $title="Edition de : " . $logement->getTitle();
    require_once "base.html.php";

?>
