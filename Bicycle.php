<?php

// Bicycle.php

require_once 'NoMotorVehicle.php';
require_once 'LightableInterface.php';

final class Bicycle extends NoMotorVehicle implements LightableInterface
{

    /**
     * @var bool
     */
    protected $hasDynamo = false;

    public function setDynamo()
    {
        if ($this->hasDynamo === true) {
            $this->hasDynamo = false;
            return 'You remove dynamo.' . PHP_EOL;
        } else {
            $this->hasDynamo = true;
            return 'You put dynamo.' . PHP_EOL;
        }

    }

    public function switchOn()
    {
        $bool=$this->hasDynamo;
        if ($bool===true) {
            if ($this->currentSpeed >= 10){
                return true;
            } else {
                return 'You are too slow!'. PHP_EOL;
            }
        } else {
            return "You don't have dynamo.";
        }
    }

    public function switchOff()
    {
        $bool=$this->hasDynamo;
        if ($bool===false){
            return "You don't have dynamo.";
        } else {
        return false;}
    }
}
