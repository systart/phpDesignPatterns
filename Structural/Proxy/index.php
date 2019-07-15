<?php
require_once('animalFeeder.php');
require_once('animalFeederProxy.php');
require_once('cat.php');
require_once('dog.php');
$felix = new \PetShop\AnimalFeederProxy('Cat', 'Felix');
echo $felix->displayFood(1);
echo "\n";
echo $felix->dropFood(1, true);
echo "\n";
$brian = new \PetShop\AnimalFeederProxy('Dog', 'Brian');
echo $brian->displayFood(1);
echo "\n";
echo $brian->dropFood(1, true);
echo "\n";
?>