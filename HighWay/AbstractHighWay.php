<?php

namespace HighWay;

abstract class AbstractHighWay
{
    protected $currentVehicles;
    protected $nbLane;
    protected $maxSpeed;

    public function getCurrentVehicles() : array
    {
        return $this->currentVehicles;
    }
    public function getNbLane()
    {
        return $this->nbLane;
    }
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;
    }
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
    abstract public function addVehicule(object $vehicule);
}