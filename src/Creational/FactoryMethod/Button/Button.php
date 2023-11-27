<?php

namespace DesignPattern\Creational\FactoryMethod\Button;

abstract class Button
{
    abstract public function show(): string;
    abstract public function click(): void;
}