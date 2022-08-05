<?php

class Robot
{
    protected $isOn = false;
    public $name;
    public $id;
    public $purpose;

    public function __construct(string $name, string $id)
    {
        $this->name = $name;
        $this->id = $id;
    }

    public function getState()
    {
        return $this->isOn;
    }

    public function turnOn()
    {
        echo "Turning on...\n";
        $this->isOn = true;
    }

    public function turnOff()
    {
        echo "Turning off...\n";
        $this->isOn = false;
    }

    public function givePurpose($purpose)
    {
        $this->purpose = $purpose;
    }

    public function introduce()
    {
        if($this->isOn)
        {
        echo "Hello friend, my name is $this->name and my Identification is $this->id.\n";
        if(!empty($this->purpose)){
            echo "My purpose is $this->purpose.\n";
        } else {
            echo "I do not have a purpose yet.\n";
        }
        } else {
            echo "...\n";
        }
    }
}
