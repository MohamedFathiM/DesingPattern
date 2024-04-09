<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Order\Handlers;

abstract class BaseHandler implements Handler
{
    private Handler $nextHandler;

    public function setNextHandler(Handler $handler): BaseHandler
    {
        $this->nextHandler = $handler;

        return $this->nextHandler;
    }

    public function getNextHandler(): Handler
    {
        return $this->nextHandler;
    }
}
