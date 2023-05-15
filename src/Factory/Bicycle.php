<?php

namespace DesignPattern\Factory;

class Bicycle
{
    public function driveTo(string $destination)
    {
        echo "$destination";
    }
}
