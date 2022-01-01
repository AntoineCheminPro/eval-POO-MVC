<?php
require_once "model/LogementManager.php";

class HomeController {

public function displayHome($logements){
    $logementManager = new LogementManager();
    $logements = $logementManager->getThreeLogements();
    require_once 'view/home.view.php';
}


}
