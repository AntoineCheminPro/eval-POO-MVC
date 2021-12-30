<?php
require_once "model/Manager.php";
require_once "model/Logement.php";

class LogementManager extends Manager {
    
    private $logements;

    public function addLogement($logement){
        $this->logements[] = $logement;
    }

    public function getLogements(){
        return $this->logements;
    }

    // -------------------Get 3 Logements from DB---------------------

    public function getThreeLogements(){
        $this->loadLogements();
        $logements = array_slice( $this->logements, 0, 3 );
        return $logements;
    }

    // --------------------------------Get all logements from DB------------

    public function loadLogements(){
        $req = $this->getBdd()->prepare("SELECT * FROM logement");
        $req->execute();
        $myLogements = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
    
        foreach($myLogements as  $logement){
            $l = new Logement ($logement["id"],$logement["title"],$logement["adress"],$logement["city"],
            $logement["postalCode"],$logement["area"],$logement["price"],$logement["photo"],$logement["logement_type"],$logement["logement_description"]);
            $this->addLogement($l);
        }
    }
    
    // -------------------------------------------------------------
    // --------------------------------CRUD-------------------------
    // -------------------------------------------------------------


    // --------------------------------CREATE-----------------------
    public function newLogementDB($title,$adress,$city,$postalCode,$area,$price,$photo,$logement_type,$logement_description){
        $req = "INSERT INTO logement (title,adress,city,postalCode,area,price,photo,logement_type,logement_description) 
        VALUES (:title,:adress,:city,:postalCode,:area,:price,:photo,:logement_type,:logement_description)";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":title", $title, PDO::PARAM_STR);
        $statement->bindValue(":adress", $adress, PDO::PARAM_STR);
        $statement->bindValue(":city", $city, PDO::PARAM_STR);
        $statement->bindValue(":postalCode", $postalCode, PDO::PARAM_STR);
        $statement->bindValue(":area", $area, PDO::PARAM_INT);
        $statement->bindValue(":price", $price, PDO::PARAM_INT);
        $statement->bindValue(":photo", $photo, PDO::PARAM_STR);
        $statement->bindValue(":logement_type", $logement_type, PDO::PARAM_STR);
        $statement->bindValue(":logement_description", $logement_description, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();
    

        if ($result) {
            $logement = new Logement($this->getBdd()->lastInsertId(),$title,$adress,$city,$postalCode,$area,$price,$photo,$logement_type,$logement_description);
            $this->addLogement($logement);
        }
    }

    // --------------------------------READ-----------------------
    public function getLogementById($id){
        foreach ($this->logements as $logement ) {
            if ($logement->getId() == $id) {
                return $logement;   
            }
        }
    }
    
    // --------------------------------UPDATE-----------------------

    public function editLogementDB($id, $title, $adress, $city, $postalCode, $area, $price, $photo, $logement_type, $logement_description){
        $req = "UPDATE logement SET title = :title ,adress = :adress,city = :city, postalCode = :postalCode, area = :area, 
        price = :price, photo = :photo,logement_type = :logement_type, logement_description = :logement_description WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->bindValue(":title", $title, PDO::PARAM_STR);
        $statement->bindValue(":adress", $adress, PDO::PARAM_STR);
        $statement->bindValue(":city", $city, PDO::PARAM_STR);
        $statement->bindValue(":postalCode", $postalCode, PDO::PARAM_STR);
        $statement->bindValue(":area", $area, PDO::PARAM_INT);
        $statement->bindValue(":price", $price, PDO::PARAM_INT);
        $statement->bindValue(":photo", $photo, PDO::PARAM_STR);
        $statement->bindValue(":logement_type", $logement_type, PDO::PARAM_STR);
        $statement->bindValue(":logement_description", $logement_description, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if ($result) {
            $this->getLogementById($id)->setTitle($title);
            $this->getLogementById($id)->setAdress($adress);
            $this->getLogementById($id)->setCity($city);
            $this->getLogementById($id)->setPostalCode($postalCode);
            $this->getLogementById($id)->setArea($area);
            $this->getLogementById($id)->setPrice($price);
            $this->getLogementById($id)->setPhoto($photo);
            $this->getLogementById($id)->setLogementType($logement_type);
            $this->getLogementById($id)->setLogementDescription($logement_description);
        }
    }
        
    // --------------------------------DELETE-----------------------

    public function deleteLogementDB($id){
        $req = "DELETE FROM logement WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $result = $statement->execute();
        $statement->closeCursor();

        if ($result) {
            $logement = $this->getLogementById($id);
            unset($logement);
        }
}

}