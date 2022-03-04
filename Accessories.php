<?php

class Accessories
{
    public $name;
    public $type_accessories;
    public float $price;

    public function __construct($name, $type_accessories, float $price)
    {
        $this->setName($name);
        $this->setTypeAccessories($type_accessories);
        $this->setPrice($price);
    }

    public function setName($name)
    {
        if (!is_numeric($name)) return
            $this->name = $name;
    }

    public function getName()
    {
        return $this->type_accessories;
    }

    public function setTypeAccessories($type_accessories)
    {
        if (!is_numeric($type_accessories)) return
            $this->type_accessories = $type_accessories;
    }

    public function getTypeAccessories()
    {
        return $this->type_accessories;
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
