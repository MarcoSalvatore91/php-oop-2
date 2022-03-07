<?php

require_once __DIR__ . '/Products.php';

require_once __DIR__ . '/PetFood.php';

require_once __DIR__ . '/PetToys.php';

require_once __DIR__ . '/Accessories.php';

class Cart
{
    private $addToCart = [];
    private $removeFromCart = [];

    public function setAddToCart($item)
    {
        if (!($item instanceof Products)) return;
        $this->addToCart[$item->getName()] = $item;
    }

    public function getAddToCart()
    {
        return $this->addToCart;
    }

    public function setRemoveFromCart($item)
    {
        if (($key = array_search($item, $this->addToCart)) !== false) {
            unset($this->addToCart[$key]);
        }
    }
}
