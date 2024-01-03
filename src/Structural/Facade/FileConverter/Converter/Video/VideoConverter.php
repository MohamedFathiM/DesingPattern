<?php

namespace DesignPattern\Structural\Facade\FileConverter\Converter\Video;

use DesignPattern\Structural\Facade\FileConverter\Converter\Converter;

class VideoConverter implements Converter
{

    public function convert(string $fileName, string $fromType, string $toType): void
    {
        echo "Iam Converting File {$fileName} From {$fromType} To {$toType}\n";
    }
}