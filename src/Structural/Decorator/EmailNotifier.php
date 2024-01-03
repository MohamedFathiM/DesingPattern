<?php

namespace DesignPattern\Structural\Decorator;

class EmailNotifier implements Notifier
{
    private string $email;

    /**
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function notify()
    {
        echo "Sending Email To ... {$this->email}\n";
        echo "You latest Operation was Executed Successfully\n";
    }
}