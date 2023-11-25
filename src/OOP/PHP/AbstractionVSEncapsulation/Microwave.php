<?php

namespace DesignPattern\OOP\PHP\AbstractionVSEncapsulation;

class Microwave
{
    private int $temp;
    private string $program;
    private int $time;
    private $status = false;

    /**
     * @param int $temp
     * @param string $program
     * @param int $time
     */
    public function __construct(int $temp, string $program, int $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }

    public function turnOn(): bool
    {
        $this->status = true;

        return true;
    }
    public function turnOff(): bool
    {
        $this->status = false;

        return true;
    }
    public function deFreeze():string
    {
        // The first OOP Concept (Abstraction)

        $this->turnOnMicrowaveHeatingSystem();
        $this->loadingDeFreezingProgram();
        $this->setTimer();

        return "I am de-freezing food at {$this->temp} using the program {$this->program}";
    }

    public function turnOnMicrowaveHeatingSystem():string
    {
        return "Starting On Heating System";
    }

    private function loadingDeFreezingProgram():string
    {
        return "Loading program {$this->program}";
    }

    private function setTimer():string
    {
        return "Setting De-freezing time to {$this->time} Seconds";
    }

}