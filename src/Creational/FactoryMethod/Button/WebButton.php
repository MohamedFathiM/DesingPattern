<?php

namespace DesignPattern\Creational\FactoryMethod\Button;

class WebButton extends Button
{

    public function show(): string
    {
        return "<div><button>Click Me</button></div>";
    }

    public function click(): void
    {
        // TODO: Implement click() method.
    }
}