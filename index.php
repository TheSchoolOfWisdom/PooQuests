<?php

require_once __DIR__.'/vendor/autoload.php';

use HighWay\MotorWay;
use HighWay\PedestrianWay;
use HighWay\ResidentialWay;
use Vehicle\Bike;
use Vehicle\Camion;
use Vehicle\Car;
use Vehicle\Skateboard;

$line = "<br><hr><br>";

$bicycle = new Bike('blue', 2);
$skateboard = new Skateboard("black", 1);
$car = new Car('green', 4, 'electric');
$camion = new Camion('blue', 3, 'fuel', 200);

$motor = new MotorWay();
$residential = new ResidentialWay();
$pedestrian = new PedestrianWay();

$motor->addVehicule($bicycle);
$motor->addVehicule($skateboard);
$motor->addVehicule($car);
$motor->addVehicule($camion);

var_dump($motor->getCurrentVehicles());

$residential->addVehicule($bicycle);
$residential->addVehicule($skateboard);
$residential->addVehicule($car);
$residential->addVehicule($camion);

echo $line;
var_dump($residential->getCurrentVehicles());

$pedestrian->addVehicule($bicycle);
$pedestrian->addVehicule($skateboard);
$pedestrian->addVehicule($car);
$pedestrian->addVehicule($camion);

echo $line;
var_dump($pedestrian->getCurrentVehicles());