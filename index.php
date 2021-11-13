<?php

require 'Car.php';
require 'Bicycle.php';

$car = new Car('blue',5,'fuel');
$bicycle = new Bicycle('red',1);

var_dump($car->switchOff(),$car->switchOn());
$bicycle->setCurrentSpeed(11);
var_dump($bicycle->switchOff(),$bicycle->switchOn());
