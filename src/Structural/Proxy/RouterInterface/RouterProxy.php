<?php

namespace DesignPattern\Structural\Proxy\RouterInterface;

use DesignPattern\Structural\Proxy\RouterInterface\Clients\Application;

class RouterProxy
{
    private RouterInterface $router;
    private Application $app;
    private array $acl;

    /**
     * @param RouterInterface $router
     * @param Application $app
     * @param array $acl
     */
    public function __construct(RouterInterface $router, Application $app, array $acl)
    {
        $this->router = $router;
        $this->app = $app;
        $this->acl = $acl;
    }

    public function resolve($url): bool
    {
        if ($this->isRouterAvailable()) {
            return $this->router->resolve($url);
        } else {
            echo "Router is not available \n";
        }

        return false;
    }

    public function stream()
    {
        if ($this->isRouterAvailable()) {
            return $this->router->stream();
        } else {
            echo "Router is not available \n";
        }

        return false;
    }

    public function isRouterAvailable(): bool
    {
        return in_array($this->app->getAppName(), $this->acl);
    }
}
