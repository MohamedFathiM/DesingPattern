<?php

namespace DesignPattern\Structural\Proxy\RouterInterface;

use DesignPattern\Structural\Proxy\RouterInterface\RoutingComponents\ConnectionManager;
use DesignPattern\Structural\Proxy\RouterInterface\RoutingComponents\Firewall;
use DesignPattern\Structural\Proxy\RouterInterface\RoutingComponents\Route;
use DesignPattern\Structural\Proxy\RouterInterface\RoutingComponents\RoutingTable;

class RouterFactory
{
    public static function createRouter(): RouterInterface
    {
        $routes = [
            new Route('http://www.google.com', '152.2.3.4'),
            new Route('http://www.abc.com', '152.3.4.5'),
            new Route('http://www.xyz.com', '152.4.5.6'),
        ];

        return new Router(
            new ConnectionManager(),
            new RoutingTable($routes),
            new Firewall()
        );
    }
}
