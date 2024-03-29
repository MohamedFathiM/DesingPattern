<?php

namespace DesignPattern\Structural\Facade\FileConverter\Converter;

interface Converter
{
    public function convert(string $fileName, string $fromType, string $toType): void;
}