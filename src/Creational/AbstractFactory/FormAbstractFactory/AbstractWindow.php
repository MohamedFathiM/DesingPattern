<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory;

abstract class AbstractWindow
{
    protected array $components;
    protected string $size;

    /**
     * @param string $size
     */
    public function __construct(string $size)
    {
        $this->size = $size;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    public function addComponent(Renderable $component)
    {
        $this->components[] = $component;
    }

    public function render(): string
    {
        return implode('\n', array_map(function (Renderable $item) {
            $item->render();
        }, $this->components));
    }

    abstract public function onClose(): void;

    abstract public function onResize(): void;

}