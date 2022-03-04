<?php

require_once __DIR__ . '/Products.php';

class Cart
{
    public $addToCart = [];
    /*     public $removeToCart = []; */


    public function __construct($addToCart/* , $removeToCart */)
    {
        $this->setAddToCart($addToCart);
        /* $this->setRemoveToCart($removeToCart); */
    }

    public function setAddToCart($item)
    {
        if (!($item instanceof ProductsToys)) return;
        $this->addToCart[$item->getName()] = $item;
    }

    public function getAddToCart()
    {
        return $this->addToCart;
    }
}
