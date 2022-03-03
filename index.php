<?php

require_once __DIR__ . '/Products.php';

// Pet-Food

$dog_food = new PetFood('Croccantini - Friskies', 'Cane', 30);

$cat_food = new PetFood('Sheba Cat - Patè', 'Gatto', 25);

$fish_food = new PetFood('Natural Pet - Mangime per pesci rossi', 'Pesce', 10);

// Pet-Toys

$dog_toys = new PetToys('Osso di gomma', 'Cane', 15);

$cat_toys = new PetToys('Gomitolo di lana', 'Gatto', 20);

$hamster_toys = new PetToys('Ruota', 'Criceto', 10);

// Accessories

$dog_accessories = new Accessories('Guinzaglio', 'Cane', 22);

$cat_accessories = new Accessories('Lettiera per gatti', 'Gatto', 14);

$birds_accessories = new Accessories('Gabbia per pappagalli', 'Volatile', 50);
