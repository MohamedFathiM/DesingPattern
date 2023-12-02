<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory;

class GuiClient
{
    private FormAbstractFactory $factory;

    /**
     * @param FormAbstractFactory $abstractFactory
     */
    public function __construct(FormAbstractFactory $abstractFactory)
    {
        $this->factory = $abstractFactory;
    }

    public function setFactory(FormAbstractFactory $factory): void
    {
        $this->factory = $factory;
    }

    public function createForm()
    {
        $window =  $this->factory->createWindow();
        $window->addComponent($this->factory->createTextArea());
        $window->addComponent($this->factory->createTextInput());
        $window->addComponent($this->factory->createButton());

        return $window->render();
    }

}