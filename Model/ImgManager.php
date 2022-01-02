<?php
require_once "Model/Manager.php";
require_once "Model/logement.php";
require_once "Model/logementManager.php";

class ImageManager extends Manager {
    
  

        public function imgRegister($id, $newName){

            $req = $this->getBdd()->prepare('INSERT INTO logement (photo) VALUES (newName)');
            $req->execute();
            $req->closeCursor();

            
            $logementManager = new LogementManager();
            $logement = $logementManager->getLogementById($id);
            $logement->setPhoto($newName);

            $logementController = new LogementController();
            $logementController->editLogementValidation($id);



        }
          
}