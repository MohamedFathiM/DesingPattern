<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory;

interface FormAbstractFactory
{
    public function createTextInput():AbstractTextInput;
    public function createTextArea():AbstractTextArea;
    public function createButton():AbstractButton;
    public function createWindow():AbstractWindow;
}