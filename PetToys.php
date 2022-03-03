<?php

class PetToys
{
    public $name_toys;
    public $type_toys_animal;
    public float $price;

    public function __construct($name_toys, $type_toys_animal, float $price)
    {
        $this->setNameToys($name_toys);
        $this->setTypeToysAnimal($type_toys_animal);
        $this->setPrice($price);
    }

    public function setNameToys($name_toys)
    {
        if (!is_numeric($name_toys)) return
            $this->name_toys = $name_toys;
    }

    public function getNameToys()
    {
        return $this->name_toys;
    }

    public function setTypeToysAnimal($type_toys_animal)
    {
        if (!is_numeric($type_toys_animal)) return
            $this->type_toys_animal = $type_toys_animal;
    }

    public function getTypeToysAnimal()
    {
        return $this->type_toys_animal;
    }

    public function setPrice($price)
    {
        if (is_numeric($price) || $price <= 0) return
            $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
