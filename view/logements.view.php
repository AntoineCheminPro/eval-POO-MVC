<?php ob_start() ?>

<h2 class="text-center">Notre selection de logements</h2>

<div class="row p-2 m-auto align-items-center justify-content-between" style="height: 20rem">

  <?php foreach ($logements as $logement) : ?>
    <div class="card" style="width: 18rem;">
      <img src="<?= $logement->getPhoto() ?>" class="card-img-top" alt="photo du logement">
      <div class="card-body">
        <h5 class="card-title"><?= $logement->getTitle() ?></h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="card-text list-unstyled"> <strong><?= $logement->getLogementType() ?> de <?= $logement->getArea() ?> m²</strong></li>
        <li class="card-text list-unstyled"><?= $logement->getPostalCode() ?> <?= $logement->getCity() ?></li>
        <li class="card-text list-unstyled"> Prix : <?= $logement->getPrice() ?> €</li>
        <li class="card-text list-unstyled"> Adresse : <?= $logement->getAdress() ?></li>
      </ul>
      <div class="card-body">
        <a href="<?= URL ?>logements/edit/<?= $logement->getId() ?>"><i class="fas fa-edit"></i></a>
        <form method="POST" action="<?= URL ?>logements/delete/<?= $logement->getId() ?>" onsubmit="return confirm('Êtes-vous certain de vouloir supprimer ce logement?')">
          <button class="btn" type="submit"><i class="fas fa-trash"></i></button></td>
        </form>
      </div>
    </div>

  <?php endforeach; ?>
</div>



<a href="<?= URL ?>logements/add" class="btn btn-success w-25 d-block m-auto">Ajouter un logement</a>

<?php
$content = ob_get_clean();
$title = "Liste de logements";
require_once "base.html.php";
?>