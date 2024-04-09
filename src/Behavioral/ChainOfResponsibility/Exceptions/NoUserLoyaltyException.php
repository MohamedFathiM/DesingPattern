<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Exceptions;

class NoUserLoyaltyException extends \Exception
{
    public function __construct(
        $message = "No User Loyalty",
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
