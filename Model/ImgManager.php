<?php
require_once "Model/Manager.php";
require_once "Model/logement.php";
require_once "Model/logementManager.php";

class ImageManager extends Manager {
    
    public function imgUpload($id){

        if(isset($_FILES['file'])){
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];
        
            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));
        
            $extensions = ['jpg', 'png', 'jpeg', 'gif'];
            $maxSize = 500000;
        
            if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){
        
                $uniqueName = time();
                //uniqid génère un timestamp pour en faire un nom d'image unique
                $file = $uniqueName.".".$extension;
                //$file = "timestamp".jpg
        
                move_uploaded_file($tmpName, './upload/'.$file);
        
                $req = $this->getBdd()->prepare('INSERT INTO file (name) VALUES (?)');
                $req->execute([$file]);
                
                $logementManager = new LogementManager();
                $logement = $logementManager->getLogementById($id);
                $logement->setPhoto('./upload/'.$file);
                $logementController = new LogementController();
                $logementController->editLogementValidation($id);
                
            }
            else{
                echo "Une erreur est survenue";
            }
        }
        
    }
}