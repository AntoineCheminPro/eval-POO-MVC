<?php ob_start() ?>

<p class="text-center">Notre selection de logement</p>

<table class="table table-hover text-center shadow">
    <thead class="table-dark">
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Ville</th>
            <th scope="col" colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($logements as $logement) : ?>
            <tr class="table">
                <td scope="row"><?= $logement->getTitle()?></td>
                <td><?= $logement->getCity() ?></td>
                <td><a href="<?= URL ?>logement/edit/<?= $logement->getId() ?>"><i class="fas fa-edit"></i></a></td>
                <td>
                <form method="POST" action="<?= URL ?>logements/delete/<?= $logement->getId() ?>"  
                onsubmit="return confirm('Êtes-vous certain de vouloir supprimer ce logement?')">
                <button class="btn" type="submit"><i class="fas fa-trash"></i></button></td>
                </form>  
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="<?= URL?>logements/add" class="btn btn-success w-25 d-block m-auto">Ajouter un logement</a>

<?php
$content = ob_get_clean();
$title = "Liste de logements";
require_once "base.html.php";
?>
