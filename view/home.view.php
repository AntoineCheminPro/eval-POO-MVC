<?php ob_start()?>

<div class="text-center">
    <H1>Accueil</h1>
</div>

<div class="row p-2 m-auto align-items-center justify-content-between" style="height: 30rem">
    <?php foreach ($logements as $logement) : ?>
        <div class="card text-center m-3 p-4 col-3" style="width: 18rem;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body">
            <h5 class="card-title"><?= $logement->getTitle()?></h5>
            <p class="card-text"><?= $logement->getCity() ?> Ville</p>
        </div>
        </div>
    <?php endforeach; ?>
</div>
<?php

$content = ob_get_clean();
$title="Bienvenue chez Immobilier Facile";
require_once "base.html.php";

?>
