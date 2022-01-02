<?php ob_start()?>

<div class="text-center">
  <H1>Nos dernières entrées</h1>
</div>

<div class="row p-2 m-auto align-items-center justify-content-between" style="height: 30rem">
<?php foreach ($logements as $logement) : ?>
  <div class="card text-center" style="width: 18rem;">
  <img src="../upload/<?= $logement->getPhoto() ?>" class="card-img-top p-4 m-2" alt="photo du logement">
  <div class="card-body">
    <h5 class="card-title"><?= $logement->getTitle() ?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="card-text list-unstyled m-1 p-2"> <strong><?= $logement->getLogementType() ?> de <?= $logement->getArea() ?> m²</strong></li>
    <li class="card-text list-unstyled m-1 p-2"> Prix : <?= $logement->getPrice() ?> €</li>
    <li class="card-text list-unstyled m-1 p-2"><?= $logement->getAdress() ?></li>
    <li class="card-text list-unstyled m-1 p-2"><?= $logement->getPostalCode() ?> <?= $logement->getCity() ?></li>
    <li class="card-text list-unstyled m-1 p-2 description"><strong>Description </strong><span><?= $logement->getLogementDescription() ?></span></li>
    <li class="card-text list-unstyled m-1 p-2 enfant"></li>
  </ul>
  </div>
  <?php endforeach; ?>

</div>
<?php



$content = ob_get_clean();
$title="Bienvenue chez Immobilier Facile";
require_once "base.html.php";

?>

