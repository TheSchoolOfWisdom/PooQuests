<?php

namespace HighWay;

use Vehicle\Camion;
use Vehicle\Car;

class PedestrianWay extends AbstractHighWay
{
    public function __construct()
    {
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }

    public function addVehicule(object $vehicule)
    {
        if (!$vehicule instanceof Car && !$vehicule instanceof Camion) {
            $this->currentVehicles[] = $vehicule;
        }
    }
}