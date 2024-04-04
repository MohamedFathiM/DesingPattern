<?php

namespace DesignPattern\Structural\Proxy\RouterInterface\RoutingComponents;

class Firewall
{
    public function isValidPacket(string $packet): bool
    {
        return !preg_match('/__BAD__/i', $packet);
    }
}
