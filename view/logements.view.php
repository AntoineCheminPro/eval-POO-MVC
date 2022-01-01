<?php ob_start() ?>

<h2 class="text-center">Notre selection de logements</h2>

<div class="row p-4 m-auto align-items-center justify-content-between" style="height: 20rem">

  <?php foreach ($logements as $logement) : ?>
    <div class="card text-center" style="width: 18rem;">
      <img src="<?= $logement->getPhoto() ?>" class="card-img-top p-4 m-2" alt="photo du logement">
      <div class="card-body">
        <h5 class="card-title"><?= $logement->getTitle() ?></h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="card-text list-unstyled"><?= $logement->getAdress() ?></li>
        <li class="card-text list-unstyled"><?= $logement->getPostalCode() ?> <?= $logement->getCity() ?></li>
        <li class="card-text list-unstyled"> <strong><?= $logement->getLogementType() ?> de <?= $logement->getArea() ?> m²</strong></li>
        <li class="card-text list-unstyled"> Prix : <?= $logement->getPrice() ?> €</li>
      </ul>
      <div class="card-body container row d-flex justify-content-around m-2 p-2">
        <a href="<?= URL ?>logements/edit/<?= $logement->getId() ?>" class= "btn text-center d-block  my-5 px-4"><i class="fas fa-edit"></i></a>
        <form method="POST" action="<?= URL ?>logements/delete/<?= $logement->getId() ?>" onsubmit="return confirm('Êtes-vous certain de vouloir supprimer ce logement?')">
          <button class="btn text-center d-block  my-5 px-4" type="submit"><i class="fas fa-trash"></i></button></td>
        </form>
      </div>
    </div>

  <?php endforeach; ?>

  <a href="<?= URL ?>logements/add" class="btn btn-success w-25 d-block mx-auto my-5 p-4">Ajouter un logement</a>

</div>




<?php
$content = ob_get_clean();
$title = "Liste de logements";
require_once "base.html.php";
?>