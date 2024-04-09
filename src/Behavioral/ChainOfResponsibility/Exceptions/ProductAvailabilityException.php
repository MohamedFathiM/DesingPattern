<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Exceptions;

class ProductAvailabilityException extends \Exception
{
    public function __construct(
        $message = "Product Not Available",
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
