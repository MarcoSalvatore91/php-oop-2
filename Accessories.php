<?php

require_once __DIR__ . '/Products.php';

class Accessories extends Products
{
    private $type_accessories;

    public function __construct($name, $type_accessories, $price, $discount)
    {
        parent::__construct($this->setName($name), $this->setPrice($price), $this->setDiscount($discount));
        $this->setTypeAccessories($type_accessories);
    }

    public function setTypeAccessories($type_accessories)
    {
        if (is_numeric($type_accessories)) return;
        $this->type_accessories = $type_accessories;
    }

    public function getTypeAccessories()
    {
        return $this->type_accessories;
    }
}
