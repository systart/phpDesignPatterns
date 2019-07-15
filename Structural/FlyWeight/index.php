<?php
require_once('shape.php');
require_once('circle.php');
require_once('shapeFactory.php');
$colours = array('red', 'blue', 'green', 'black', 'white', 'orange');
$factory = new ShapeFactory();
for ($i = 0; $i < 100; $i++) {
    $randomColour = $colours[array_rand($colours)];
    $circle = $factory->getCircle($randomColour);
    $circle->setX(rand(0, 100));
    $circle->setY(rand(0, 100));
    $circle->setRadius(100);
    $circle->draw();
}
?>