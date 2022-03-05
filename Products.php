<?php

require_once __DIR__ . '/Customers.php';

class Products
{
    public $discount;
    public $price;
    public $name;

    public function __construct($name, $price, $discount = 0)
    {
        $this->setDiscount($discount);
        $this->setPrice($price);
        $this->setName($name);
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

    public function setPrice($price)
    {
        if (is_numeric($price) && $price > 0) return
            $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setDiscount($discount)
    {
        if (($discount instanceof Customers) === false) return false;
        $discount = $this->getPrice() - ($this->getPrice() * (20 / 100));
        $this->discount = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}
