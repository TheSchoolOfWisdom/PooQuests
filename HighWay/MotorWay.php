<?php

namespace HighWay;

use Vehicle\Bike;
use Vehicle\Skateboard;

class MotorWay extends AbstractHighWay
{
    public function __construct()
    {
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }

    public function addVehicule(object $vehicule)
    {
        if (!$vehicule instanceof Bike && !$vehicule instanceof Skateboard) {
            $this->currentVehicles[] = $vehicule;
        }
    }
}