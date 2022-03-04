<?php

class PetFood
{
    public $name;
    public $type_food_animal;
    public $price;

    public function __construct($name, $type_animal, $price)
    {
        $this->setName($name);
        $this->setTypeAnimal($type_animal);
        $this->setPrice($price);
    }

    public function setName($name)
    {
        if (!is_numeric($name)) return
            $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setTypeAnimal($type_animal)
    {
        if (!is_numeric($type_animal)) return
            $this->type_food_animal = $type_animal;
    }

    public function getTypeAnimal()
    {
        return $this->type_animal;
    }

    public function setPrice($price)
    {
        if (is_numeric($price) && $price > 0) return
            $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
