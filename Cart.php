<?php

require_once __DIR__ . '/Products.php';

class Cart
{
    public $addToCart = [];

    public function setAddToCart($item)
    {
        if (!($item instanceof ProductsToys)) return;
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
