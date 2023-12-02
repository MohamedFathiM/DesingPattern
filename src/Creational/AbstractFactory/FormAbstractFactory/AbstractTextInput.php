<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory;

abstract class AbstractTextInput implements Renderable
{
    protected string $name;
    protected string $label;
    protected string $value;

    /**
     * @param string $name
     * @param string $label
     * @param string $value
     */
    public function __construct(string $name, string $label, string $value)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    abstract public function onChange(): void;
}