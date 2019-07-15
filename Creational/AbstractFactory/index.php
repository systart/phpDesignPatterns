<?php
require_once('toyFactory.php');
require_once('Toys/toy.php');
require_once('Toys/mazeToy.php');
require_once('Toys/puzzleToy.php');
require_once('sfToyFactory.php');
require_once('Toys/sfMazeToy.php');
require_once('Toys/sfPuzzleToy.php');
require_once('ukToyFactory.php');
require_once('Toys/ukMazeToy.php');
require_once('Toys/ukPuzzleToy.php');

$sanFraciscoFactory = new SFToyFactory();
var_dump($sanFraciscoFactory->makeMaze());
echo "\n";
var_dump($sanFraciscoFactory->makePuzzle());
echo "\n";
$britishToyFactory = new UKToyFactory();
var_dump($britishToyFactory->makeMaze());
echo "\n";
var_dump($britishToyFactory->makePuzzle());
echo "\n";
?>