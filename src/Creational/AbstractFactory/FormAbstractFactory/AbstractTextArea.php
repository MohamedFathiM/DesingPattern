<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory;

abstract class AbstractTextArea implements Renderable
{
    protected string $name;
    protected string $text;

    /**
     *
     * @param string $name
     * @param string $text
     */
    public function __construct(string $name, string $text)
    {
        $this->name = $name;
        $this->text = $text;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    abstract public function onResize(): void;
}