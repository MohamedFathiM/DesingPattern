<?php

namespace DesignPattern\OOP\PHP\Relationship\Association\Printer;

abstract class Printer
{
    protected string $stringToBePrinted;

    public function SetTextToPrint($string)
    {
        $this->stringToBePrinted = $string;
    }
    
    abstract public function printToScreen(): string;
}
