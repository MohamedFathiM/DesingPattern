<?php

namespace DesignPattern\Creational\FactoryMethod\Button;

class UiButton extends Button
{

    public function show(): string
    {
        return "Ui Button";
    }

    public function click(): void
    {
        // TODO: Implement click() method.
    }
}