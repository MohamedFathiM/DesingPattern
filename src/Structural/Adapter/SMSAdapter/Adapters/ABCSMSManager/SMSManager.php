<?php

namespace DesignPattern\Structural\Adapter\SMSAdapter\Adapters\ABCSMSManager;

class SMSManager
{
    public function send(array $messages)
    {
        if ($this->checkConnection() && $this->auth() && $this->connect()) {
            foreach ($messages as $message) {
                echo "Your Message '{$message['text']}' is being sent to {$message['number']} \n";
            }
        }
    }

    public function checkConnection(): bool
    {
        return true;
    }

    public function connect(): bool
    {
        return true;
    }

    public function auth(): bool
    {
        return true;
    }

    public function validatePhoneNumber(string $phoneNumber): bool
    {
        return strlen($phoneNumber) < 8;
    }

    public function getDeliveryStatus(): string
    {
        return rand(5, 8);
    }
}