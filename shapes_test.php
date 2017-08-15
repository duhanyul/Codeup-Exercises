<?php
require_once 'Squares.php';

$rectangle = new Squares(7,7);

echo $rectangle->area() . PHP_EOL;

echo $rectangle->perimeter() . PHP_EOL;
 ?>
