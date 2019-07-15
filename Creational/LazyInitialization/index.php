<?php
require_once('burger.php');
require_once('burgerLazyLoader.php');
$burger = BurgerLazyLoader::getBurger(true, true);
echo "Burger with cheese and fries costs: £".$burger->getPrice();
echo "\n";
echo "Instances in lazy loader: ".BurgerLazyLoader::getBurgerCount();
echo "\n";
$burger = BurgerLazyLoader::getBurger(true, false);
echo "Burger with cheese and no fries costs: £".$burger->getPrice();
echo "\n";
echo "Instances in lazy loader: ".BurgerLazyLoader::getBurgerCount();
echo "\n";
$burger = BurgerLazyLoader::getBurger(true, true);
echo "Burger with cheese and fries costs: £".$burger->getPrice();
echo "\n";
echo "Instances in lazy loader: ".BurgerLazyLoader::getBurgerCount();
echo "\n";
?>