<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\FormAbstractFactory;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\MobileForm\DesktopButton;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\MobileForm\DesktopWindow;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\WebForm\DesktopTextArea;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\WebForm\DesktopTextInput;

class DesktopFormFactory implements FormAbstractFactory
{

    public function createTextInput(): AbstractTextInput
    {
        return new DesktopTextInput('Mobile Input', 'Enter Your Name', 'Mohamed');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new DesktopTextArea('Mobile Textarea', 'Enter Your Message');
    }

    public function createButton(): AbstractButton
    {
        return new DesktopButton('Click ME');
    }

    public function createWindow(): AbstractWindow
    {
        return new DesktopWindow('250*250');
    }
}