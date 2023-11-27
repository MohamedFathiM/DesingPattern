<?php

namespace DesignPattern\Creational\FactoryMethod\Button;

class SystemButton extends Button
{
    public function show(): string
    {
        return "Click Me {System Button}";
    }

    public function click(): void
    {
        // TODO: Implement click() method.
    }
}