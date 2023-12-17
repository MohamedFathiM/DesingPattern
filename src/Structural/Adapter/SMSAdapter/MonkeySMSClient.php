<?php

namespace DesignPattern\Structural\Adapter\SMSAdapter;

use DesignPattern\Structural\Adapter\SMSAdapter\Messages\Message;

class MonkeySMSClient extends SMSClient
{

    public function filterNumbers(): bool
    {
        $this->messages = array_filter($this->messages, fn(Message $message) => $message->validateNumber());

        return !empty($this->messages);
    }

    public function send(): bool
    {
        if ($this->filterNumbers()) {
            foreach ($this->messages as $message) {
                $this->deliveredStatus = rand(1, 4);
                echo "Message is Being Sent '{$message->getMessage()} '\n";
            }
        }

        return $this->getDeliveryStatus() == SMSDeliveryStatus::SENT;
    }

    public function getDeliveryStatus(): string
    {
        return $this->deliveredStatus;
    }
}