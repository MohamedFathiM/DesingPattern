<?php

namespace DesignPattern\Creational\Builder\Computer;

class Mouse
{
    private bool $supportFeatures;

    /**
     * @param bool $supportFeatures
     */
    public function __construct(bool $supportFeatures)
    {
        $this->supportFeatures = $supportFeatures;
    }


}