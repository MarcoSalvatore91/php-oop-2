<?php

class Accessories
{
    public $name_accessories;
    public $type_accessories;
    public $price;

    public function __construct($name_accessories, $type_accessories, $price)
    {
    }

    public function setNameAccessories($name_accessories)
    {
        if (!is_numeric($name_accessories)) return
            $this->name_accessories = $name_accessories;
    }

    public function getNameAccessories()
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
