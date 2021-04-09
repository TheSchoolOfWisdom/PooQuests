<?php

namespace Vehicle;

use Interfaces\LightableInterface;

class Bike extends AbstractVehicle implements LightableInterface
{
    public function switchOn()
    {
        if ($this->currentSpeed > 10)
        {
            return true;
        }
    }

    public function switchOff()
    {
        return false;
    }
}