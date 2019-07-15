<?php
require_once('pizza.php');
require_once('pizzaBuilder.php');
$pizzaRecipe = (new PizzaBuilder(18))
    ->cheese(true)
    ->pepperoni(true)
    ->bacon(false)
    ->build();
$order = new Pizza($pizzaRecipe);
echo $order->show()."\n";
?>