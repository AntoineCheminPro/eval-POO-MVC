<?php

define("URL" , str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http") . 
"://".$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ));

require_once "controller/LogementController.php";
$logementController = new LogementController();

require_once "controller/HomeController.php";
$homeController = new HomeController();

if (empty($_GET['page'])) {
    $logementManager = new LogementManager();
    $logements = $logementManager->getThreeLogements();
    $homeController->displayHome($logements);

}else{

    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL) );
    switch($url[0]){
        
    
        case "accueil":
            $logementManager = new LogementManager();
            $logements = $logementManager->getThreeLogements();
            $homeController->displayHome($logements);
        break;
        
        case "logements": 
            if (empty($url[1])) {
                $logementController->displayLogements();
                }elseif($url[1] == "add"){
                    $logementController->newLogementForm();
                }elseif($url[1] == "lvalid"){
                    $logementController->newLogementValidation();
                }elseif($url[1] == "edit"){
                   $logementController->editLogementForm($url[2]);
                }elseif($url[1] == "editvalid"){
                   $logementController->editLogementValidation();
                }elseif($url[1] == "delete"){
                    $logementController->deleteLogement($url[2]);
                }elseif($url[1] == "logements"){
                    $logementController->displayLogements();
            }
        break;
    }
}