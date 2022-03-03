<?php

require_once __DIR__ . '/Products.php';

require_once __DIR__ . '/Customers.php';

// User 

$user_1 = new Customers('Marco', 'Salvatore', '30');

// Pet-Food

$dog_food = new ProductsFood('Croccantini - Friskies', 'Cane', 25, $user_1);

$cat_food = new ProductsFood('Sheba Cat - Patè', 'Gatto', 25);

$fish_food = new ProductsFood('Natural Pet - Mangime per pesci rossi', 'Pesce', 10);

var_dump($dog_food);

// Pet-Toys

$dog_toys = new ProductsToys('Osso di gomma', 'Cane', 15, $user_1);

$cat_toys = new ProductsToys('Gomitolo di lana', 'Gatto', 20);

$hamster_toys = new ProductsToys('Ruota', 'Criceto', 10);

var_dump($dog_toys);

// Accessories

$dog_accessories = new ProductAccessories('Guinzaglio', 'Cane', 22, $user_1);

$cat_accessories = new ProductAccessories('Lettiera per gatti', 'Gatto', 14);

$birds_accessories = new ProductAccessories('Gabbia per pappagalli', 'Volatile', 50);

var_dump($dog_accessories);
