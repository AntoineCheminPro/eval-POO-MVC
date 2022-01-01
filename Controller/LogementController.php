<?php
require_once "model/LogementManager.php";

class LogementController{

private $logementManager;

public function __construct(){
    $this->logementManager = new LogementManager();
    $this->logementManager->loadLogements();
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
    $this->logementManager->editLogementDB($_POST['id-logement'], $_POST['title'], $_POST['adress'], $_POST['city'], $_POST['postalCode'], $_POST['area'], $_POST['price'],
        $_POST['photo'], $_POST['logement_type'], $_POST['logement_description']);
    header('Location:' . URL . 'logements');
}

// ----------------------------Logement delete & redirection --------------------
public function deleteLogement($id){
    $this->logementManager->deleteLogementDB($id);
    header('Location:' . URL . 'logements');
}
}

