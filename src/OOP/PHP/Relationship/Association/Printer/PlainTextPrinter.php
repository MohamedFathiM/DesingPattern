<?php

namespace DesignPattern\OOP\PHP\Relationship\Association\Printer;

class PlainTextPrinter extends Printer
{

    public function printToScreen(): string
    {
        return "Welcome To The School {$this->stringToBePrinted}";
    }
}