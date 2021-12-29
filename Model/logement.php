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

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of adress
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     */
    public function setAdress($adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     */
    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of postalCode
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set the value of postalCode
     */
    public function setPostalCode($postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get the value of area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of area
     */
    public function setArea($area): self
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     */
    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }
}