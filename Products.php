<?php

require_once __DIR__ . '/PetFood.php';

require_once __DIR__ . '/PetToys.php';

require_once __DIR__ . '/Accessories.php';

require_once __DIR__ . '/Customers.php';

class ProductsFood extends PetFood
{
    public $discount;

    public function __construct($name_food, $type_animal, $price, $discount = 0)
    {
        parent::__construct($this->setNameFood($name_food), $this->setTypeAnimal($type_animal), $this->setPrice($price));
        $this->setDiscount($discount);
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

class ProductsToys extends PetFood
{
    public $discount;

    public function __construct($name_food, $type_animal, $price, $discount = 0)
    {
        parent::__construct($this->setNameFood($name_food), $this->setTypeAnimal($type_animal), $this->setPrice($price));
        $this->setDiscount($discount);
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

class ProductAccessories extends PetFood
{
    public $discount;

    public function __construct($name_food, $type_animal, $price, $discount = 0)
    {
        parent::__construct($this->setNameFood($name_food), $this->setTypeAnimal($type_animal), $this->setPrice($price));
        $this->setDiscount($discount);
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
