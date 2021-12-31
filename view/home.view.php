<?php ob_start()?>

<div class="text-center">
    <H1>Nos dernières entrées</h1>
</div>

<div class="row p-2 m-auto align-items-center justify-content-between" style="height: 30rem">
    <?php foreach ($logements as $logement) : ?>
      <div class="card" style="width: 18rem;">
        <img src="<?= $logement->getPhoto()?>"class="card-img-top" alt="photo du logement">
        <div class="card-body">
          <h5 class="card-title"><?= $logement->getTitle()?></h5>
        </div>
        <ul class="list-group list-group-flush">
              <li class="card-text list-unstyled"> <strong><?= $logement->getLogementType() ?> de <?= $logement->getArea() ?> m²</strong></li>
              <li class="card-text list-unstyled"><?= $logement->getPostalCode() ?> <?= $logement->getCity() ?></li>
              <li class="card-text list-unstyled"> Prix : <?= $logement->getPrice() ?> €</li>
              <li class="card-text list-unstyled"> Adresse : <?=  $logement->getAdress() ?></li>
        </ul>
        <!-- <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div> -->
</div>
    <?php endforeach; ?>

</div>
<?php



$content = ob_get_clean();
$title="Bienvenue chez Immobilier Facile";
require_once "base.html.php";

?>

