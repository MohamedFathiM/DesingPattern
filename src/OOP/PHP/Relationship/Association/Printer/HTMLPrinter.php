<?php

namespace DesignPattern\OOP\PHP\Relationship\Association\Printer;

class HTMLPrinter extends Printer
{

    public function printToScreen(): string
    {
        return "<h1> WELCOME To The School $this->stringToBePrinted </h1>";
    }
}