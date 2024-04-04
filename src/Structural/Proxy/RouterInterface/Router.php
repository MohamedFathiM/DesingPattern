<?php

namespace DesignPattern\Structural\Proxy\RouterInterface;

use DesignPattern\Structural\Proxy\RouterInterface\RoutingComponents\ConnectionManager;
use DesignPattern\Structural\Proxy\RouterInterface\RoutingComponents\Firewall;
use DesignPattern\Structural\Proxy\RouterInterface\RoutingComponents\RoutingTable;

class Router implements RouterInterface
{
    private ConnectionManager $connectionManager;
    private RoutingTable $table;
    private Firewall $firewall;

    /**
     * @param ConnectionManager $connectionManager
     * @param RoutingTable $table
     * @param Firewall $firewall
     */
    public function __construct(
        ConnectionManager $connectionManager,
        RoutingTable $table,
        Firewall $firewall
    ) {
        $this->connectionManager = $connectionManager;
        $this->table = $table;
        $this->firewall = $firewall;
    }


    public function resolve(string $url): bool
    {
        $route = $this->table->mapUrlToIpAddress($url);

        if ($route) {
            $this->connectTo($route->getIpAddress());
        } else {
            echo "Route is not found \n";

            return false;
        }

        return true;
    }

    public function stream()
    {
        $packets = [
            'Packet one is clean',
            'Packet two is __BAD__',
            'Packet three is clean',
            'Packet four is __BAD__',
        ];

        foreach ($packets as $packet) {
            if ($this->firewall->isValidPacket($packet)) {
                echo "{$packet} is Clean \n";
            } else {
                echo "Packet was Dropped \n";
            }
        }

        $this->terminate();
    }

    private function connectTo(string $ipAddress)
    {
        $this->connectionManager->connectTo($ipAddress);
    }

    private function terminate()
    {
        $this->connectionManager->terminate();
    }
}
