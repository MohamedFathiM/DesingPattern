<?php

namespace DesignPattern\Structural\Proxy\RouterInterface\Clients;

class Application
{
    protected string $appName;

    /**
     * @param string $appName
     */
    public function __construct(string $appName)
    {
        $this->appName = $appName;
    }

    public function getAppName(): string
    {
        return $this->appName;
    }
}