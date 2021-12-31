<?php

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Immobilier</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
            <a class="navbar-brand text-warning" href="<?= URL?>accueil">Logement facile</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= URL?>accueil">
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL?>logements">Logements</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">

        <h1 class="my-4 text-center bg-secondary shadow p-2">
            <?= $title ?>
        </h1>

            <?= $content ?>

        </div>
    </main>
    <footer class="jumbotron row m-0 p-0 bg-fourthColor no-gutters">

<div class="form-group display-block col-3 align-self-center px-5">
  <label for="exampleInputEmail1">Email</label>
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email">
  <small id="emailHelp" class="form-text text-muted">Nous ne divulgons pas les e-mails !</small>
</div>

<div class="block col-6 row align-self-center px-5">
    <div class="col-6 align-self-center footerText p-4">
        <h6>Adresse</h6>
        <p class="lead footerText">12 Rue du mail</p>
        <p class="lead footerText">56100 Lorient</p>
        <hr>    
        <h6 >Téléphone</h6>
        <p class="lead">02 92 54 18 67</p>
    </div>
    <div id="map" class="m-2 no-gutters">
        <!-- Ici s'affichera la carte -->
    </div>
    </div>
</div>

<div class="block my-4  col-3 align-self-center">
<ul class="flex fullCenter">
          <li>
             <a href="https://twitter.com">
                <img class="icone" src="img/icoTwitter.png" alt="logo twitter clicable">
             </a>
             <a href="https://www.facebook.com/">
                <img class="icone" src="img\icoFacebook2.png" alt="logo facebook clicable">
             </a>
             <a href="https://www.instagram.com/">
                <img class="icone" src="img\icoInstagram2.png" alt="logo instagram clicable">
             </a>
             <a href="https://www.tiktok.com/">
                <img class="icone" src="img\icons8-tic-tac-50.png" alt="logo tiktok clicable">
             </a>
          </li>
       </ul>
</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script><script src="https://maps.google.com/maps/api/js?key=AIzaSyC4Co-a_Ymv-nMTYljmVSzoJ9kZanbabuc" type="text/javascript"></script>
</body>

</html>
