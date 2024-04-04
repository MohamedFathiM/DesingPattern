<?php

namespace DesignPattern\Structural\Proxy\RouterInterface\RoutingComponents;

class ConnectionManager
{
    public function connectTo(string $ipAddress)
    {
        echo "Connecting to {$ipAddress} \n";
    }

    public function terminate()
    {
        echo "Disconnecting ..... \n";
    }
}