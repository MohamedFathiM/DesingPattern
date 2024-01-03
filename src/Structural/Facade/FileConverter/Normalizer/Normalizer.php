<?php

namespace DesignPattern\Structural\Facade\FileConverter\Normalizer;

interface Normalizer
{
    public function normalize(string $fileName): void;
}