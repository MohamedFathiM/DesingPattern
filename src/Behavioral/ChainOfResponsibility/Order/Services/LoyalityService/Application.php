<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Order\Services\LoyalityService;

use DesignPattern\Behavioral\ChainOfResponsibility\Order\User;

class Application
{
    private array $loyaltyDirectory = [
        'USR-100' => 5,
        'USR-101' => 7,
        'USR-103' => 3
    ];

    public function isUserLoyal(User $user): bool
    {
        return $this->loyaltyDirectory[$user->getId()] >= 5;
    }
}
