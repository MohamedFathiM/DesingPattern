<?php

namespace DesignPattern\Structural\Facade\FileConverter\Converter\Audio;

use DesignPattern\Structural\Facade\FileConverter\Converter\Converter;

class AudioConverter implements Converter
{

    public function convert(string $fileName, string $fromType, string $toType): void
    {
        echo "Iam Converting File {$fileName} From {$fromType} To {$toType}\n";
    }
}