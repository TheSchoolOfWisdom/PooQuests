<?php

namespace Vehicle;

use Interfaces\LightableInterface;

class Camion extends AbstractVehicle implements LightableInterface
{
    private $storage;
    private $loading = 0;

    public function __construct($color, $nbSeats, $energy, $storage)
    {
        $this->energy = $energy;
        $this->storage = $storage;
        parent::__construct($color, $nbSeats);
    }

    public function SetLoading($loading)
    {
        $this->loading = $loading;
    }

    public function GetStorageStatus()
    {
        if ($this->loading == 0) {
            return "Is empty";
        } else if ($this->loading < $this->storage) {
            return "Is filling";
        } else if ($this->loading == $this->storage) {
            return "Is full";
        }
    }
    public function switchOn()
    {
        // TODO: Implement switchOn() method.
    }

    public function switchOff()
    {
        // TODO: Implement switchOff() method.
    }
}