<?php

namespace HighWay;

class ResidentialWay extends AbstractHighWay
{
    public function __construct()
    {
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }

    public function addVehicule(object $vehicule)
    {
        $this->currentVehicles[] = $vehicule;
    }
}