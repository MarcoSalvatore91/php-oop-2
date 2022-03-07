<?php

require_once __DIR__ . '/Products.php';
class PetFood extends Products
{
    private $type_animal;

    public function __construct($name, $type_animal, $price, $discount)
    {
        parent::__construct($this->setName($name), $this->setPrice($price), $this->setDiscount($discount));
        $this->setTypeAnimal($type_animal);
    }

    public function setTypeAnimal($type_animal)
    {
        if (is_numeric($type_animal)) return;
        $this->type_food_animal = $type_animal;
    }

    public function getTypeAnimal()
    {
        return $this->type_animal;
    }
}
