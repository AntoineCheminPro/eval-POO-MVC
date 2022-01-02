<?php
require_once "Model/imgManager.php";

class ImgController{

    private $imgManager;

public function imgUpload($file){
    
    $this->imgManager = new ImageManager;

if(isset($file['photo'])){
            $tmpName = $file['photo']['tmp_name'];
            $name = $file['photo']['name'];
                $size = $file['photo']['size'];
                $error = $file['photo']['error'];
            
                $tabExtension = explode('.', $name);
                $extension = strtolower(end($tabExtension));
            
                $extensions = ['jpg', 'png', 'jpeg', 'gif'];
                $maxSize = 500000;
            
                if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){
            
                    $uniqueName = time();
                    //uniqid génère un timestamp pour en faire un nom d'image unique
                    $newName = $uniqueName.".".$extension;
                    //$file = "timestamp".jpg
            
                    move_uploaded_file($tmpName, './upload/'.$newName);
    
                    return $newName;
                }
                else{
                    echo "Une erreur est survenue";
                    return false;
                }
            }
            
        }
}
