<?php

namespace DesignPattern\Structural\Proxy\RouterInterface\Clients;

use DateTime;

class Application2 extends Application
{
    /**
     * @param string $appName
     */
    public function __construct(string $appName = 'APP_2')
    {
        parent::__construct($appName);
    }
}
