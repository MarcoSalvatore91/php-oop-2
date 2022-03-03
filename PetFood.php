<?php

class PetFood
{
    public $name_food;
    public $type_food_animal;
    public $price;

    public function __construct($name_food, $type_food_animal, $price)
    {
        $this->setNameFood($name_food);
        $this->setTypeFoodAnimal($type_food_animal);
        $this->setPrice($price);
    }

    public function setNameFood($name_food)
    {
        if (!is_numeric($name_food)) return
            $this->name_food = $name_food;
    }

    public function getNameFood()
    {
        return $this->name_food;
    }

    public function setTypeFoodAnimal($type_food_animal)
    {
        if (!is_numeric($type_food_animal)) return
            $this->type_food_animal = $type_food_animal;
    }

    public function getTypeFoodAnimal()
    {
        return $this->type_food_animal;
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
