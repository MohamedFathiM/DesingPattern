<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Exceptions;

class ProductShipmentException extends \Exception
{
    public function __construct(
        $message = "Cannot Ship Product at this moment",
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
