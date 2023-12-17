<?php

namespace DesignPattern\Structural\Adapter\SMSAdapter\Adapters;

use DesignPattern\Structural\Adapter\SMSAdapter\Adapters\ABCSMSManager\SMSManager;
use DesignPattern\Structural\Adapter\SMSAdapter\Messages\Message;
use DesignPattern\Structural\Adapter\SMSAdapter\SMSClient;
use DesignPattern\Structural\Adapter\SMSAdapter\SMSDeliveryStatus;

class ABCSMSClientAdapter extends SMSClient
{
    private SMSManager $manager;

    /**
     * @param SMSManager $manager
     */
    public function __construct(array $messages , SMSManager $manager)
    {
        parent::__construct($messages);
        $this->manager = $manager;
    }

    public function filterNumbers(): bool
    {
        $this->messages = array_filter(
            $this->messages,
            fn(Message $message) => $this->manager->validatePhoneNumber($message->getNumber())
        );

        return !empty($this->messages);
    }

    public function send(): bool
    {
        if ($this->filterNumbers()) {
            $this->manager->send(
                array_map(function (Message $message): array {
                    return [
                        'number' => $message->getNumber(),
                        'text' => $message->getMessage()
                    ];

                }, $this->messages));
        }

        return $this->getDeliveryStatus() == SMSDeliveryStatus::SENT;
    }

    public function getDeliveryStatus(): string
    {
        return $this->manager->getDeliveryStatus() - 4;
    }
}