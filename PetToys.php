<?php

require_once __DIR__ . '/Address.php';

class PetToys extends Products
{
    public $type_toys_animal;
    public $width;
    public $height;

    public function __construct($name, $type_toys_animal, $width, $weight, $price, $discount)
    {
        parent::__construct($this->setName($name), $this->setPrice($price), $this->setDiscount($discount));
        $this->setTypeToysAnimal($type_toys_animal);
        $this->setWidth($width);
        $this->setWeight($weight);
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

    public function setWidth($width)
    {
        if (!is_numeric($width)) return;
        $this->width = $width . ' cm';
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWeight($weight)
    {
        if (!is_numeric($weight)) return;
        $this->weight = $weight . ' gr';
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
