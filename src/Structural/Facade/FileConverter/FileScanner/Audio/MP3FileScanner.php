<?php

namespace DesignPattern\Structural\Facade\FileConverter\FileScanner\Audio;

use DesignPattern\Structural\Facade\FileConverter\FileScanner\FileScanner;

class MP3FileScanner extends FileScanner
{

    public function scan(): bool
    {
        return (bool) rand(0, 1);
    }
}