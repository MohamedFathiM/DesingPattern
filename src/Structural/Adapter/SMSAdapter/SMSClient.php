<?php

namespace DesignPattern\Structural\Adapter\SMSAdapter;

use DesignPattern\Structural\Adapter\SMSAdapter\Messages\Message;

abstract class SMSClient
{
    protected array $messages;

    protected string $deliveredStatus = '';
    /**
     * @param array $messages
     */
    public function __construct(array $messages = [])
    {
        $this->messages = $messages;
    }

    public function addMessage(Message $message)
    {
        $this->messages[] = $message;
    }

    abstract public function filterNumbers(): bool;

    abstract public function send(): bool;

    abstract public function getDeliveryStatus(): string;
}