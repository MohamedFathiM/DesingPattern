<?php

namespace DesignPattern\Structural\Proxy\RouterInterface;

interface RouterInterface
{
    public function resolve(string $url) : bool;
    public function stream();
}