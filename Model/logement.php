<?php

class Logement {

    private $id;
    private $title;
    private $adress;
    private $city;
    private $postalCode;
    private $area;
    private $price;
    private $photo;
    private $type;
    private $description;



    public function __construct($id, $title, $adress, $city, $postalCode, $area, $price, $photo, $type, $description)

    {
        $this->id = $id;
        $this->title = $title;
        $this->adress = $adress;
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->area = $area;
        $this->price = $price;
        $this->photo = $photo;
        $this->type = $type;
        $this->description = $description;
    
        
    }
}