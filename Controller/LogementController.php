<?php
require_once "model/LogementManager.php";
require_once "ImgController.php";

class LogementController{

private $logementManager;
private $imgController;

public function __construct(){
    $this->logementManager = new LogementManager();
    $this->logementManager->loadLogements();

    $this->imgController = new ImgController;
}

// -------------------------Display all Logements to view-------------------------
public function displayLogements(){
    $logements = $this->logementManager->getLogements();
    require_once "view/logements.view.php";
}

// --------------------------------New Logement form -------------------------
public function newLogementForm(){
    require_once "view/new.logement.view.php";
}

// --------------------------------New Logement Form Validation & redirection-----------
public function newLogementValidation(){
    $this->logementManager->newLogementDB($_POST['title'], $_POST['adress'], $_POST['city'], $_POST['postalCode'], $_POST['area'], $_POST['price'],
        $_POST['photo'], $_POST['logement_type'], $_POST['logement_description']);
    header('Location:' . URL . 'logements');
}

// ----------------------------Logement edit Form redirection to view--------------------
public function editLogementForm($id){
    $logement = $this->logementManager->getLogementById($id);
    require_once "view/edit.logement.view.php";
}

// ----------------------------Logement edit & redirection --------------------
public function editLogementValidation(){
    $imgName = $this->imgController->imgUpload($_FILES);
    if ($imgName !== false) {
        $this->logementManager->editLogementDB($_POST['id'], $_POST['title'], $_POST['adress'], $_POST['city'], $_POST['postalCode'], $_POST['area'], $_POST['price'],
        $imgName, $_POST['logement_type'], $_POST['logement_description']);
    header('Location:' . URL . 'logements');
    }
}

// ----------------------------Logement delete & redirection --------------------
public function deleteLogement($id){
    $this->logementManager->deleteLogementDB($id);
    header('Location:' . URL . 'logements');
}
}

