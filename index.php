<?php

require_once __DIR__ . '/Products.php';

require_once __DIR__ . '/Cart.php';

require_once __DIR__ . '/BankAccount.php';

// User 

$user_1 = new Customers('Marco', 'Salvatore', '30', 'Prato', 'Via Rosa', '59100', 'Italy');

// Bank Account

$bank_account = new BankAccount('12345', 2022, 200);

var_dump($bank_account);

// Pet-Food

$dog_food = new PetFood('Croccantini - Friskies', 'Cane', 23, $user_1);

$cat_food = new PetFood('Sheba Cat - Patè', 'Gatto', 20, $user_1);

$fish_food = new PetFood('Natural Pet - Mangime per pesci rossi', 'Pesce', 10, $user_1);

// Pet-Toys

$dog_toys = new PetToys('Osso di gomma', 'Cane', '15', '30', 30, $user_1);

$cat_toys = new PetToys('Gomitolo di lana', 'Gatto', '20', '20', 20, $user_1);

$hamster_toys = new PetToys('Ruota', 'Criceto', '10', '10', 10, $user_1);


// Accessories

$dog_accessories = new Accessories('Guinzaglio', 'Cane', 22, $user_1);

$cat_accessories = new Accessories('Lettiera per gatti', 'Gatto', 14, $user_1);

$birds_accessories = new Accessories('Gabbia per pappagalli', 'Volatile', 50, $user_1);

// Cart

$item_1 = new Cart();

$item_1->setAddToCart($dog_toys);

$item_1->setAddToCart($cat_toys);

var_dump($item_1);

$item_1->setRemoveFromCart($dog_toys);

var_dump($item_1);
